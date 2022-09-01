<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sucursal;
use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sucursal = new Sucursal();
        $sucursal->name = 'Cuernavaca';
        $sucursal->save();

        $sucursal2 = new Sucursal();
        $sucursal2->name = 'Yautepec';
        $sucursal2->save();

        $sucursal3 = new Sucursal();
        $sucursal3->name = 'Cuautla';
        $sucursal3->save();

        $sucursal4 = new Sucursal();
        $sucursal4->name = 'Acapulco';
        $sucursal4->save();

    }
}
