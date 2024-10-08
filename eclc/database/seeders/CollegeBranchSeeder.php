<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeBranchSeeder extends Seeder
{
    public function run()
    {
        DB::table('college_branch_t')->insert([
            ['college_id' => 'STM', 'college_branch' => 'PUP Sta. Mesa', 'college_address' => 'Sta. Mesa, Manila'],
            ['college_id' => 'TAG', 'college_branch' => 'PUP Taguig', 'college_address' => 'Gen. Santos Ave., Lower Bicutan, Taguig City'],
            ['college_id' => 'QCY', 'college_branch' => 'PUP Quezon City', 'college_address' => 'Don Fabian St., Commonwealth, Quezon City'],
            ['college_id' => 'SJC', 'college_branch' => 'PUP San Juan City', 'college_address' => 'Addition Hills, San Juan City'],
            ['college_id' => 'PQC', 'college_branch' => 'PUP Parañaque City', 'college_address' => 'Parañaque City'],
            ['college_id' => 'BAT', 'college_branch' => 'PUP Bataan', 'college_address' => 'Freeport Area, Mariveles, Bataan'],
            ['college_id' => 'BUL', 'college_branch' => 'PUP Sta. Maria', 'college_address' => 'Sitio Gulod, Brgy. Pulong-Buhangin, Bulacan'],
            ['college_id' => 'CAB', 'college_branch' => 'PUP Cabiao', 'college_address' => 'San Roque, Cabiao, Nueva Ecija'],
            ['college_id' => 'LOP', 'college_branch' => 'PUP Lopez', 'college_address' => 'Yumul St., Brgy. Burgos, Lopez, Quezon'],
            ['college_id' => 'MUL', 'college_branch' => 'PUP Mulanay', 'college_address' => 'Quezon Province'],
            ['college_id' => 'GEN', 'college_branch' => 'PUP General Luna', 'college_address' => 'Quezon'],
            ['college_id' => 'UNA', 'college_branch' => 'PUP Unisan', 'college_address' => 'Kalilaya Ibaba, Unisan, Quezon'],
            ['college_id' => 'RAG', 'college_branch' => 'PUP Ragay', 'college_address' => 'Camarines Sur'],
            ['college_id' => 'STT', 'college_branch' => 'PUP Sto. Tomas', 'college_address' => 'A. Bonifacio St. Poblacion II, Sto. Tomas, Batangas'],
            ['college_id' => 'MAR', 'college_branch' => 'PUP Maragondon', 'college_address' => 'Maragondon, Cavite'],
            ['college_id' => 'ALF', 'college_branch' => 'PUP Alfonso', 'college_address' => 'Cavite'],
            ['college_id' => 'BAN', 'college_branch' => 'PUP Bansud', 'college_address' => 'Poblacion, Bansud, Oriental Mindoro'],
            ['college_id' => 'SAB', 'college_branch' => 'PUP Sablayan', 'college_address' => 'Sitio Macambang, Brgy. Buenavista, Occidental Mindoro'],
            ['college_id' => 'BIN', 'college_branch' => 'PUP Biñan', 'college_address' => 'Laguna'],
            ['college_id' => 'SAN', 'college_branch' => 'PUP San Pedro', 'college_address' => 'Laguna'],
            ['college_id' => 'SRO', 'college_branch' => 'PUP Sta. Rosa', 'college_address' => 'Laguna'],
            ['college_id' => 'CAL', 'college_branch' => 'PUP Calauan', 'college_address' => 'Laguna'],
        ]);
    }
}
