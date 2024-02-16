<?php

declare(strict_types=1);

namespace Src\UserContext\User\Domain\ValueObjects;

use InvalidArgumentException;

final class UserProfilePhotoPath
{
    /**
     * UserProfilePhotoPath constructor.
     * @param null|string $profilePhotoPath
     * @throws InvalidArgumentException
     */

    public function __construct
    (
        private ?string $profilePhotoPath
    )
    {
        $this->validate($profilePhotoPath);
    }

    /**
     * validates that the url starts with '/' and does not contain spaces
     * @param null|string $profilePhotoPath
     * @throws InvalidArgumentException
     * @return void
     */
    private function validate(string $profilePhotoPath): void
    {
        if($profilePhotoPath !== null && !preg_match('/^\/[^\s]*$/', $profilePhotoPath)){
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $profilePhotoPath)
            );
        }
    }


    /**
     * Getter profilePhotoPath
     * @return null|string
     */
    public function value(): ?string
    {
    return $this->profilePhotoPath;
    }
}
