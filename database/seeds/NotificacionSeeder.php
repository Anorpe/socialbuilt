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
            'cuerpo'=>'Buenos Días, su apartamento tiene la administración vencida.',
            'remitenteisadmin'=>true,
            'email'=>10101,
        ]);

        Notificacion::create([
            'asunto'=>'Pago Administracion',
            'cuerpo'=>'Buenos Días, en la tarde hago el pago virtual.',
            'remitenteisadmin'=>false,
            'email'=>1,
        ]);

        Notificacion::create([
            'asunto'=>'Objeto Perdido',
            'cuerpo'=>'Buenos Días, puede pasar a la administracion por la cedula de Rodolfo Aicardi.',
            'remitenteisadmin'=>true,
            'email'=>10102,
        ]);


        Notificacion::create([
            'asunto'=>'Entrega de Pedido',
            'cuerpo'=>'Se le informa que en la administración se le tiene un pedido el cual no le pudieron entregar.',
            'remitenteisadmin'=>true,
            'email'=>10103,
        ]);
        //
    }
}
