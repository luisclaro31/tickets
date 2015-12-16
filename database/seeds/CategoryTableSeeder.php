<?php
use \Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    public function run()
    {

        \DB::table('categories')->insert(array(
            'description'   => 'Recibo De Credito',
            'acronym'       => 'RC',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Credito Directo',
            'acronym'       => 'CR',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Inscripcion',
            'acronym'       => 'IC',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Consulta Dir Admisiones',
            'acronym'       => 'DR',
        ));

    }

}