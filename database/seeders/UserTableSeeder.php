<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert([
            [
                "nom"=>"Super",
                "prenom"=>"Admin",
                "email"=>"root@gmail.com",
                "role"=>"admin",
                "avatar"=>"avatar.png",
                "password"=>Hash::make("tulip2022"),
                "flagtransmis"=>now(),
            ],
        ]);
    }
}
