<?php
declare(strict_types=1);
namespace App\Domain\Offer\Repository;

interface PictureRepositoryInterface
{
    public function delete(object $entity): void;
    public function markForPersistence(object $entity): void;
    public function save(): void;
}