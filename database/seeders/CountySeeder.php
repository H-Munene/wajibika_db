<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counties = [
            ['county_name' => 'Mombasa', 'region_id' => 2],
            ['county_name' => 'Kwale', 'region_id' => 2],
            ['county_name' => 'Kilifi', 'region_id' => 2],
            ['county_name' => 'Tana River', 'region_id' => 2],
            ['county_name' => 'Lamu', 'region_id' => 2],
            ['county_name' => 'Taita-Taveta', 'region_id' => 2],
            ['county_name' => 'Garissa', 'region_id' => 5],
            ['county_name' => 'Wajir', 'region_id' => 5],
            ['county_name' => 'Mandera', 'region_id' => 5],
            ['county_name' => 'Marsabit', 'region_id' => 3],
            ['county_name' => 'Isiolo', 'region_id' => 3],
            ['county_name' => 'Meru', 'region_id' => 1],
            ['county_name' => 'Tharaka-Nithi', 'region_id' => 1],
            ['county_name' => 'Embu', 'region_id' => 1],
            ['county_name' => 'Kitui', 'region_id' => 3],
            ['county_name' => 'Machakos', 'region_id' => 3],
            ['county_name' => 'Makueni', 'region_id' => 3],
            ['county_name' => 'Nyandarua', 'region_id' => 1],
            ['county_name' => 'Nyeri', 'region_id' => 1],
            ['county_name' => 'Kirinyaga', 'region_id' => 1],
            ['county_name' => "Murang'a", 'region_id' => 1],
            ['county_name' => 'Kiambu', 'region_id' => 1],
            ['county_name' => 'Turkana', 'region_id' => 7],
            ['county_name' => 'West Pokot', 'region_id' => 7],
            ['county_name' => 'Samburu', 'region_id' => 7],
            ['county_name' => 'Trans-Nzoia', 'region_id' => 7],
            ['county_name' => 'Uasin Gishu', 'region_id' => 7],
            ['county_name' => 'Elgeyo-Marakwet', 'region_id' => 7],
            ['county_name' => 'Nandi', 'region_id' => 7],
            ['county_name' => 'Baringo', 'region_id' => 7],
            ['county_name' => 'Laikipia', 'region_id' => 7],
            ['county_name' => 'Nakuru', 'region_id' => 7],
            ['county_name' => 'Narok', 'region_id' => 7],
            ['county_name' => 'Kajiado', 'region_id' => 7],
            ['county_name' => 'Kericho', 'region_id' => 7],
            ['county_name' => 'Bomet', 'region_id' => 7],
            ['county_name' => 'Kakamega', 'region_id' => 8],
            ['county_name' => 'Vihiga', 'region_id' => 8],
            ['county_name' => 'Bungoma', 'region_id' => 8],
            ['county_name' => 'Busia', 'region_id' => 8],
            ['county_name' => 'Siaya', 'region_id' => 6],
            ['county_name' => 'Kisumu', 'region_id' => 6],
            ['county_name' => 'Homa Bay', 'region_id' => 6],
            ['county_name' => 'Migori', 'region_id' => 6],
            ['county_name' => 'Kisii', 'region_id' => 6],
            ['county_name' => 'Nyamira', 'region_id' => 6],
            ['county_name' => 'Nairobi City', 'region_id' => 4],
            ['county_name' => 'Inter-County', 'region_id' => 9],
        ];

        DB::table('counties')->insert($counties);
    }
}
