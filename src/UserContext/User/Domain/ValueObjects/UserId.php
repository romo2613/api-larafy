<?php

declare(strict_types=1);

namespace Src\UserContext\User\Domain\ValueObjects;

use InvalidArgumentException;

final class UserId
{
    /**
     * userId constructor.
     * @param int $id
     * @throws InvalidArgumentException
     */
    public function __construct
    (
        private int $id,
    )
    {
        $this->validate($id);
    }

    /**
     * validate property $id
     * @param int $id
     * @throws InvalidArgumentException
     * @return void
     */
    private function validate(int $id): void
    {
        $options =  [
            'options' => [
                'min_range' => 1,
            ]
        ];

        if(!filter_var($id, FILTER_VALIDATE_INT, $options)){
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the value <%s>.', static::class, $id)
            );
        }
    }

    /**
     * Getter id
     * @return int
     */
    public function value(): int
    {
        return $this->id;
    }

}
