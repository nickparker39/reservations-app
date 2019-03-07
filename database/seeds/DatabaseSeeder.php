<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'YOUR NAME',
            'cell_phone' => '+15551234567',
            'email' => 'your@email.com',
            'password' => bcrypt('password')
        ]);

        $user->reservations()->create([
            'starts' => now()->addHours(23),
            'ends' => now()->addHours(24),
            'amount' => 10000 // amount in cents (in this case $100.00)
        ]);
    }
}
