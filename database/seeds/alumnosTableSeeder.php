<?php

use Illuminate\Database\Seeder;
use App\Alumnos;
use Baker\Factory;

class alumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// insertando datos con seeder
    	DB::table('alumnos')->insert([
    	 'nombre' => 'Henry',
    	 'apellido' => 'Sanchez',
    	 'fechanacimiento' => '10/11/1997',
    	 'direccion' => 'Algun Lugar',
    	 'genero' => 'Masculino',
    	 'telefono' => '2345-5434',
    	 'correo' => 'henry1234@gmail.com',
    	 'clave' => 'he34123'
    	 ]);


    	//insertando datos con insert
    	DB::insert('insert into alumnos (nombre, apellido, fechanacimiento, direccion, genero, telefono, correo, clave) values (?, ?, ?, ?, ?, ?, ?, ? )',
    	 ['David', 'Sanchez', '10/11/1997', 'Algun Lugar', 'Masculino', '2345-5434', 'henry1234@gmail.com','da34123']);


    	//Metodo select para consultar todos los registros
     	$results = DB::select('select * from alumnos');


    	//Utilizando Eloquet ORM
 		  \App\Alumnos::create ([
 		       	 'nombre' => 'Lesly',
 		    	 'apellido' => 'Cruz',
 		    	 'fechanacimiento' => '10/11/1997',
 		    	 'direccion' => 'Algun Lugar',
 		    	 'genero' => 'Masculino',
 		    	 'telefono' => '2345-5434',
 		    	 'correo' => 'lesly1234@gmail.com',
 		    	 'clave' => 'le34123' 
	 	 		   ]);


 		 //Utilizando model factory
        factory(Alumnos::class, 18)->create();
    }
}
