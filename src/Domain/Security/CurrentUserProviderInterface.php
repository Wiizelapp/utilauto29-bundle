<?php

declare(strict_types=1);

namespace App\Domain\Security;

use App\Domain\User\Entity\User;

interface CurrentUserProviderInterface
{
    public function getUser(): ?User;
}