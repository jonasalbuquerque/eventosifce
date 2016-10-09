<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class EventoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('eventos')->insert([
            'titulo' => 'Beach Park',
            'data' => '2016/10/30',
            'local' => 'Parque Aquático Beach Park - Porto das dunas',
            'admin_id' => 1,
            'descricao' => 'Onibus saindo às 9h TOTALMENTE GRÁTIS',
            'vagas' => 50,
        ]);
        DB::table('eventos')->insert([
            'titulo' => 'Parque coco',
            'data' => '2016/10/30',
            'local' => 'Proximo ao iguatemi',
            'admin_id' => 1,
            'descricao' => 'OWEUIAHEWAUHEAUWIHEIUAWEHAIUWEHIUAWEHWAE',
            'vagas' => 15,
        ]);
        DB::table('eventos')->insert([
            'titulo' => 'Beira mar',
            'data' => '2017/01/01',
            'local' => 'Aterro da praia de Iracema',
            'admin_id' => 1,
            'descricao' => 'REVELLYON CUMPADE! BORA DOIDO!',
            'vagas' => 50,
        ]);
        DB::table('eventos')->insert([
            'titulo' => 'To sem ideia',
            'data' => '2016/10/30',
            'local' => 'Totalmente sem ideia',
            'admin_id' => 2,
            'descricao' => 'Não faço ideia, mas vai ter ônibus',
            'vagas' => 20,
        ]);
        DB::table('eventos')->insert([
            'titulo' => 'Andar de bike',
            'data' => '2016/10/30',
            'local' => 'Avenida perimetral',
            'admin_id' => 2,
            'descricao' => 'Saída 23h00 da casa da Débora',
            'vagas' => 90,
        ]);
    }

}