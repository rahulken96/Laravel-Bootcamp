<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => bcrypt('admin'),
            'image' => '',
            'occupation' => 'admin',
            'is_admin' => true
        ]);
    }
}
