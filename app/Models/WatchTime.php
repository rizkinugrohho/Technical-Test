<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'watch_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }
}
