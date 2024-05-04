<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrdersDetails extends Model
{
    protected $table = 'orders_details';
    protected $fillable = ['order_id','ques_ans','attechment_file'];

    
}
