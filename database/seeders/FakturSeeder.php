<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Faktur;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FakturSeeder extends Seeder
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
                'nomor_faktur' => '1',
                'tanggal_faktur' => 'Laptop',
                'total' => '20000',
                'keterangan' => 'Lunas',
            ],
            [
                'nomor_faktur' => '2',
                'tanggal_faktur' => 'Smartphone',
                'total' => '10000',
                'keterangan' => 'Lunas',
            ],
            [
                'nomor_faktur' => '3',
                'tanggal_faktur' => 'Mouse',
                'total' => '25000',
                'keterangan' => 'Belum Lunas',
            ],
            [
                'nomor_faktur' => '4',
                'tanggal_faktur' => 'Headphone',
                'total' => '3000',
                'keterangan' => 'Lunas',
            ],
            [
                'nomor_faktur' => '5',
                'tanggal_faktur' => 'Keyboard',
                'total' => '90000',
                'keterangan' => 'Belum Lunas',
            ],

        ];
        foreach ($data as $value){
            Faktur::insert([

                'tanggal_faktur' => Carbon::now(),
                'total' => $value['total'],
                'keterangan' => $value['keterangan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
