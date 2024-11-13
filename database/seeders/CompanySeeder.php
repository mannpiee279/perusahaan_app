<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::create([
            "name" => "PT Pahrai Sejahtera LPK",
            "description" => "Perusahaan Tambang Minyak terbesar se-Lesanpuro.",
            "address" => "Lesanpuro GG.12 No.61",
            "phone" => 628810942,
            "email" => "fahridwi1999@gmail.com"
        ]);
        Company::create([
            "name" => "PT Samudra Gemilang 48",
            "description" => "Perusahaan ternak ayam terbesar se-Bonsari.",
            "address" => "Bonsari, kec.Tumpang, kab.Malang 65154",
            "phone" => 628810900,
            "email" => "samudraeffendi@gmail.com"
        ]);
        Company::create([
            "name" => "PT Axioo Smartclass",
            "description" => "Perusahaan Software Host terbesar se-Skanawa.",
            "address" => "JL.Sampurna No 12 RT/RW 19/07, 65154, Cemorokandang",
            "phone" => 628810399,
            "email" => "smkn9axioo@gmail.com"
        ]);
    }
}
