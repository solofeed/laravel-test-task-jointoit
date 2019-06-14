<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => Hash::make('password'),
            'remember_token' => Str::random(10),

        ]);
    }
}
