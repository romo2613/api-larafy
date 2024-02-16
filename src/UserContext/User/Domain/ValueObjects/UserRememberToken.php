<?php

declare(strict_types=1);

namespace Src\BoundedContext\User\Domain\ValueObjects;

final class UserRememberToken
{
    /**
     * UserRememberToken constructor.
     * @param string $rememberToken
     */
    public function __construct
    (
        private ?string $rememberToken
    ){}

    /**
     * Getter rememberToken
     * @return null|string
     */
    public function value(): ?string
    {
        return $this->rememberToken;
    }
}
