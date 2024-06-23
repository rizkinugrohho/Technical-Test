<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'title',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function watchTimes()
    {
        return $this->hasMany(WatchTime::class);
    }
}
