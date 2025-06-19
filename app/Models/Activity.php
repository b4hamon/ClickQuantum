<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['activity_description', 'activity_date_limit', 'id_course'];
    public function course() {
        return $this->belongsTo(Course::class, 'id_course');
}
}