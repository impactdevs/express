<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
            [
                "name" => "Agriculture",
                "description" => "The cultivation of plants and rearing of animals for food, fiber, and other products."
            ],
            [
                "name" => "Manufacturing",
                "description" => "The production of goods from raw materials using machinery."
            ],
            [
                "name" => "Technology",
                "description" => "The development, design, production, and implementation of computer hardware and software."
            ],
            [
                "name" => "Healthcare",
                "description" => "The provision of medical services to individuals and communities."
            ],
            [
                "name" => "Finance",
                "description" => "The management of money and other financial assets."
            ],
            [
                "name" => "Retail",
                "description" => "The sale of goods and services to consumers."
            ],
            [
                "name" => "Education",
                "description" => "The instruction and training of individuals."
            ],
            [
                "name" => "Hospitality",
                "description" => "The provision of lodging, food, and other services to guests."
            ],
            [
                "name" => "Construction",
                "description" => "The building and maintenance of structures."
            ],
            [
                "name" => "Transportation",
                "description" => "The movement of people, goods, and animals from one place to another."
            ],
            [
                "name" => "Entertainment",
                "description" => "The creation and presentation of entertainment."
            ],
            [
                "name" => "Media",
                "description" => "The creation and distribution of information and content."
            ],
            [
                "name" => "Government",
                "description" => "The administration of public affairs."
            ],
            [
                "name" => "Legal",
                "description" => "The provision of legal services."
            ],
            [
                "name" => "Consulting",
                "description" => "Providing expert advice and guidance."
            ],
            [
                "name" => "Energy",
                "description" => "The production, transmission, and distribution of energy."
            ],
            [
                "name" => "Mining",
                "description" => "The extraction of minerals, ores, and precious metals."
            ],
            [
                "name" => "Tourism",
                "description" => "The business of providing services to tourists."
            ],
            [
                "name" => "Biotechnology",
                "description" => "The use of living organisms to create products and services."
            ],
            [
                "name" => "Pharmaceutical",
                "description" => "The development and production of medicines."
            ],
            [
                "name" => "Automotive",
                "description" => "The design, manufacturing, and sale of automobiles."
            ],
            [
                "name" => "Aerospace",
                "description" => "The design, manufacturing, and operation of aircraft and spacecraft."
            ],
            [
                "name" => "Telecommunications",
                "description" => "The transmission of information over a distance."
            ],
            [
                "name" => "Insurance",
                "description" => "The provision of financial protection against loss or damage."
            ],
            [
                "name" => "Real estate",
                "description" => "The business of buying, selling, and renting property."
            ],
            [
                "name" => "Fashion",
                "description" => "The design, manufacture, and sale of clothing and accessories."
            ],
            [
                "name" => "Food and beverage",
                "description" => "The production, processing, and distribution of food and beverages."
            ],
            [
                "name" => "Sports",
                "description" => "The business of organizing and promoting sporting events."
            ]
        ];


        $now = Carbon::now();
        foreach ($industries as $i => $iValue) {
            $industries[$i]['created_at'] = $now;
            $industries[$i]['updated_at'] = $now;
        }

        Industry::insert($industries);

    }
}
