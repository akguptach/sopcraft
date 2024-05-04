<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\ServiceSeo;



class ServicesController extends Controller
{

    public function __construct()
    {
    }

    public function servicesIndex($slug)
    {
        $seo = ServiceSeo::where('seo_url_slug', $slug)->first();
        return view('services/index', ['seo' => $seo, 'title' => ($seo && $seo->service) ? $seo->service->service_name : '']);
    }
}
