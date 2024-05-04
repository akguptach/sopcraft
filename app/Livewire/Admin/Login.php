<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\Admin;
use Hash;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.admin.login')
        ->layout('admin.layouts.login')
        ->title('SOP Admin Login'); 
    }

    public function auth()
    {
        $this->validate(
            [
                'email' => 'required|email|exists:\App\Models\Admin,login_username,id,'.env("WEBSITE_ID"),
                'password' => 'required'
            ]
        );

        $admin = Admin::where(
            [
                'id' => env("WEBSITE_ID"),
                'status' => 'active',
                'login_username' => $this->email
            ]
        )->first(['id','login_username','login_password','status']);

        if(Hash::check($this->password,$admin->login_password)) {
            session()->put('sop_admin',$admin->id);
            return redirect()->route('dashboard');
        }else {
            Session::flash('incorrect_sop_admin_password','Password not match!');
        }
    }
}
