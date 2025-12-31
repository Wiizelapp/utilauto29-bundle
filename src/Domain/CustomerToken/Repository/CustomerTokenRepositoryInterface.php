<?php

declare(strict_types=1);

namespace App\Domain\CustomerToken\Repository;

use App\Domain\CustomerToken\Entity\CustomerToken;

interface CustomerTokenRepositoryInterface
{
    public function add(CustomerToken $customerToken): void;
    public function remove(CustomerToken $customerToken): void;
}