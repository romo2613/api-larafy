<?php

namespace App\Helpers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Helper para obtener un listado con el mayor número de paises posibles.
 */
class CountriesHelper
{
    /**
    * Retorna un listado con todos los paises desde una api. Si no puede conectar con la api devuelve el json local.
    * @return string
    */
    public static function data(): string
    {
        try
        {
            ConsoleOutputHelper::message('Obteniendo datos actualizados desde api.');

            $apiCountriesResponse = Http::get("https://restcountries.com/v3.1/all");

            return  $apiCountriesResponse->body();
        }
        catch(ConnectionException $e)
        {
            ConsoleOutputHelper::message('<comment>No se obtuvo respuesta de la api. Obteniendo datos locales.</comment>');

            return file_get_contents('database/seeders/files/countries.json');
        }

    }

    /**
     * Retorna una clase Collection ordenada alfabéticamente con todos los nombres de los paises.
     * @return Collection
     */
    public static function getNames(): Collection
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
