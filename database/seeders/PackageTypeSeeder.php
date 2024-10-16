<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Profesional'
            ],
            [
                'name' => 'Exclusive'
            ],
            [
                'name' => 'Custom'
            ],
            [
                'name' => 'Yayasan'
            ],
            [
                'name' => 'Aplikasi'
            ],
        ];

        DB::table('package_types')->insert($data);
    }
}
