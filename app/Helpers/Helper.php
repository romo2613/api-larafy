<?php

namespace App\Helpers;

/**
 * Esta clase contiene helpers genéricos
 */
class Helper
{
    /**
     * Genera un código aleatorio con la longitud dada. Por defecto la longitud es 8
     * @param int $length longitud de la contraseña
     * @return string
     */
    static function randomCode(int $length = 8): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $password;
    }
}
