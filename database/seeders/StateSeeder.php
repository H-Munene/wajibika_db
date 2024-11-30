<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
          ['status_name' => 'Stalled'],
          ['status_name' => 'Completed'],
          ['status_name' => 'Incompleted'],
          ['status_name' => 'Non-Operational'],
        ];
        DB::table('status')->insert($status);
    }
}
