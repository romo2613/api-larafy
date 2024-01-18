<?php

namespace App\Helpers;

use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * Helper para mostrar salidas por consola
 */
class ConsoleOutputHelper extends ConsoleOutput
{
    /**
     * muestra un mensaje en la consola en color verde
     * @param string $message Mensaje a mostrar
     * @param $options Máscara de bits de opciones (una de las constantes OUTPUT o VERBOSITY), 0 se considera lo mismo que self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     * @param $color Color del mensaje
     * @return void
     */
    public static function message(string|iterable $messages, int $options = self::OUTPUT_NORMAL): void
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();

        $out->writeln("\n  <bg=blue> INFO </> $messages \n");

        // $out->writeln("$messages\n", $options);
    }

}
