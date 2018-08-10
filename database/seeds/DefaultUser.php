<?php

use Illuminate\Database\Seeder;

class DefaultUser extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('staffs')->insert([
            'identity'    => 1000,
            'name'  => 'Adminstrator',
            'password' => bcrypt('admin'),
            'dob' => date('Y-m-d'),
            'phone' => '00000',
            'gender' => 'Male',
        ]);
    }

}
