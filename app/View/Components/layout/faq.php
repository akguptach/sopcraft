<?php

namespace App\View\Components\layout;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Faq as Faq_Model;

class faq extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $website_id = env('WEBSITE_ID');
        $faq = Faq_Model::where('website_id',$website_id)->orderBy('id','desc')->get()->toArray();
        return view('components.layout.faq',array('faq_datas'=>$faq));
    }
}
