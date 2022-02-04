<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'clave' => '01',
            'nombre' => 'Aguascalientes',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '02',
            'nombre' => 'Baja California',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '03',
            'nombre' => 'Baja California Sur',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '04',
            'nombre' => 'Campeche',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '05',
            'nombre' => 'Coahuila',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '06',
            'nombre' => 'Colima',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '07',
            'nombre' => 'Chiapas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '08',
            'nombre' => 'Chihuahua',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '09',
            'nombre' => 'Ciudad de México',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '10',
            'nombre' => 'Durango',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '11',
            'nombre' => 'Guanajuato',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '12',
            'nombre' => 'Guerrero',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '13',
            'nombre' => 'Hidalgo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '14',
            'nombre' => 'Jalisco',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '15',
            'nombre' => 'México',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '16',
            'nombre' => 'Michoacán de Ocampo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '17',
            'nombre' => 'Morelos',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '18',
            'nombre' => 'Nayarit',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '19',
            'nombre' => 'Nuevo León',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '20',
            'nombre' => 'Oaxaca',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '21',
            'nombre' => 'Puebla',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '22',
            'nombre' => 'Querétaro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '23',
            'nombre' => 'Quintana Roo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '24',
            'nombre' => 'San Luis Potosí',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '25',
            'nombre' => 'Sinaloa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '26',
            'nombre' => 'Sonora',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '27',
            'nombre' => 'Tabasco',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '28',
            'nombre' => 'Tamaulipas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '29',
            'nombre' => 'Tlaxcala',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '30',
            'nombre' => 'Veracruz',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '31',
            'nombre' => 'Yucatán',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('estados')->insert([
            'clave' => '32',
            'nombre' => 'Zacatecas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
