<?php

declare(strict_types=1);

namespace Src\UserContext\User\Domain\ValueObjects;

final class UserPassword
{
    /**
     * UserPassword constructor.
     * @param string $name
     */

     public function __construct
     (
        private string $password
     ){}

     /**
      * Getter password
      * @return string
      */
     public function value(): string
     {
        return $this->password;
     }
}
