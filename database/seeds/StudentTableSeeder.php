<?php
use \Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentTableSeeder extends Seeder {

    public function run()
    {

        $faker = Faker::create();

        for($i = 0; $i < 200; $i ++)
        {
            $full_name = $faker->firstName.' '.$faker->lastName;

            $state = $faker->randomElement([0,1,2]);

            $id = \DB::table('students')->insertGetId(array(
                'full_name'        => $full_name,
                'identification'    => $faker->unique()->ean8,
                'state'       => $state,
                'category_id'   => $faker->biasedNumberBetween($min = 1, $max = 8, $function = 'sqrt'),
                'user_id'    => $faker->biasedNumberBetween($min = 1, $max = 8, $function = 'sqrt')
            ));

            if ($state <> '0')
            {
                \DB::table('calls')->insert(array(

                    'user_id'    => $faker->randomElement([1,2,3,4,5,6,7,8]),
                    'student_id'    => $id

                ));
            }

        }
    }

}