<?php
use \Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {

        $faker = Faker::create();



        for($i = 0; $i < 10; $i ++)
        {
            $full_name = $faker->firstName.' '.$faker->lastName;
            $email = $faker->unique()->userName;

            \DB::table('users')->insert(array(
                'full_name'    => $full_name,
                'email'         => $email.'@hlclarog.me',
                'password'      => \Hash::make('secret'),
                'module'        => $faker->randomElement([1,2,3,4,5,6,7,8,8,9,10]),
                'type_id'       => $faker->randomElement([2,3]),

            ));
        }
    }

}