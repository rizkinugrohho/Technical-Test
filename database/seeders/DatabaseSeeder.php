<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Subscription;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('123456789'),
        ]);

        Subscription::create([
            'user_id' => $user->id,
            'amount' => 69000,
            'start_date' => now()->subDays(5),
            'end_date' => now()->addDays(25),
        ]);
    }
}
