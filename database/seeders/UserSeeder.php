<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Dotenv\Util\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Mikel', 'Unai', 'Imanol', 'Jon', 'Ekaitz'];
        $surNames = ['Martin', 'Iriarte', 'Luque', 'Labayen', 'Soto'];
       
        for ($i = 0; $i < 5; $i++) {
            $email=$names[$i]."@gmail.com";
            DB::table('users')->insert([
                'name' => $names[$i],
                'surname'=>$surNames[$i],
                'phone'=>random_int(610000000, 699999999),
                'email'=>$email,
                'role'=>3,
                'password'=> Hash::make("user1234"),

            ]);
        }

        DB::table('users')->insert([
            'name' => "Admin",
            'surname' => "Agenda web",
            'phone' => 615926688,
            'email'=>"admin@gmail.com",
            'password'=> Hash::make("admin1234"),
            'role'=>1,
        ]);
        DB::table('users')->insert([
            'name' => "Artist",
            'artisticName' => "Artist name",
            'surname' => "Artist",
            'phone' => 615926689,
            'email'=>"artist@gmail.com",
            'password'=> Hash::make("artist1234"),
            'role'=>2,
        ]);

        }
    }

