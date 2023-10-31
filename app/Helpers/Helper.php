<?php

namespace App\Helpers;

/**
 * Esta clase contiene helpers genéricos
 */
class Helper
{
    /**
     * Genera una contraseña aleatoria con la longitud dada. Por defecto longitud 8
     * @param $length longitud de la contraseña
     */
    static function randomCode(int $length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $password;
    }
}
