<?php
use \Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CallTableSeeder extends Seeder {

    public function run()
    {

        $faker = Faker::create();

        for($i = 0; $i < 50; $i ++)
        {

            \DB::table('calls')->insert(array(

                'user_id'    => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
                'student_id'    => $faker->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),

            ));
        }
    }

}