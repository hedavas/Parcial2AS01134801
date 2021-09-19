<?php

use Illuminate\Database\Seeder;
use App\Profesor;
use Baker\Factory;

class profesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesor')->insert([

    	 'nombre' => 'Henry',
    	 'apellido' => 'Sanchez',
    	 'dui' => '02311348-2',
    	 'telefono' => '2345-5434',
    	 'email' => 'henry1234@gmail.com',
    	 'clave' => 'he34123'
    	 ]);


 		//Utilizando model factory
        factory(Profesor::class, 18)->create();

    }
}
