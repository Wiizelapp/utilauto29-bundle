<?php

namespace App\Domain\Chat\Repository;

use App\Domain\Chat\Entity\ChatMessage;

interface ChatMessageRepositoryInterface
{
    public function findLatest(): array;
    public function save(ChatMessage $chatMessage): void;
    public function delete(ChatMessage $chatMessage): void;
}