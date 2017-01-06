<?php
use \Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {

        $faker = Faker::create();

        \DB::table('users')->insert(array(
            'full_name'     => 'Hector Luis Claro',
            'email'         => 'hlclarog@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 15,
            'type_id'       => 1,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Famy',
            'email'         => 'famy@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 1,
            'type_id'       => 3,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Anderson',
            'email'         => 'Anderson@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 2,
            'type_id'       => 2,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Mayte Mercado',
            'email'         => 'mercado@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 3,
            'type_id'       => 2,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Laura Hurtado',
            'email'         => 'hurtado@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 4,
            'type_id'       => 2,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Milagros',
            'email'         => 'milagros@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 5,
            'type_id'       => 2,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Carolay Niebles',
            'email'         => 'niebles@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 6,
            'type_id'       => 2,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Tatiana Aguirre',
            'email'         => 'Aguirre@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 9,
            'type_id'       => 2,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Daniel Ibarra',
            'email'         => 'ibarra@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 7,
            'type_id'       => 2,

        ));

        \DB::table('users')->insert(array(
            'full_name'     => 'Nelvis Navarro',
            'email'         => 'navarro@ticket.me',
            'password'      => \Hash::make('secret'),
            'module'        => 14,
            'type_id'       => 2,

        ));

        /*
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
        *
		 */
    }

}