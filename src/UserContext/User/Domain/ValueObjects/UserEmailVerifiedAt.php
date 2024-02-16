<?php

declare(strict_types=1);

namespace Src\BoundedContext\User\Domain\ValueObjects;

use DateTime;

final class UserEmailVerifiedAt
{
    /**
     * UserEmailVerifiedAt constructor.
     * @param  DateTime|null $emailVerifiedAt
     */
    public function __construct
    (
        private ?DateTime $emailVerifiedAt
    ){}

    /**
     * Getter emailVerifiedAt
     * @return null|DateTime
     */
    public function value(): ?DateTime
    {
        return $this->emailVerifiedAt;
    }
}
