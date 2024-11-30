<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['region_name' => 'Mt Kenya'],
            ['region_name' => 'Coast Region'],
            ['region_name' => 'Eastern Region'],
            ['region_name' => 'Nairobi Region'],
            ['region_name' => 'North Eastern Region'],
            ['region_name' => 'Nyanza Region'],
            ['region_name' => 'Rift Valley Region'],
            ['region_name' => 'Western Region'],
            ['region_name' => 'Inter-County'],
        ];
        DB::table('regions')->insert($regions);
    }
}
