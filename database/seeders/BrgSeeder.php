<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Brg;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'kd_brg' => '1',
                'nm_brg' => 'Laptop',
                'harga' => '20000',
                'stok' => '1000',
            ],
            [
                'kd_brg' => '2',
                'nm_brg' => 'Smartphone',
                'harga' => '10000',
                'stok' => '2000',
            ],
            [
                'kd_brg' => '3',
                'nm_brg' => 'Mouse',
                'harga' => '25000',
                'stok' => '5000',
            ],
            [
                'kd_brg' => '4',
                'nm_brg' => 'Headphone',
                'harga' => '3000',
                'stok' => '300',
            ],
            [
                'kd_brg' => '5',
                'nm_brg' => 'Keyboard',
                'harga' => '90000',
                'stok' => '100',
            ],

        ];
        foreach ($data as $value){
            Brg::insert([
                'kd_brg' => $value['kd_brg'],
                'nm_brg' => $value['nm_brg'],
                'harga' => $value['harga'],
                'stok' => $value['stok'],
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ]);
        }
    }
}
