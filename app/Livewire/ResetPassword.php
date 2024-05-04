<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\Student;
use Illuminate\Support\Str;
use Hash;
use Mail;

class ResetPassword extends Component
{
    public $formState;
    public $email;
    public $code;
    public $otp;
    public $password;
    public $confirm_password;
    
    public function render()
    {
        return view('livewire.reset-password'); 
    }
    
    public function mount()
    {
        $this->formState = 'send-email';
    }
    
    public function sendEmail()
    {
        $this->validate(
            [
                'email' => 'required|email|exists:\App\Models\Student,email,website_id,'.env("WEBSITE_ID")
            ]
        );
        
        $this->otp = Str::random(6);
        
        $student = Student::where(
            [
                'email'=> $this->email,
                'website_id' => env("WEBSITE_ID")
            ]
        )->first(['id','email','website_id','first_name','last_name']);
        
        $data = [
            'code' => $this->otp,
            'student' => $student->first_name.' '.$student->last_name
        ];
        
        Mail::send('email.sop-student-verification-code', $data, function($message) {
                $message->to($this->email)
                ->subject('Email Verification Code');
            }
        );
        
        Session::flash('sending_email','Sending verfication code...');
        
        $this->formState = 'verify-email';
    }
    
    public function verifyEmail()
    {
        $this->validate(
            [
                'code' => 'required|size:6'
            ]
        );
        
        if($this->code == $this->otp) {
            Session::flash('code_verfied','Successfully verified...');
            $this->formState = 'reset-password';
        }else {
            Session::flash('invalid_code','Invalid verification code');
        }
    }
    
    public function resetPassword()
    {
        $this->validate(
            [
                'password' => 'required|min:6|max:12',
                'confirm_password' => 'required'
            ]
        );
        
        if($this->password == $this->confirm_password) {
            Student::where(
                [
                    'email'=> $this->email,
                    'website_id' => env("WEBSITE_ID")
                ]
            )->update(
                [
                    'password' => Hash::make($this->password)
                ]
            );
            Session::flash('password_changed','Password reset successfully...');
            $this->formState = 'login-now';
        }else {
            Session::flash('password_confirmation_failed','Password confirmation failed');
        }
    }
    
}