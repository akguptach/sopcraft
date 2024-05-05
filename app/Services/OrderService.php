<?php

namespace App\Services;

use App\Models\StudentOrderMessage;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Student;

/**
 * Class OrderService.
 */
class OrderService
{

    public function orderDetails($orderId, $userId)
    {
        $result = [];
        $result['order_id'] = $orderId;
        $result['data'] = Orders::with(['website', 'taskType', 'studyLevel', 'student', 'subject', 'teacherAssigned.teacher', 'teacherAssigned.student', 'qcAssigned.qc'])
            ->where('id', $orderId)
            ->where('student_id', $userId)
            ->first();
        $result['studentMessages'] = StudentOrderMessage::with(['sendertable', 'receivertable'])->where('order_id', $orderId)->get();
        return $result;
    }

    public function saveOrderMessage($request, $id)
    {


        try {
            $attachment = '';
            if ($request->has("attachment")) {

                $attachment = request()->file('attachment');
                $attachmentName = time() . '.' . $attachment->getClientOriginalExtension();
                $attachment->move(public_path('images/uploads/attachment/'), $attachmentName);
                $attachment = env('APP_URL', '/') . '/images/uploads/attachment/' . $attachmentName;
            }
            StudentOrderMessage::Create([
                'order_id' => $id,
                'sendertable_id' => Auth::user()->id,
                'sendertable_type' => Student::class,
                'receivertable_id' => 1,
                'receivertable_type' => User::class,
                'message' => $request->message,
                'attachment' => $attachment
            ]);
            return ['message' => 'Message sent', 'status' => 'success'];
        } catch (\Exception $e) {
            return ['message' => $e->getMessage(), 'status' => 'error'];
        }
    }
}