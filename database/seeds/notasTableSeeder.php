<?php

use Illuminate\Database\Seeder;

class notasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertando con seeder
         DB::table('notas')->insert([
    	 'nota1' => '10',
    	 'nota2' => '10',
    	 'nota3' => '10',
    	 'nota4' => '10',
    	 'promedio' => '10',
    	 'parcial' => '10',
    	 'idprofesor' => '1',
    	 'idalumno' => '1',
    	 'idcursos' => '1'
    	 ]);


    	//insertando datos con in insert
    	DB::insert('insert into notas (nota1, nota2, nota3, nota4 , promedio, parcial, idprofesor, idalumno, idcursos) values (?, ?, ?, ?, ?, ?, ?, ?, ? )',
    	 ['9', '9', '9', '9', '9', '9', 1, 1, 2]);

    }
}
