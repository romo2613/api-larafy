<?php

declare(strict_types=1);

namespace Src\UserContext\User\Domain\ValueObjects;

final class UserName
{
    /**
     * UserName constructor.
     * @param string $name
     */

     public function __construct
     (
        private string $name
     ){}

     /**
      * Getter name
      * @return string
      */
     public function value(): string
     {
        return $this->name;
     }
}
