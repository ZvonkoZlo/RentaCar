<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gradovi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\ListItem;



class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'SuperAdmin',
            'email'=>'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin'=> 2

        ]);
        User::create([
            'name'=> 'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin'=> 1

        ]);
        User::create([
            'name'=> 'Korisnik',
            'email'=>'korisnik@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin'=> 0

        ]);

        Category::create([
            'name' => 'Bmw',
            'description' => 'M3',
           'image'=> 'public/categories/3ygMP2MxSbkFErMynBMOCR9oJuuatVYm9GZYjE8o.png',
            'price' => '640',

        ]);

        Category::create([
            'name' => 'Bmw',
            'description' => 'm4',
           'image'=> 'public/images/KfCW2NUKJSh7AcUczkOPX2rJVkL1LKwSOQFN8tmg.jpg',
            'price' => '840',

        ]);



        Gradovi::create([
            'name' => 'Ljubuški'
        ]);
        Gradovi::create([
            'name' => 'Mostar'
        ]);
        Gradovi::create([
            'name' => 'Grude'
        ]);
        Gradovi::create([
            'name' => 'Široki Brijeg'
        ]);
        Gradovi::create([
            'name' => 'Čitluk'
        ]);
        Gradovi::create([
            'name' => 'Čapljina'
        ]);






        ListItem::create([
            'name'=> 'zvonko',
            'is_complete'=> 0,
        ]);
    }
}
