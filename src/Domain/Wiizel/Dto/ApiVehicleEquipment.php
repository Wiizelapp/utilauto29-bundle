<?php

declare(strict_types=1);

/**
 * VehicleEquipmentsData
 *
 *
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Wiizel\Dto;

final readonly class ApiVehicleEquipment
{
    public function __construct(
        public string $id,
        public string $type,
        public string $theme,
        public string $label
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['@id'] ?? '',
            type: $data['@type'] ?? '',
            theme: $data['theme'] ?? '',
            label: $data['equipment'] ?? '',
        );
    }
}