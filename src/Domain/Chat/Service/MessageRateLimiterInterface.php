<?php

declare(strict_types=1);

namespace App\Domain\Chat\Service;

use App\Domain\User\Entity\User;

interface MessageRateLimiterInterface
{
    /**
     * Vérifie si l'utilisateur a atteint la limite de messages dans une période donnée.
     *
     * @param User $user
     * @return bool true si la limite est atteinte, false sinon
     */
    public function isLimitReached(User $user): bool;

    /**
     * Enregistre un message envoyé par l'utilisateur, pour suivre son activité.
     *
     * @param User $user
     */
    public function recordMessage(User $user): void;
}