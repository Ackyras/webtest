<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $donation = [
            [
                'name'      =>  'Ackyra Sibarani',
                'email'     =>  'ackyrasibarani@gmail.com',
                'password'  =>  bcrypt(1),
                // 'phone' => '08112648406',
            ],
            [
                'name'      =>  'Admin',
                'email'     =>  'a@a',
                'password'  =>  bcrypt(1),
                // 'phone' => '08112648406',
            ],
            [
                'name'      =>  'user',
                'email'     =>  'u@u',
                'password'  =>  bcrypt(1),
                // 'phone' => '08112648406',
            ],
        ];
        foreach ($donation as $key => $value) {
            User::create($value);
        }
    }
}
