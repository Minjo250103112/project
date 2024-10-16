<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'package_type_id' => 1,
                'name' => '6 Bulan Pro',
                'price' => 700000,
                'description' => '',
            ],
            [
                'package_type_id' => 1,
                'name' => '1 Tahun Pro',
                'price' => 1300000,
                'description' => '',
            ],
            [
                'package_type_id' => 1,
                'name' => '2 Tahun Pro',
                'price' => 2500000,
                'description' => '',
            ],
            [
                'package_type_id' => 1,
                'name' => '3 Tahun Pro',
                'price' => 3500000,
                'description' => '',
            ],

            // exclusive
            [
                'package_type_id' => 2,
                'name' => '6 Bulan Exlusive',
                'price' => 1200000,
                'description' => '',
            ],
            [
                'package_type_id' => 2,
                'name' => '1 Tahun Exlusive',
                'price' => 2000000,
                'description' => '',
            ],
            [
                'package_type_id' => 2,
                'name' => '2 Tahun Exlusive',
                'price' => 3800000,
                'description' => '',
            ],
            [
                'package_type_id' => 2,
                'name' => '3 Tahun Exlusive',
                'price' => 5500000,
                'description' => '',
            ],

            // custom
            [
                'package_type_id' => 3,
                'name' => '1 Tahun Custom',
                'price' => 3500000,
                'description' => '',
            ],
            [
                'package_type_id' => 3,
                'name' => '2 Tahun Custom',
                'price' => 6800000,
                'description' => '',
            ],
            [
                'package_type_id' => 3,
                'name' => '3 Tahun Custom',
                'price' => 9900000,
                'description' => '',
            ],
        ];

        DB::table('packages')->insert($data);
    }
}
