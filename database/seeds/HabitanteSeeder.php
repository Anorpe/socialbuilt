<?php
use \App\Habitante;
use Illuminate\Database\Seeder;

class HabitanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habitante::create([
            'idpropiedad'=>'10104',
            'telefono'=>2377657,
            'celular'=>3226567656,
            'contraseña'=>'1234',


        ]);
        Habitante::create([
            'idpropiedad'=>'20101',
            'telefono'=>5814567,
            'celular'=>3125567898,
            'contraseña'=>'1235',


        ]);
        Habitante::create([
            'idpropiedad'=>'10101',
            'telefono'=>4567896,
            'celular'=>3126678765,
            'contraseña'=>'contra1234',


        ]);
        Habitante::create([
            'idpropiedad'=>'10110',
            'telefono'=>3456756,
            'celular'=>3138877654,
            'contraseña'=>'1234',


        ]);
        Habitante::create([
            'idpropiedad'=>'10111',
            'telefono'=>49908767,
            'celular'=>3225647654,
            'contraseña'=>'mypass',


        ]);
    }
}
