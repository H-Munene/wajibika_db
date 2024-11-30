<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StatedepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stateDepartments = [
            ['statedepartment_name' => 'Interior and Citizen Services', 'cumulative_contracts_amount' => '995275385', 'cumulative_amounts_paid' => '156968272'],
            ['statedepartment_name' => 'Water and Sanitation', 'cumulative_contracts_amount' => '2279500662', 'cumulative_amounts_paid' => '449495494'],
            ['statedepartment_name' => 'Foreign Affairs', 'cumulative_contracts_amount' => '418865923', 'cumulative_amounts_paid' => '415904556'],
            ['statedepartment_name' => 'Livestock', 'cumulative_contracts_amount' => '8863275', 'cumulative_amounts_paid' => 'undisclosed'],
            ['statedepartment_name' => 'Devolution', 'cumulative_contracts_amount' => '890829345', 'cumulative_amounts_paid' => '250000000'],
            ['statedepartment_name' => 'National Police Service', 'cumulative_contracts_amount' => '105365412', 'cumulative_amounts_paid' => '38855887'],
            ['statedepartment_name' => 'State Department for Sports Development', 'cumulative_contracts_amount' => '345766644', 'cumulative_amounts_paid' => 'undisclosed'],
            ['statedepartment_name' => 'Correctional Services', 'cumulative_contracts_amount' => '28812175', 'cumulative_amounts_paid' => '12846470'],
            ['statedepartment_name' => 'Housing and Urban Development', 'cumulative_contracts_amount' => '64000000', 'cumulative_amounts_paid' => '35000000'],
            ['statedepartment_name' => 'Labour and Skill Development', 'cumulative_contracts_amount' => '556763065', 'cumulative_amounts_paid' => '339314478'],
            ['statedepartment_name' => 'Technical, Vocational Education and Training', 'cumulative_contracts_amount' => '48743504', 'cumulative_amounts_paid' => '26700000'],
            ['statedepartment_name' => 'Teachers Service Commission', 'cumulative_contracts_amount' => '122563447', 'cumulative_amounts_paid' => 'undisclosed'],
            ['statedepartment_name' => 'Crop Development', 'cumulative_contracts_amount' => '178581150', 'cumulative_amounts_paid' => '24358930'],
            ['statedepartment_name' => 'Petroleum', 'cumulative_contracts_amount' => '76500000', 'cumulative_amounts_paid' => 'undisclosed'],
            ['statedepartment_name' => 'Public Works', 'cumulative_contracts_amount' => '987189903', 'cumulative_amounts_paid' => '579635580'],
            ['statedepartment_name' => 'The Judiciary', 'cumulative_contracts_amount' => '826329820', 'cumulative_amounts_paid' => 'undisclosed'],
            ['statedepartment_name' => 'Parliamentary Joint Services', 'cumulative_contracts_amount' => 'undisclosed', 'cumulative_amounts_paid' => '752448996'],
            ['statedepartment_name' => 'Energy', 'cumulative_contracts_amount' => '3055985900', 'cumulative_amounts_paid' => 'undisclosed'],
            ['statedepartment_name' => 'Medical Services', 'cumulative_contracts_amount' => '228000000', 'cumulative_amounts_paid' => '131647317'],
            ['statedepartment_name' => 'Independent Electoral and Boundaries Commission', 'cumulative_contracts_amount' => '293504959', 'cumulative_amounts_paid' => '229929888'],
            ['statedepartment_name' => 'Transport', 'cumulative_contracts_amount' => '153129261', 'cumulative_amounts_paid' => '137044745'],
        ];

        DB::table('statedepartments')->insert($stateDepartments);
    }
}
