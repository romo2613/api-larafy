<?php

namespace Database\Seeders;

use App\Helpers\CountriesHelper;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CountrySeeder extends Seeder
{
    /**
     * Crea los paises obtenidos a traves del helper CountriesHelper.
     * @return void
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
