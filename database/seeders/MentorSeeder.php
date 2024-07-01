<?php

// database/seeders/MentorSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mentor;

class MentorSeeder extends Seeder
{
    public function run()
    {
        Mentor::create(['name' => 'Mentor A']);
        Mentor::create(['name' => 'Mentor B']);
    }
}

