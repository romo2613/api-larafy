<?php

declare(strict_types=1);

namespace Src\BoundedContext\User\Domain;

use Src\BoundedContext\User\Domain\ValueObjects\UserEmail;
use Src\BoundedContext\User\Domain\ValueObjects\UserEmailVerifiedAt;
use Src\BoundedContext\User\Domain\ValueObjects\UserRememberToken;
use Src\UserContext\User\Domain\ValueObjects\UserCountryId;
use Src\UserContext\User\Domain\ValueObjects\UserName;
use Src\UserContext\User\Domain\ValueObjects\UserPassword;
use Src\UserContext\User\Domain\ValueObjects\UserProfilePhotoPath;
use Src\UserContext\User\Domain\ValueObjects\UserSurname;
use Src\UserContext\User\Domain\ValueObjects\UserUsername;

final class User
{
    /**
     * User constructor.
     * @param UserUsername $username,
     * @param UserName $name,
     * @param UserSurname $surname,
     * @param UserEmail $email,
     * @param UserEmailVerifiedAt $emailVerifiedAt,
     * @param UserPassword $password,
     * @param UserCountryId $countryId,
     * @param UserProfilePhotoPath $profilePhotoPath,
     * @param UserRememberToken $rememberToken
     */
    public function __construct
    (
        private UserUsername $username,
        private UserName $name,
        private UserSurname $surname,
        private UserEmail $email,
        private UserEmailVerifiedAt $emailVerifiedAt,
        private UserPassword $password,
        private UserCountryId $countryId,
        private UserProfilePhotoPath $profilePhotoPath,
        private UserRememberToken $rememberToken
    ){}

    /**
     * Get the value of username
     * @return UserUserName
     */
    public function username(): UserUserName
    {
        return $this->username;
    }

    /**
     * Get the value of name
     * @return UserName
     */
    public function getName(): UserName
    {
        return $this->name;
    }

    /**
     * Get the value of surname
     * @return UserSurname
     */
    public function getSurname(): UserSurname
    {
        return $this->surname;
    }

    /**
     * Get the value of email
     * @return UserEmail
     */
    public function getEmail(): UserEmail
    {
        return $this->email;
    }

    /**
     * Get the value of emailVerifiedAt
     * @return UserEmailVerifiedAt
     */
    public function getEmailVerifiedAt(): UserEmailVerifiedAt
    {
        return $this->emailVerifiedAt;
    }

    /**
     * Get the value of password
     * @return UserPassword
     */
    public function getPassword(): UserPassword
    {
        return $this->password;
    }

    /**
     * Get the value of countryId
     * @return UserCountryId
     */
    public function getCountryId(): UserCountryId
    {
        return $this->countryId;
    }

    /**
     * Get the value of profilePhotoPath
     * @return UserProfilePhotoPath
     */
    public function getProfilePhotoPath(): UserProfilePhotoPath
    {
        return $this->profilePhotoPath;
    }

    /**
     * Get the value of rememberToken
     * @return UserRememberToken
     */
    public function getRememberToken(): UserRememberToken
    {
        return $this->rememberToken;
    }

    public static function create(
        UserUsername $username,
        UserName $name,
        UserSurname $surname,
        UserEmail $email,
        UserEmailVerifiedAt $emailVerifiedAt,
        UserPassword $password,
        UserCountryId $countryId,
        UserProfilePhotoPath $profilePhotoPath,
        UserRememberToken $rememberToken
    ): User
    {
        $user = new self($username, $name, $surname, $email, $emailVerifiedAt, $password, $countryId, $profilePhotoPath, $rememberToken);

        return $user;
    }
}
