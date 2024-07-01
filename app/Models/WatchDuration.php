<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/WatchDuration.php
class WatchDuration extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'class_id', 'duration'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id', 'id'); // Sesuaikan dengan foreign key yang benar
    }
}

