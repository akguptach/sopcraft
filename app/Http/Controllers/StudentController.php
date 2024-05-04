<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Orders;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Storage;
class StudentController extends Controller
{
    public function create(Request $request)
    {
        $website_id = env('WEBSITE_ID');
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3',
            'last_name' => 'required',
            //'email' => ['required|unique:student,email'],
            'email' => [
                'required',
                'email',
                Rule::unique('student', 'email')->where(function ($query) use ($website_id) {
                    $query->where('website_id', '=', $website_id);
                }),
            ],
            'country_code' => 'required',
            'phone_number' => [
                'required',
                Rule::unique('student', 'phone_number')->where(function ($query) use ($website_id) {
                    $query->where('website_id', '=', $website_id);
                }),
            ],
            'password' => 'required|min:5',
            'confirm_password' => 'required|min:5',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->country_code = $request->country_code;
        $student->phone_number = $request->phone_number;
        $student->website_id = env('WEBSITE_ID');
        $student->password = Hash::make($request->password);
        $student->save();
        $token = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
        $data = auth()->user();
        $response = [
            'status' => 1,

            'access_token' => $token,

            'admin' => $data,

            'message' => 'Logged successfully.',
        ];
        return $this->sendResponse($response, 'User details updated successfully.');
    }
    public function profile(Request $request)
    {
        $data = [];
        $profile = auth()->user();
        // $x=Orders::all();
        // dd(auth()->user()->p)
        // dd($x);
        return view('profile', compact('data', 'profile'));
    }
    public function changepass()
    {
        // dd(auth()->user()->id);
        $data = [];
        return view('changepass', $data);
    }

    public function updatePassword(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|min:5',
            'password' => 'required|min:5|confirmed', // 'confirmed' rule is used to validate the 'confirm_password' field
        ]);

        // Add a custom validation rule to check the old password
        $validator->after(function ($validator) use ($request) {
            if (!\Hash::check($request->old_password, Auth::user()->password)) {
                $validator->errors()->add('old_password', 'The old password is incorrect.');
            }
        });

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors(), 422);
        // }

        // $student = new Student();
        $student = Student::find(auth()->user()->id);
        $student->password = Hash::make($request->password);
        $student->save();

        // auth()->logout();
        return back()->with('changepassmessage', 'Password changed successfully.');
    }
    public function updateProfile(Request $request)
    {
        // dd($request->profile_pic);
        $website_id = env('WEBSITE_ID');
        $rules['first_name'] = 'required|min:3';
        $rules['last_name'] = 'required';
        if($request->hasFile('profile_pic') && auth()->user()->profile_pic){
            $rules['profile_pic'] = 'required|max:5140';
        }
        if($request->hasFile('profile_pic')){
            $rules['profile_pic'] = 'required|max:5140';
        }
        if(auth()->user()->email != $request->email){
                $rules['email'] = [
                'required',
                'email',
                Rule::unique('student', 'email')->where(function ($query) use ($website_id) {
                    $query->where('website_id', '=', $website_id);
                }),
            ];
        }

        if(auth()->user()->phone_number != $request->phone_number){
                $rules['phone_number'] = [
                    'required',
                    Rule::unique('student', 'phone_number')->where(function ($query) use ($website_id) {
                        $query->where('website_id', '=', $website_id);
                    }),
                ];
        }
        $messages = [
            // 'title.required' => 'Specify the title of change log',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('profile_pic')) {
        $saved_profile_pic = auth()->user()->profile_pic;
        if ($saved_profile_pic && Storage::exists($saved_profile_pic)) {
            Storage::delete($saved_profile_pic);
        }
        $imageName = time() . '.' . $request->profile_pic->extension(); // Generate a unique name for the image
        $request->profile_pic->move(public_path('user_profile_images'), $imageName);
        $imageLocation = 'user_profile_images/' . $imageName;
        // dd($imageLocation);
        }
        $student = Student::find(auth()->user()->id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone_number = $request->phone_number;
        $student->profile_pic = $imageLocation??auth()->user()->profile_pic;
        $student->save();

        return back()->with('profileupdatedsmessage', 'Profile Updated successfully.');
        // <img src="{{ asset($table->image_location) }}" alt="Image">
    }
}
