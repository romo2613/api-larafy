<?php

declare(strict_types=1);

namespace Src\UserContext\User\Domain\ValueObjects;

final class UserSurname
{
    /**
     * UserSurname constructor.
     * @param string $surname
     */

     public function __construct
     (
        private string $surname
     ){}

     /**
      * Getter surname
      * @return string
      */
     public function value(): string
     {
        return $this->surname;
     }
}
