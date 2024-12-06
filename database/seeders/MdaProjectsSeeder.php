<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdaProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            // Interior and Citizen Services
            ['mda_project_name' => 'Construction of DCC office block', 'county_id' => 12, 'status_id' => 1, 'statedepartment_id' => 1], // Meru
            ['mda_project_name' => 'Construction of Tigania East Sub-County office block', 'county_id' => 12, 'status_id' => 1, 'statedepartment_id' => 1], // Meru
            ['mda_project_name' => 'Construction of Magunga District Headquarters Suba South Sub-County', 'county_id' => 43, 'status_id' => 1, 'statedepartment_id' => 1], // Homa Bay
            ['mda_project_name' => 'Delayed completion of Mwea West Sub-County Headquarters', 'county_id' => 20, 'status_id' => 1, 'statedepartment_id' => 1], // Kirinyaga
            ['mda_project_name' => 'Construction of 100 PAX hostel block at Kenya School of Adventure and Leadership', 'county_id' => 12, 'status_id' => 1, 'statedepartment_id' => 1], // Meru

            // Water and Sanitation
            ['mda_project_name' => 'Borehole project at Njiiri School', 'county_id' => 21, 'status_id' => 1, 'statedepartment_id' => 2],
            ['mda_project_name' => 'Works and services at Upper Kerio Valley and Upper Ewaso Nyiro North River water sheds', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 2], // Inter-County
            ['mda_project_name' => 'Borehole drilling at Muthuini Primary School in Kieni Constituency', 'county_id' => 19, 'status_id' => 1, 'statedepartment_id' => 2], // Nyeri
            ['mda_project_name' => 'Kanyenyaini Irrigation Project', 'county_id' => 21, 'status_id' => 1, 'statedepartment_id' => 2],
            ['mda_project_name' => 'Sagana River Restoration Project', 'county_id' => 19, 'status_id' => 1, 'statedepartment_id' => 2], // Nyeri
            ['mda_project_name' => 'Delayed completion of Maragua Bulk Water Supply and Irrigation Project', 'county_id' => 19, 'status_id' => 1, 'statedepartment_id' => 2], // Nyeri

            // Foreign Affairs
            ['mda_project_name' => 'Stalled project of chancery building and High Commissioners residence in Pakistan', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 3], // Pakistan (not within a Kenyan county)

            // Livestock
            ['mda_project_name' => 'Boundary wall, entrance gate, driveway, landscape and toilet block at AHITI Nyahururu', 'county_id' => 31, 'status_id' => 1, 'statedepartment_id' => 4], // Laikipia

            // Devolution
            ['mda_project_name' => 'Africities Convention Centre Project', 'county_id' => 42, 'status_id' => 1, 'statedepartment_id' => 5], // Kisumu

            // National Police Service
            ['mda_project_name' => 'Stalled construction works at Laisamis Police Station', 'county_id' => 10, 'status_id' => 1, 'statedepartment_id' => 6], // Marsabit
            ['mda_project_name' => 'Stalled projects at Embakasi A Campus', 'county_id' => 47, 'status_id' => 1, 'statedepartment_id' => 6], // Nairobi

            // State Department for Sports Development
            ['mda_project_name' => 'Stalled Phase 2 construction at Kirigiti Stadium', 'county_id' => 22, 'status_id' => 1, 'statedepartment_id' => 7], // Kiambu

            // Correctional Services
            ['mda_project_name' => 'Stalled projects at Nyandarua Prisons', 'county_id' => 18, 'status_id' => 1, 'statedepartment_id' => 8], // Nyandarua
            ['mda_project_name' => 'Stalled projects at Machakos Prisons', 'county_id' => 16, 'status_id' => 1, 'statedepartment_id' => 8], // Machakos

            // Housing and Urban Development
            ['mda_project_name' => 'Stalled projects under Economic Stimulus Project (ESP) - fresh produce markets project', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 9], // Various locations

            // Labour and Skill Development
            ['mda_project_name' => 'Construction of National Employment Promotion Centre and Research Institute Office Complex', 'county_id' => 22, 'status_id' => 1, 'statedepartment_id' => 10], // Kiambu

            // Technical, Vocational Education and Training
            ['mda_project_name' => 'Construction of collapsed building at Chepareria Technical Training Institute', 'county_id' => 24, 'status_id' => 1, 'statedepartment_id' => 11], // West Pokot

            // Teachers Service Commission
            ['mda_project_name' => 'Delayed completion of Machakos County offices at 33% completion levels', 'county_id' => 16, 'status_id' => 1, 'statedepartment_id' => 12], // Machakos
            ['mda_project_name' => 'Delayed completion of Kilifi County offices at 40% completion levels', 'county_id' => 3, 'status_id' => 1, 'statedepartment_id' => 12], // Kilifi

            // Crop Development
            ['mda_project_name' => 'Construction of Laare Modern Miraa Market Shed', 'county_id' => 12, 'status_id' => 1, 'statedepartment_id' => 13], // Meru
            ['mda_project_name' => 'Mwendi-Urithi Lailuba grain drying and storage facility', 'county_id' => 12, 'status_id' => 1, 'statedepartment_id' => 13], // Meru
            ['mda_project_name' => 'Mbeu Muungano CBO drying and storage facility', 'county_id' => 12, 'status_id' => 1, 'statedepartment_id' => 13], // Meru

            // Petroleum
            ['mda_project_name' => 'Delayed implementation of Mwananchi Gas Project', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 14], // Inter-County

            // Public Works
            ['mda_project_name' => 'Delayed completion of six projects including footbridges and County Headquarters', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 15], // Various locations

            // The Judiciary
            ['mda_project_name' => 'Fifteen projects at various court stations for over eight years with 50% to 97% work done', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 16], // Inter-County

            // Parliamentary Joint Services
            ['mda_project_name' => 'Multi-storey office block, started on 1 July 2014 and completion time extended to 30 November 2021', 'county_id' => 47, 'status_id' => 1, 'statedepartment_id' => 17], // Nairobi

            // Energy
            ['mda_project_name' => 'Implementation of the Green Climate Fund Project Phase I and II', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 18], // Inter-County

            // Medical Services
            ['mda_project_name' => 'Construction of Kisii Cancer Centre', 'county_id' => 45, 'status_id' => 1, 'statedepartment_id' => 19], // Kisii
            ['mda_project_name' => 'Construction of Paediatric Emergency Centre and Burns Management Centre at Kenyatta National Hospital', 'county_id' => 47, 'status_id' => 1, 'statedepartment_id' => 19], // Nairobi

            // Independent Electoral and Boundaries Commission
            ['mda_project_name' => 'Construction and renovation of six warehouses in six Counties despite lapse of the contract periods', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 20], // Inter-County

            // Transport
            ['mda_project_name' => 'Delayed completion of Transport Data Centre contract awarded in 2014', 'county_id' => 48, 'status_id' => 1, 'statedepartment_id' => 21], // Inter-County
        ];

        DB::table('mda_projects')->insert($projects);
    }
}
