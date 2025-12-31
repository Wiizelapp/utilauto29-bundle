<?php

declare(strict_types=1);

namespace App\Domain\Vehicle\Repository;

use Knp\Component\Pager\Pagination\PaginationInterface;

interface VehicleRepositoryInterface
{
    public function findPaginated(int $limit, int $offset): array;
    public function paginate(int $page, int $limit): PaginationInterface;
    public function findDistinctMakeNames(): array;
    public function findDistinctCarTypes(): array;
    public function findDistinctGearbox(): array;
    public function makeForPersisting(?object $entity = null): void;
    public function save(): void;
}