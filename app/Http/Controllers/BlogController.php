<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){
        $website_id = env('WEBSITE_ID');
        $data['blogs']   =   Blog::with('category')->where('website_id',$website_id)->latest('blog_date')->paginate(6);
        return view('blog',$data);
    }
    public function view(Blog $blog){
        
        return view('blog_view',array('blog'=>$blog));
    }
}
