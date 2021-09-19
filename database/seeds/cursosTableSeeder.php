<?php

use Illuminate\Database\Seeder;

class cursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertando datos con seeder
    	DB::table('cursos')->insert([
    	 'nombrecurso' => 'Progra III',
    	 'anio' => '2021',
    	 'ciclo' => '02/21',
    	 'idprofesor' => '1'
    	 ]);


    	//insertando datos con in insert
    	DB::insert('insert into cursos (nombrecurso, anio, ciclo, idprofesor) values (?, ?, ?, ? )', ['Redes II', '2021', '02/21', 2]);


    }
}
