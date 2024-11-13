<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            "company_id" => 1,
            "name" => "Fachri Dwi A",
            "position" => "128281728 -992",
            "email" => "fahridwi12@gmail.com"
        ]);
        Employee::create([
            "company_id" => 2,
            "name" => "Darmansyah",
            "position" => "128281728 -0092",
            "email" => "mannpiee@gmail.com"
        ]);
        Employee::create([
            "company_id" => 3,
            "name" => "Samudra Putra E",
            "position" => "128-100000",
            "email" => "samudraputra@gmail.com"
        ]);
    }
}
