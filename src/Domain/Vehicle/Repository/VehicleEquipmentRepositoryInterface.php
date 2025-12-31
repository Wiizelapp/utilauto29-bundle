<?php
declare(strict_types=1);
namespace App\Domain\Vehicle\Repository;

use App\Domain\Vehicle\Entity\VehicleEquipment;

interface VehicleEquipmentRepositoryInterface
{
    public function markForPersistence(VehicleEquipment $equipment): void;
    public function save(?object $entity = null): void;
    public function delete(object $entity): void;
}