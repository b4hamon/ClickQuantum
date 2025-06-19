<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;



    protected $fillable = ['id_user', 'id_course', 'registration_date'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function curse() {
        return $this->belongsTo(Curse::class, 'id_course');
    }
}
