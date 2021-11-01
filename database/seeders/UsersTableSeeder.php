<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'created_at' => '2021-11-01 09:32:24',
                'current_team_id' => NULL,
                'email' => 'anditsung@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'is_admin' => 1,
                'name' => 'anditsung',
                'password' => '$2y$10$zsvkLCAXF0PPgNCNF46f2O6QS3ScsOO0Gy/67MxJ/yXCsmCVav8Xu', // password
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-11-01 09:32:24',
            ),
        ));


    }
}
