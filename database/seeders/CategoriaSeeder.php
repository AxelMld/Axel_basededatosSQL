<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->name = 'Electronica';
        $categoria->save();

        $categoria2 = new Categoria();
        $categoria2->name = 'Linea Blanca';
        $categoria2->save();

        $categoria3 = new Categoria();
        $categoria3->name = 'Deportes';
        $categoria3->save();

        $categoria4 = new Categoria();
        $categoria4->name = 'Alimentos';
        $categoria4->save();

        $categoria5 = new Categoria();
        $categoria5->name = 'Jardin';
        $categoria5->save();


    }
}
