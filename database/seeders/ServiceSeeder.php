<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            "company_id" => 1,
            "service_name" => "Online Hosting",
            "service_description" => "Hosting online dengan domain gratis."
        ]);
        Service::create([
            "company_id" => 2,
            "service_name" => "Data Tracking",
            "service_description" => "Melacak data dengan mudah."
        ]);
        Service::create([
            "company_id" => 3,
            "service_name" => "API Key Generator",
            "service_description" => "Membuat API Key secara instan."
        ]);
    }
}
