<?php

use App\Noticia;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Noticia::create([
            'titulo'=>'Corte de Suministro de Agua',
            'descripcion'=>'Por razones de mantenimiento, el suministro de agua sera corta el domingo'

        ]);
        Noticia::create([
            'titulo'=>'Rifa Millonaria',
            'descripcion'=>'Para recaudar fondo para pintar las porteriasa se hara una rifa'

        ]);
        Noticia::create([
            'titulo'=>'Feliz Año',
            'descripcion'=>'La administracion de la urbamización les desea feliz año y disfruten en paz.'

        ]);
    }
}
