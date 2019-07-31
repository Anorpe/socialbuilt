<?php

use App\Notificacion;
use Illuminate\Database\Seeder;

class NotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notificacion::create([
            'asunto'=>'Pago Administración',
            'cuerpo'=>'Buenos Días, su apartamento tiene la administración vencida',
            'remitenteisadmin'=>'TRUE',
            'idpropiedad'=>'10104',


        ]);
        //
    }
}
