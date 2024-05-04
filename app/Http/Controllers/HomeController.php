<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Level_study;
use App\Models\Task_types;
class HomeController extends Controller
{
   public function index(){
    $data['task_types'] =   Task_types::where('website_type','SOP')->orderBy('id','desc')->get()->toArray();
	$data['levels']     =   Level_study::where('website_type','SOP')->orderBy('id','desc')->get()->toArray();

    return view('home',$data);
   }
   
   public function dateformat(){
		echo date('jS F, Y',strtotime($_GET['date']));
		die;
   }
   
   public function why_us(){
    return view('why_us');
   }
   public function contact_us(){
    return view('contact_us');
   }
   public function refer_friend(){
    return view('refer_friend');
   }
   public function faq(){
      $data = array();
      return view('faq',$data);
  }
   public function services()
  {
       return view('services');
  }
  public function dissertation_writing_service()
  {
      return view('dissertation_service');
  }
  public function research_writing_service()
  {
       return view('Research_writing_service');
  }
  public function term_writing_service()
  {
       return view('term_writing_service');
  }
  public function admission_writing_service()
  {
       return view('Admission_writing_service');
  }
}
