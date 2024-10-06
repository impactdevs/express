<?php

namespace Database\Seeders;

use App\Models\SubIndustry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubIndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industriesToSubMapping = [
            "Technology" => [
                [ "name" => "Computer Science", "description" => "Software development, hardware engineering, artificial intelligence, data science, cybersecurity" ],
                [ "name" => "Software", "description" => "Application development, web development, mobile development, game development, software testing" ],
                [ "name" => "Hardware", "description" => "Computer hardware engineering, semiconductor design, electronics manufacturing" ],
                [ "name" => "Information Technology (IT)", "description" => "Network administration, system administration, database management, IT support" ],
            ],
            "Aerospace" => [
                [ "name" => "Aircraft Manufacturing", "description" => "Commercial aircraft, military aircraft, drones" ],
                [ "name" => "Aerospace Engineering", "description" => "Aerodynamics, propulsion, avionics, materials science" ],
                [ "name" => "Space Exploration", "description" => "Spacecraft design, space missions, satellite technology" ],
            ],
            "Agriculture" => [
                [ "name" => "Crop Production", "description" => "Farming, horticulture, agriculture technology" ],
                [ "name" => "Livestock", "description" => "Animal husbandry, dairy farming, meat production" ],
                [ "name" => "Agribusiness", "description" => "Food processing, agricultural equipment, agricultural finance" ],
            ],
            "Automotive" => [
                [ "name" => "Vehicle Manufacturing", "description" => "Cars, trucks, motorcycles, electric vehicles" ],
                [ "name" => "Automotive Engineering", "description" => "Automotive design, engine design, vehicle safety, automotive electronics" ],
                [ "name" => "Automotive Parts and Components", "description" => "Tires, batteries, brakes, electronics" ],
            ],
            "Biotechnology" => [
                [ "name" => "Biomedical Engineering", "description" => "Medical devices, prosthetics, biomaterials" ],
                [ "name" => "Pharmaceuticals", "description" => "Drug discovery, drug development, pharmaceutical manufacturing" ],
                [ "name" => "Biotechnology Research", "description" => "Genetics, genomics, biotechnology applications" ],
            ],
            "Construction" => [
                [ "name" => "Civil Engineering", "description" => "Infrastructure projects, roads, bridges, buildings" ],
                [ "name" => "Architecture", "description" => "Building design, interior design, urban planning" ],
                [ "name" => "Construction Management", "description" => "Project management, cost estimation, scheduling" ],
            ],
            "Consulting" => [
                [ "name" => "Management Consulting", "description" => "Business strategy, operations management, financial consulting" ],
                [ "name" => "Technology Consulting", "description" => "IT consulting, cybersecurity consulting, data analytics consulting" ],
                [ "name" => "Specialized Consulting", "description" => "Legal consulting, HR consulting, marketing consulting" ],
            ],
            "Education" => [
                [ "name" => "Primary Education", "description" => "Elementary schools, primary education curriculum" ],
                [ "name" => "Secondary Education", "description" => "High schools, secondary education curriculum" ],
                [ "name" => "Higher Education", "description" => "Universities, colleges, vocational training" ],
            ],
            "Energy" => [
                [ "name" => "Renewable Energy", "description" => "Solar energy, wind energy, hydroelectricity, bioenergy" ],
                [ "name" => "Fossil Fuels", "description" => "Oil and gas exploration, extraction, refining" ],
                [ "name" => "Energy Efficiency", "description" => "Energy conservation, energy management" ],
            ],
            "Entertainment" => [
                [ "name" => "Media and Entertainment", "description" => "Film, television, music, publishing" ],
                [ "name" => "Gaming", "description" => "Video games, mobile games, esports" ],
                [ "name" => "Live Entertainment", "description" => "Theater, concerts, festivals" ],
            ],
            "Fashion" => [
                [ "name" => "Apparel Design", "description" => "Clothing design, fashion trends" ],
                [ "name" => "Textiles", "description" => "Fabric manufacturing, textile design" ],
                [ "name" => "Fashion Retail", "description" => "Fashion stores, online fashion retailers" ],
            ],
            "Finance" => [
                [ "name" => "Banking", "description" => "Retail banking, commercial banking, investment banking" ],
                [ "name" => "Insurance", "description" => "Life insurance, property insurance, health insurance" ],
                [ "name" => "Financial Services", "description" => "Asset management, wealth management, financial planning" ],
            ],
            "Food and Beverage" => [
                [ "name" => "Food Production", "description" => "Food processing, food manufacturing, food packaging" ],
                [ "name" => "Food Service", "description" => "Restaurants, cafes, catering" ],
                [ "name" => "Beverages", "description" => "Alcohol production, soft drinks, bottled water" ],
            ],
            "Government" => [
                [ "name" => "Public Administration", "description" => "Government agencies, public policy" ],
                [ "name" => "Law Enforcement", "description" => "Police, fire departments, emergency services" ],
                [ "name" => "Military", "description" => "Armed forces, defense industry" ],
            ],
            "Healthcare" => [
                [ "name" => "Medicine", "description" => "Medical doctors, nurses, pharmacists" ],
                [ "name" => "Healthcare Administration", "description" => "Hospital management, health insurance" ],
                [ "name" => "Allied Health", "description" => "Physical therapy, occupational therapy, speech therapy" ],
            ],
            "Hospitality" => [
                [ "name" => "Hotels and Resorts", "description" => "Hotel management, hospitality services" ],
                [ "name" => "Tourism", "description" => "Travel agencies, tour operators, tourism marketing" ],
                [ "name" => "Event Planning", "description" => "Meeting planning, conference planning" ],
            ],
            "Insurance" => [
                [ "name" => "Property and Casualty Insurance", "description" => "Home insurance, auto insurance, commercial insurance" ],
                [ "name" => "Life Insurance", "description" => "Life insurance, health insurance" ],
                [ "name" => "Reinsurance", "description" => "Insurance for insurance companies" ],
            ],
            "Legal" => [
                [ "name" => "Law Practice", "description" => "Attorneys, lawyers, legal assistants" ],
                [ "name" => "Legal Services", "description" => "Legal research, legal consulting" ],
            ],
            "Manufacturing" => [
                [ "name" => "Industrial Manufacturing", "description" => "Manufacturing of various products (e.g., automobiles, electronics, chemicals)" ],
                [ "name" => "Manufacturing Engineering", "description" => "Production processes, quality control, supply chain management" ],
            ],
            "Media" => [
                [ "name" => "Print Media", "description" => "Newspapers, magazines" ],
                [ "name" => "Broadcast Media", "description" => "Television, radio" ],
                [ "name" => "Digital Media", "description" => "Websites, blogs, social media" ],
            ],
            "Mining" => [
                [ "name" => "Mineral Extraction", "description" => "Mining of minerals, metals, and precious stones" ],
                [ "name" => "Mining Engineering", "description" => "Mining operations, safety regulations" ],
            ],
            "Pharmaceutical" => [
                [ "name" => "Drug Discovery", "description" => "Research and development of new drugs" ],
                [ "name" => "Pharmaceutical Manufacturing", "description" => "Production of pharmaceuticals" ],
                [ "name" => "Clinical Research", "description" => "Clinical trials, drug testing" ],
            ],
            "Real Estate" => [
                [ "name" => "Real Estate Development", "description" => "Construction of new properties, property management" ],
                [ "name" => "Real Estate Sales", "description" => "Real estate agents, brokers" ],
                [ "name" => "Real Estate Investment", "description" => "Property investment, real estate funds" ],
            ],
            "Retail" => [
                [ "name" => "Retail Stores", "description" => "Brick-and-mortar stores, online retailers" ],
                [ "name" => "Retail Management", "description" => "Store operations, customer service" ],
                [ "name" => "E-commerce", "description" => "Online retail, digital marketing" ],
            ],
            "Sports" => [
                [ "name" => "Professional Sports", "description" => "Athletes, coaches, sports management" ],
                [ "name" => "Sports Media", "description" => "Sports journalism, sports broadcasting" ],
                [ "name" => "Sports Facilities", "description" => "Stadiums, arenas, sports equipment" ],
            ],
            "Telecommunications" => [
                [ "name" => "Telecommunications Networks", "description" => "Network infrastructure, telecommunications services" ],
                [ "name" => "Telecommunications Equipment", "description" => "Network equipment, telecommunications hardware" ],
                [ "name" => "Telecommunications Services", "description" => "Internet service providers, mobile phone services" ],
            ],
            "Tourism" => [
                [ "name" => "Travel Agencies", "description" => "Tour operators, travel planning" ],
                [ "name" => "Hospitality", "description" => "Hotels, restaurants, attractions" ],
                [ "name" => "Tourism Marketing", "description" => "Promoting destinations, tourism campaigns" ],
            ]
        ];
        $subIndustries = array();
        $now = Carbon::now();
        foreach ($industriesToSubMapping as $industry => $subs) {
            $ind = Industry::where('name', $industry)->first();
            if($ind){
                foreach ($subs as $sub) {
                    $subIndustries[] = array_merge($sub, ['industry' => $ind->id, 'created_at' => $now, 'updated_at' => $now]);
                }
            }
        }

        SubIndustry::insert($subIndustries);

    }
}
