<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['fileupload', 'title', 'task', 'delivery_date', 'website_id', 'subject_id', 'task_type_id', 'studylabel_id', 'grade_id', 'referencing_style_id', 'no_of_words', 'price', 'student_id', 'payment_status', 'task_status', 'writer_id', 'qc_id', 'rating', 'review', 'currency_code'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subjects::class, 'subject_id');
    }

    public function referencingStyle(): BelongsTo
    {
        return $this->belongsTo(Referencing::class, 'referencing_style_id');
    }

    public function taskType(): BelongsTo
    {
        return $this->belongsTo(Task_types::class, 'task_type_id');
    }

    public function studyLevel(): BelongsTo
    {
        return $this->belongsTo(Level_study::class, 'studylabel_id');
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grades::class, 'grade_id');
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function website()
    {
        return $this->belongsTo('App\Models\Website', 'website_id');
    }





    public function teacherAssigned()
    {
        return $this->hasOne('App\Models\OrderAssign', 'order_id');
    }

    public function qcAssigned()
    {
        return $this->hasOne('App\Models\QcAssign', 'order_id');
    }
}