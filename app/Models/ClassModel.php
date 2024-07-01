<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/ClassModel.php
class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $fillable = ['title', 'mentor_id'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function watchDurations()
    {
        return $this->hasMany(WatchDuration::class, 'class_id', 'id'); // Sesuaikan dengan foreign key yang benar
    }
}

