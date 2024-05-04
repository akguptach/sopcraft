<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use DataTables;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function sopOrderData()
    {
        if(\request()->ajax()){
            $data = Orders::where('website_id',env("WEBSITE_ID"))
            ->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('student_data', function($row) {
                    return '<b>'.$row->student->first_name.' '.$row->student->last_name.'</b> <br>
                    <small>'.$row->student->email.'</small> <br>
                    <small>'.$row->student->phone_number.'</small>';
                })
                ->addColumn('item_data', function($row) {
                    $style = ($row->referencingStyle == null) ? "" : $row->referencingStyle->style;
                    return '<b>'.$row->subject->subject_name.'</b> <br>
                    <small>'.$style.', '.$row->taskType->type_name.'</small> <br>
                    <small>'.$row->studyLevel->label_name.', '.$row->grade->grade_name.'</small>';
                })
                ->addColumn('word_count', function($row) {
                    return $row->no_of_words;
                })
                ->addColumn('price', function($row) {
                    return $row->price.' '.strtoupper($row->currency_code);
                })
                ->addColumn('payment_status', function($row) {
                    if ($row->payment_status == 'Success') {
                        return '<span class="badge bg-success">Success</span>';
                    }else {
                        return '<span class="badge bg-danger">Failed</span>';
                    }
                })
                ->addColumn('delivery_date', function($row){
                    return Carbon::parse($row->delivery_date)->format('jS F, Y');
                })
                ->rawColumns(['student_data','item_data','payment_status'])
                ->make(true);
        }
    }
}
