<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitizenAuditProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cap_projects = [
            // Eastern Region - Machakos
            ['project_name' => 'Mavoko Stadium', 'amount_allocated' => '49 Million', 'amount_paid' => '13 Million', 'project_status' => 'Stalled', 'county_id' => 16],
            ['project_name' => 'Masii stadium - Mwala Constituency', 'amount_allocated' => '49 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 16],
            ['project_name' => 'Kincar-Airways-Zebra and Muungano Road', 'amount_allocated' => '84 Million', 'amount_paid' => '84 Million', 'project_status' => 'Completed - substandard work done', 'county_id' => 16],
            ['project_name' => 'Kinyui Stadium - Matungulu Constituency', 'amount_allocated' => '49 Million', 'amount_paid' => '13 Million', 'project_status' => 'Stalled', 'county_id' => 16],
            ['project_name' => 'Devki-kinanie Road', 'amount_allocated' => '1.78 Billion', 'amount_paid' => '238 Million', 'project_status' => 'Not Done', 'county_id' => 16],

            // Eastern Region - Makueni
            ['project_name' => 'Thwake Dam', 'amount_allocated' => '36.9 Billion', 'amount_paid' => '32 Billion (with 236 Million paid as interest for pending bills)', 'project_status' => 'Stalled', 'county_id' => 17],
            ['project_name' => 'Wote Stadium', 'amount_allocated' => '299.3 Million', 'amount_paid' => '162 Million', 'project_status' => 'Stalled', 'county_id' => 17],
            ['project_name' => 'Wote Housing Project (203 Units)', 'amount_allocated' => '2.3 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 17],
            ['project_name' => 'Katuaa - Kee - Nunguni Road', 'amount_allocated' => '362 Million', 'amount_paid' => '255 Million', 'project_status' => 'Not Done', 'county_id' => 17],
            ['project_name' => 'Kilungu KMTC', 'amount_allocated' => '25 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 17],

            // Mt. Kenya Region - Kiambu
            ['project_name' => 'Ruiru-Githunguri-Uplands Road', 'amount_allocated' => '4.1 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Incomplete - Uplands section undone, unmarked, no proper drainage', 'county_id' => 22],
            ['project_name' => 'Bus Rapid Transit System(BRT)', 'amount_allocated' => '5.5 Billion', 'amount_paid' => '3 Billion', 'project_status' => 'Stalled', 'county_id' => 22],

            // Coast Region - Taita-Taveta
            ['project_name' => 'Moi County Referral Hospital - Voi', 'amount_allocated' => '', 'amount_paid' => '', 'project_status' => 'Unequipped(no MRI, X-ray machine, Screening services)', 'county_id' => 6],
            ['project_name' => 'Bachuma Livestock Processing Zone', 'amount_allocated' => '380 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Non-Operational', 'county_id' => 6],
            ['project_name' => 'MtoMwagodi-Dawida-Mbale-Wundanyi Road -54KM', 'amount_allocated' => '2.2 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Incomplete - 4KM tarmacked, poor condition', 'county_id' => 6],
            ['project_name' => 'Dawson Mwanyumba Stadium- Wundanyi', 'amount_allocated' => '35 - 100 Million (Disputed figures)', 'amount_paid' => 'undisclosed', 'project_status' => 'Complete - Substandard Works', 'county_id' => 6],
            ['project_name' => 'Voi Housing Programme', 'amount_allocated' => '747 Million', 'amount_paid' => '220 Million', 'project_status' => 'Stalled', 'county_id' => 6],
            ['project_name' => 'Moi Stadium -Voi', 'amount_allocated' => 'Duplicated Contracts of 94 Million and 74 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 6],
            ['project_name' => "Nakuruto Chief's Office Block -Taveta Constituency", 'amount_allocated' => '', 'amount_paid' => '', 'project_status' => 'non-operational since 09/05/2022 when commissioned', 'county_id' => 6],
            ['project_name' => 'Banana Processing Plant -Taveta Constituency', 'amount_allocated' => '116 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 6],

            // Coast Region - Kwale
            ['project_name' => "Kwale County Governor's Residence", 'amount_allocated' => '149 Million', 'amount_paid' => '118 Million', 'project_status' => 'Stalled', 'county_id' => 2],
            ['project_name' => 'Kombani Market', 'amount_allocated' => 'Varied between 105 - 118 Million', 'amount_paid' => '104 Million', 'project_status' => 'Non-Operational', 'county_id' => 2],
            ['project_name' => 'Shimba Hills Fruit Processing Plant', 'amount_allocated' => '600 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 2],
            ['project_name' => 'Kwale Cashew Nut Factory', 'amount_allocated' => 'undisclosed', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 2],

            // Nyanza Region - Kisii
            ['project_name' => 'Ibeno KMTC', 'amount_allocated' => '2 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 45],
            ['project_name' => 'Kisii soapstone Value Addition Centre', 'amount_allocated' => '300 Million', 'amount_paid' => '13 Million just for feasibility studies', 'project_status' => 'Not Done', 'county_id' => 45],
            ['project_name' => 'Nyamonyo KMTC - Bomachoge', 'amount_allocated' => 'undisclosed', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 45],

            // Nyanza Region - Nyamira
            ['project_name' => 'Bosiango village dam - Kitutu Masaba Constituency', 'amount_allocated' => 'Varies between 6.6 - 10.8 Billion', 'amount_paid' => '86 Million just for feasibility studies', 'project_status' => 'Not Done', 'county_id' => 46],

            // Nyanza Region - Kisumu
            ['project_name' => 'Kabondo Kanyagwal Fisheries and Aquaculture Project', 'amount_allocated' => '2.5 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 42],

            // Nyanza Region - Homa Bay
            ['project_name' => 'Kadel-Alara-Pala-Kanyadhiang-kilusi-Opanga-Ramba Roads', 'amount_allocated' => '2 Billion', 'amount_paid' => '677 Million as of 2021', 'project_status' => 'Poor Condition', 'county_id' => 43],

            // Nyanza Region - Migori
            ['project_name' => 'Mbita-Sindo-Kiabuya Sori Road', 'amount_allocated' => '3 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 44],

            // Nyanza Region - Siaya
            ['project_name' => 'Ugunja-Ukwala', 'amount_allocated' => '1.8 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Incomplete', 'county_id' => 41],
            ['project_name' => 'Anyieko-Ujwanga-Kathieno Irrigation Project', 'amount_allocated' => '478 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Incomplete', 'county_id' => 41],
            ['project_name' => 'Got Nanga-Bar Ober 12KM', 'amount_allocated' => '1 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 41],

            // Rift Valley Region - Kericho
            ['project_name' => 'Kerenga Airstrip', 'amount_allocated' => '60 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 35],
            ['project_name' => 'Kericho Green Stadium', 'amount_allocated' => '', 'amount_paid' => '400 Million', 'project_status' => 'Complete - Poor renovation work done', 'county_id' => 35],

            // Rift Valley Region - Bomet
            ['project_name' => 'Sondu-Kapsoit Road', 'amount_allocated' => '580 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Substandard work done', 'county_id' => 36],
            ['project_name' => 'Bomet Stadium', 'amount_allocated' => '332 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 36],
            ['project_name' => 'Bomet Governor\'s Residence', 'amount_allocated' => '78 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 36],
            ['project_name' => 'Daraja Sita-Chebole-Chebunyo Road', 'amount_allocated' => '2 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Substandard Work Done', 'county_id' => 36],
            ['project_name' => 'Bomet University College(Library, Tuition block, multipurpose hall, hostels)', 'amount_allocated' => '1.4 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 36],

            // Rift Valley Region - Narok
            ['project_name' => 'New Narok Referral Hospital', 'amount_allocated' => 'Duplicate Contracts of 588 Million and 469 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 33],
            ['project_name' => 'Kenya Utalii College- ildolisho Campus', 'amount_allocated' => 'undisclosed', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 33],
            ['project_name' => 'Ewaso Ngiro International Airport', 'amount_allocated' => 'undisclosed', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 33],

            // Rift Valley Region - Elgeyo-Marakwet
            ['project_name' => 'Kamariny Stadium', 'amount_allocated' => '287 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 28],

            // Rift Valley Region - Uasin Gishu
            ['project_name' => 'Kipkaren Water Treatment and Piping Project', 'amount_allocated' => '287 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 27],

            // Eastern Region - Isiolo
            ['project_name' => 'Isiolo County Government Headquarters', 'amount_allocated' => 'Varies Between 545 - 870 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 11],
            ['project_name' => 'Isiolo Mortuary', 'amount_allocated' => '10.5 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Non-Operational', 'county_id' => 11],
            ['project_name' => 'Isiolo Airport-Cargo Section', 'amount_allocated' => 'undisclosed', 'amount_paid' => '23 Million', 'project_status' => 'Complete - Substandard Workship, Non-Operational', 'county_id' => 11],
            ['project_name' => 'Isiolo Stadium', 'amount_allocated' => '300 Million', 'amount_paid' => 'Ranges around 210 Million', 'project_status' => 'Stalled', 'county_id' => 11],

            // Mt. Kenya Region - Meru
            ['project_name' => 'Kieni-Kiandege-Mworoga Road', 'amount_allocated' => '700 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 12],

            // Nairobi Region - Laikipia
            ['project_name' => 'Naibor-Ilpolei Road - 15KM', 'amount_allocated' => '596 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 31],

            // Mt. Kenya Region - Kirinyaga
            ['project_name' => 'Mururi-Kihumbuini Road', 'amount_allocated' => '2.1 Billion (For the LOT)', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 20],
            ['project_name' => 'Kangiciri-Karira Mission Hospital-Ngurubani Road', 'amount_allocated' => '3 Billion (For the LOT)', 'amount_paid' => 'undisclosed', 'project_status' => 'Incomplete - Substandard Workmanship', 'county_id' => 20],

            // Mt. Kenya Region - Nyandarua
            ['project_name' => 'Captain-Ndemi/Wanjohi-kwa matu-geta-kahuruko-Ndunyu Njeru Road', 'amount_allocated' => '3.2 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 18],

            // Mt. Kenya Region - Murang'a
            ['project_name' => 'Ikumbi-Karinga-Kigundu Road', 'amount_allocated' => 'undisclosed', 'amount_paid' => '2.2 Million spent on launch of the road', 'project_status' => 'Not Done', 'county_id' => 21],

            // Nairobi Region - Kajiado
            ['project_name' => 'Rombo Tomato Processing Factory', 'amount_allocated' => '430 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 34],
            ['project_name' => 'Illasit-Rombo-Njukini-Taita Tavera Road', 'amount_allocated' => '5.3 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 34],
            ['project_name' => 'Fencing of the Email Livestock Multiplication Project- Kenyewa-Poka Ward', 'amount_allocated' => '29.5 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 34],
            ['project_name' => 'Olkejuado University College of Applied Technology', 'amount_allocated' => '600 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 34],
            ['project_name' => 'Ngong Sports Complex', 'amount_allocated' => '198 Million', 'amount_paid' => '50 Million', 'project_status' => 'Stalled', 'county_id' => 34],

            // Mt. Kenya Region - Embu
            ['project_name' => "Embu County Governor's Residence", 'amount_allocated' => '49 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 14],
            ['project_name' => 'Illasit-Rombo-Njukini-Taita Tavera Road', 'amount_allocated' => '5.3 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 14],
            ['project_name' => 'Fencing of the Email Livestock Multiplication Project - Kenyewa-Poka Ward', 'amount_allocated' => '29.5 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 14],
            ['project_name' => 'Olkejuado University College of Applied Technology', 'amount_allocated' => '600 Million', 'amount_paid' => 'undisclosed', 'project_status' => 'Stalled', 'county_id' => 14],
            ['project_name' => 'Ngong Sports Complex', 'amount_allocated' => '198 Million', 'amount_paid' => '50 Million', 'project_status' => 'Stalled', 'county_id' => 14],

            // Mt. Kenya Region - Nyeri
            ['project_name' => 'Ruringu Stadium', 'amount_allocated' => '288 Million', 'amount_paid' => '260 Million', 'project_status' => 'Stalled', 'county_id' => 19],
            ['project_name' => 'Dedan Kimathi University Comprehensive Cancer Center', 'amount_allocated' => 'undisclosed', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 19],

            // Mt. Kenya Region - Tharaka Nithi
            ['project_name' => 'Chogoria-Weru-Mutindwa-Marima-Kiriani Road - 23KM', 'amount_allocated' => '1 Billion', 'amount_paid' => 'undisclosed', 'project_status' => 'Substandard Workmanship', 'county_id' => 13],
            ['project_name' => 'Dedan Kimathi University Comprehensive Cancer Center', 'amount_allocated' => 'undisclosed', 'amount_paid' => 'undisclosed', 'project_status' => 'Not Done', 'county_id' => 13],
        ];

        DB::table('citizen_audit_projects')->insert($cap_projects);
    }
}
