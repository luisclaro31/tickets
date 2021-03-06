<?php
use \Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    public function run()
    {

        \DB::table('categories')->insert(array(
            'description'   => 'Credito',
            'acronym'       => 'CR',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Icetex',
            'acronym'       => 'IC',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Volante De Matricula ',
            'acronym'       => 'VM',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Recibo De Cuota',
            'acronym'       => 'RC',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Otro Volante',
            'acronym'       => 'OV',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Inscripcion, Reintegro O Tranferencia',
            'acronym'       => 'IRT',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Entrega De Documentos - Certificados - ',
            'acronym'       => 'ED',
        ));

        \DB::table('categories')->insert(array(
            'description'   => 'Dir Admisiones',
            'acronym'       => 'DR',
        ));


    }

}