<?php
use \Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder {

    public function run()
    {

        \DB::table('types')->insert(array(
            'description'   => 'admin'
        ));

        \DB::table('types')->insert(array(
            'description'   => 'user'
        ));


        \DB::table('types')->insert(array(
            'description'   => 'user_register'
        ));

        \DB::table('types')->insert(array(
            'description'   => 'guest'
        ));


    }

}