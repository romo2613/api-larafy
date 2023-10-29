<?php

namespace Database\Seeders;

use App\Helpers\CountriesHelper;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = CountriesHelper::getNames();

        foreach($countries as $country)
        {
            $countryORM = new Country;
            $countryORM->name = $country;
            $countryORM->save();
        }
    }
}
