<?php

declare(strict_types=1);

/**
 * VehicleConsumptionView.
 *
 * DTO For Database From Wiizel Software
 * EI Yann Cario - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Vehicle\Sections;


final class VehicleConsumptionView
{
    public function __construct(
        public ?string $urbanConsumptionInLiter,
        public ?string $extraUrbanConsumptionInLiter,
        public ?string $mixteConsumptionInLiter,
        public ?string $tankVolumeInLiter,
        public ?string $ecologicalBonus,
        public ?string $co2Emission,
        public ?string $co2EmissionWltp,
        public ?int $id = null,
    ){}

    public static function fromArray(array $data): self
    {
        return new self(
            urbanConsumptionInLiter: $data['urbanConsumptionInLiter'] ?? '',
            extraUrbanConsumptionInLiter: $data['extraUrbanConsumptionInLiter'] ?? '',
            mixteConsumptionInLiter: $data['mixteConsumptionInLiter'] ?? '',
            tankVolumeInLiter: $data['tankVolumeInLiter'] ?? '',
            ecologicalBonus: $data['ecologicalBonus'] ?? '',
            co2Emission: $data['co2Emission'] ?? '',
            co2EmissionWltp: $data['co2EmissionWltp'] ?? '',
            id: $data['id'] ?? null,
        );
    }
}