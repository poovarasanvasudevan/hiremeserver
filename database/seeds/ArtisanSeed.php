<?php

use Illuminate\Database\Seeder;

class ArtisanSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $artisan = [
            "A.C Repairer",
            "Artists",
            "Barber",
            "Basket Weaver",
            "Borehole Expert",
            "Bricklayer",
            "Cameraman/Videographer",
            "Car hire Service",
            "Car wash",
            "Carpenter",
            "Caterer/Chef",
            "Cleaning Services",
            "Dish Installer",
            "DJ/Sound Experts",
            "Dry Cleaner",
            "Electricians",
            "Fumigators",
            "Gardeners",
            "Gas Refills",
            "Generator Repairers",
            "Hair Dresser",
            "Makeup Artist",
            "Mechanics",
            "Painters",
            "Panel Beaters",
            "Phone Repairers",
            "Printer",
            "Plumber",
            "Rental Service",
            "Spare part Dealers",
            "Shoemaker (Cobbler)",
            "Tailor",
            "Technician",
            "Vulcanizer",
            "Watch Repairer",
            "Welder",
            "Battery Charger",
            "Bicycle Repairer",
            "CCTV Installer",
            "Fitness Instructor",
            "Key Cutters",
            "Sign Writer",
            "Towing Truck"
        ];

        $professional = [
            "Accountants",
            "Financial analyst",
            "Auditors",
            "Financial and Investment Advisers",
            "Optometrist",
            "Dentist",
            "Lawyer",
            "Dermatologist",
            "Radiologist",
            "Pharmacists",
            "Physiotherapists",
            "Nutritionists",
            "Veterinarians",
            "Systems administrators",
            "Database designers",
            "Applications programmers",
            "Software developers",
            "Digital marketers",
            "Systems analysts",
            "Web and multimedia developers",
            "Authors",
            "Journalists",
            "Engineers",
            "Mathematicians",
            "Actuaries",
            "Statisticians",
            "Architects",
        ];


        foreach ($artisan as $item) {
            $work = new \App\Work();
            $work->name = $item;
            $work->category = "Artisan";
            $work->image = "/img/artisan.png";
            $work->amount = 180;
            $work->save();
        }

        foreach ($professional as $item) {
            $work = new \App\Work();
            $work->name = $item;
            $work->category = "Profesional";
            $work->image = "/img/professional.png";
            $work->amount = 1000;
            $work->save();
        }
    }
}
