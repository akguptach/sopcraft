<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task_types;
use App\Models\Level_study;
use App\Models\Grades;
use App\Models\Website;
use App\Models\Orders;
use App\Models\OrdersDetails;
use Response;
use Validator;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        //         dd('gg');
        // echo $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';die;
        $data['task_types'] = Task_types::where('website_type', 'SOP')->orderBy('id', 'desc')->get()->toArray();
        $data['levels'] = Level_study::where('website_type', 'SOP')->orderBy('id', 'desc')->get()->toArray();
        //$data['grades']     =   Grades::orderBy('id','desc')->get()->toArray();create
        return view('order', $data);
    }

    public function checkprice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'task_type_id' => 'required|numeric',
            'no_of_words' => 'required|numeric',
            'studylabel_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return Response::json(['success' => 'false', 'price' => [], 'message' => $validator->errors()]);
        }
        $website_id = env('WEBSITE_ID');

        $task_type_id = $request->task_type_id;
        $no_of_words = $request->no_of_words;
        $labelofstudy_id = $request->studylabel_id;

        $websiteArr = Website::where('id', $website_id)->first()->toArray(); //%

        $labelofstudyArr = Level_study::where('id', $labelofstudy_id)->first()->toArray();
        $task_typeArr = Task_types::where('id', $task_type_id)->first()->toArray(); //%

        if ($no_of_words < $websiteArr['no_words']) {
            $no_of_words = $websiteArr['no_words'];
        }

        $total1 = $websiteArr['price'] + ($no_of_words - $websiteArr['no_words']) * $websiteArr['additional_words'];

        $total_percent = $labelofstudyArr['price'] + $task_typeArr['price'];

        $total = $total1 + ($total1 * $total_percent) / 100;

        return Response::json(['success' => 'true', 'price' => $websiteArr['currency_sign'] . round($total), 'price1' => round($total) . ' ' . $websiteArr['currency']]);
    }

    public function create(Request $request)
    {
        $url = 'https://s3.' . config('app.aws_default_region') . '.amazonaws.com/' . config('app.aws_bucket') . '/';

        $website_id = config('app.website_id');

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'task' => 'required',
            'subject_name' => 'required',
            'task_topic' => 'required',
            'task_type_id' => 'required',
            'no_of_words' => 'required',
            'studylabel_id' => 'required',
            'delivery_date' => 'required',
            'delivery_price' => 'required',
            'fileupload' => 'required|mimes:zip,pdf,doc,docx,application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:102400', // Allow only zip, pdf, and doc files, with a maximum size of 100MB
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }

        $order = new Orders();

        $order->title = $request->title;

        $order->task = $request->task;

        $order->subject_name = $request->subject_name;
        $order->website_id = $website_id;
        $order->task_topic = $request->task_topic;
        $order->task_type_id = $request->task_type_id;
        $order->no_of_words = $request->no_of_words;

        $order->studylabel_id = $request->studylabel_id;
        $order->delivery_date = $request->delivery_date;
        $arrPrice = explode(' ', $request->delivery_price);
        $order->price = $arrPrice[0];
        $order->currency_code = $arrPrice[1];

        $order->student_id = Auth::id();

        // Handle file upload to S3
        if ($request->hasFile('fileupload')) {
            $file = $request->file('fileupload');
            $path = $file->store('uploads', 's3'); // Use S3 as the disk
            $order->fileupload = $url . $path;
        } else {
            if ($request->delivery_pricefile_upload_url) {
                $order->fileupload = $request->delivery_pricefile_upload_url;
            }
        }

        $order->save();

        // Process task details
        foreach ($request->input('tasktitle', []) as $key => $taskTitle) {
            $orderDetail = new OrdersDetails();
            $orderDetail->order_id = $order->id;
            $orderDetail->ques_ans = $taskTitle;

            // Handle file upload for each taskfile
            if ($request->hasFile("taskfile.$key")) {
                $taskFile = $request->file("taskfile.$key");
                $taskFilePath = $taskFile->store('taskfiles', 's3');
                $orderDetail->attechment_file = $url . $taskFilePath;
            }

            $orderDetail->save();
        }

        $websiteArr = Website::where('id', $website_id)->first()->toArray();
        $order_number = $websiteArr['order_prefix'] . str_pad($order->id, 3, 0, STR_PAD_LEFT);

        DB::table('orders')->updateOrInsert(
            [
                'id' => $order->id,
            ],
            [
                'id' => $order->id,
                'order_number' => $order_number,
            ],
        );

        return response()->json([
            'status' => 'order added successfully.',
            'order_id' => \Crypt::encrypt($order->id),
        ]);
    }
    // public function create(Request $request)
    // {
    // 	// dd('dd');

    // 	$website_id = env('WEBSITE_ID');

    // 	$validator = Validator::make($request->all(), [

    // 		'title' => 'required',
    // 		'task' => 'required',
    // 		'subject_name' => 'required',
    // 		'task_topic' => 'required',
    // 		'task_type_id' => 'required',
    // 		'no_of_words' => 'required',
    // 		'studylabel_id' => 'required',
    // 		'delivery_date' => 'required',
    // 		'delivery_price' => 'required',
    // 		//'fileupload' => 'file|mimes:zip,pdf,doc|max:102400', // Allow only zip, pdf, and doc files, with a maximum size of 100MB
    // 	]);

    // 	if ($validator->fails()) {

    // 		return $this->sendError('Validation Error.', $validator->errors(), 422);
    // 	}

    // 	$order = new Orders();

    // 	$order->title = $request->title;

    // 	$order->task = $request->task;

    // 	$order->subject_name = $request->subject_name;
    // 	$order->website_id = $website_id;
    // 	$order->task_topic = $request->task_topic;
    // 	$order->task_type_id = $request->task_type_id;
    // 	$order->no_of_words = $request->no_of_words;

    // 	$order->studylabel_id = $request->studylabel_id;
    // 	$order->delivery_date = $request->delivery_date;
    // 	$arrPrice = explode(' ', $request->delivery_price);
    // 	$order->price = $arrPrice[0];
    // 	$order->currency_code = $arrPrice[1];

    // 	$order->student_id = Auth::id();

    // 	// Handle file upload
    // 	if ($request->hasFile('fileupload')) {
    // 		$file = $request->file('fileupload');
    // 		$path = $file->store('uploads'); // 'uploads' is the storage path; adjust as needed
    // 		$order->fileupload = $path;
    // 	}

    // 	$order->save();

    // 	$websiteArr      =   Website::where('id', $website_id)->first()->toArray();
    // 	$order_number = $websiteArr['order_prefix'] . str_pad($order->id, 3, 0, STR_PAD_LEFT);

    // 	DB::table('orders')->updateOrInsert(
    // 		[
    // 			'id' => $order->id
    // 		],
    // 		[
    // 			'id' => $order->id,
    // 			'order_number' => $order_number
    // 		]
    // 	);

    // 	return response()->json(
    // 		[
    // 			'status' => 'order added successfully.',
    // 			'order_id' => \Crypt::encrypt($order->id)
    // 		]
    // 	);
    // }

    public function transactions()
    {
        $user_id = Auth::id();
        $arrD = DB::table('orders')

            ->join('websites', 'websites.id', '=', 'orders.website_id')
            ->join('task_types', 'task_types.id', '=', 'orders.task_type_id')
            ->join('level_study', 'level_study.id', '=', 'orders.studylabel_id')
            ->select('orders.*', 'websites.website_name', 'task_types.type_name', 'level_study.level_name')
            ->where('orders.student_id', $user_id)
            ->orderBy('orders.id', 'desc')
            ->get();

        $data['orders'] = json_decode(json_encode($arrD), true);

        return view('transactions', $data);
    }
	
	public function vieworder($id)
	{
		$user_id = Auth::id();
        $arrD = DB::table('orders') 

            ->join('websites', 'websites.id', '=', 'orders.website_id')
            ->join('task_types', 'task_types.id', '=', 'orders.task_type_id')
            ->join('level_study', 'level_study.id', '=', 'orders.studylabel_id')
            ->select('orders.*', 'websites.website_name', 'task_types.type_name', 'level_study.level_name')
            ->where('orders.student_id', $user_id)
			 ->where('orders.id', $id)
            ->get();

        $data['order'] = $arrD[0];
		return view('order_details', $data);
	}

    public function refer_friend()
    {
        $data = [];

        return view('refer_friend_individual', $data);
    }

    public function statements()
    {
        $data = [];

        return view('statements', $data);
    }
}
