<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['curse_duration', 'curse_name', 'curse_description'];

    public function activities() {
        return $this->hasMany(Activity::class, 'id_course');
    }

    public function registrations() {
        return $this->hasMany(Registration::class, 'id_course');
    }
}
