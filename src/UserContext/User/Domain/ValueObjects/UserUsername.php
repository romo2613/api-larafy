<?php

declare(strict_types=1);

namespace Src\UserContext\User\Domain\ValueObjects;

final class UserUsername
{
    /**
     * UserUsername constructor.
     * @param string $username
     */
    public function __construct
    (
        private string $username,
    ){}

    /**
     * getter username
     * @return string
     */
    public function value(): string
    {
        return $this->username;
    }

}
