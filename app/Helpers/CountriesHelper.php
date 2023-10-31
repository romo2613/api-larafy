<?php

namespace App\Helpers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class CountriesHelper
{
    /**
    * Obtener un listado con todos los paises desde una api
    * @param $language
    */
    public static function data()
    {
        try
        {
            $apiCountriesResponse = Http::get("https://restcountries.com/v3.1/all");
            return  $apiCountriesResponse->body();
        }
        catch(ConnectionException $e)
        {
            return file_get_contents('database/seeders/files/countries.json');
        }
    }

    public static function getNames()
    {
        $data = json_decode(self::data());
        $countryNames = new Collection();

        foreach($data as $country)
        {
            $countryNames->add($country->name->common);
        }

        return $countryNames->sort();
    }
}
