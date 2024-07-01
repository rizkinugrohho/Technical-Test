<?php

// database/seeders/WatchDurationSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WatchDuration;

class WatchDurationSeeder extends Seeder
{
    public function run()
    {
        WatchDuration::create(['user_id' => 1, 'class_id' => 1, 'duration' => 20]);
        WatchDuration::create(['user_id' => 1, 'class_id' => 2, 'duration' => 50]);
        WatchDuration::create(['user_id' => 1, 'class_id' => 3, 'duration' => 30]);
        WatchDuration::create(['user_id' => 1, 'class_id' => 4, 'duration' => 50]);
    }
}

