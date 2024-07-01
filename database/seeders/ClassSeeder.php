<?php

// database/seeders/ClassSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassModel;

class ClassSeeder extends Seeder
{
    public function run()
    {
        ClassModel::create(['title' => 'Class A', 'mentor_id' => 1]);
        ClassModel::create(['title' => 'Class B', 'mentor_id' => 1]);
        ClassModel::create(['title' => 'Class C', 'mentor_id' => 1]);
        ClassModel::create(['title' => 'Class D', 'mentor_id' => 2]);
    }
}

