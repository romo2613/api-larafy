<?php

declare(strict_types=1);

namespace Src\UserContext\User\Domain\ValueObjects;

use InvalidArgumentException;

final class UserCountryId
{
    /**
     * countryId constructor.
     * @param null|int $countryId
     * @throws InvalidArgumentException
     */
    public function __construct
    (
        private ?int $countryId,
    )
    {
        $this->validate($countryId);
    }

    /**
     * validate property $countryId
     * @param int $id
     * @throws InvalidArgumentException
     * @return void
     */
    private function validate(int $countryId): void
    {
        $options =  [
            'options' => [
                'min_range' => 1,
            ]
        ];

        if($countryId !== null && !filter_var($countryId, FILTER_VALIDATE_INT, $options)){
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $countryId)
            );
        }
    }

    /**
     * Getter countryId
     * @return null|int
     */
    public function value(): ?int
    {
        return $this->countryId;
    }

}
