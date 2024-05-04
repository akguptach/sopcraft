<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Orders;

class Dashboard extends Component
{
    public $totalOrders = 0;
    public $completedOrders = 0;
    public $failedOrders = 0;
    public $paidOrders = 0;
    public $orders;
    
    public function render()
    {
        return view('livewire.admin.dashboard')
        ->layout('admin.layouts.app')
        ->title('SOP Admin Dashboard'); 
    }

    public function mount()
    {
        $this->orders = Orders::where('website_id',env("WEBSITE_ID"))
        ->latest()->limit(5)->get();
        $this->totalOrders = Orders::where('website_id',env("WEBSITE_ID"))
        ->count();
        $this->completedOrders = Orders::where('website_id',env("WEBSITE_ID"))
        ->where('payment_status','Success')->count();
        $this->failedOrders = Orders::where('website_id',env("WEBSITE_ID"))
        ->where('payment_status','Failed')->count();
        $this->paidOrders = ($this->totalOrders == 0) ? 0 : (($this->totalOrders -$this->completedOrders) / $this->totalOrders);
    }
}
