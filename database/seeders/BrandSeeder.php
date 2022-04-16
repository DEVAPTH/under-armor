<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Adidas','ERKE','Jako','Nike','Puma','Under Armour'];
        for ($i=0; $i <count($brands); $i++) {
            DB::table('brands')->insert([
                'name'=>$brands[$i]
            ]);
        }
    }
}
