<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pages;

class PageController extends Controller
{
    public function index($page_sku=''){
        $data['pages']   =   Pages::where('page_sku',$page_sku)->first()->toArray();
        return view('pages',$data);
        
    }
    public function terms_condtion()
    {
        return view('terms');
    }
     public function privacy(){
        return view('privacy');
    }
}
