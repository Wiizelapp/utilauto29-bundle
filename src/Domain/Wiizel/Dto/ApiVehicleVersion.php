<?php

declare(strict_types=1);

/**
 * ApiVehicleVersion
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

use App\Application\Vehicle\Dto\VehicleCommercialDataView;
use App\Application\Vehicle\Dto\VehicleConsumptionView;
use App\Application\Vehicle\Dto\VehicleVersionView;

final readonly class ApiVehicleVersion
{
    public function __construct(
        public string $id,
        public ?string $euroStandard,
        public ?string $normeEuro,
        public ?string $finition,
        public string $version,
        public ?string $modelName,
        public ?string $makeName,
        public ?string $versionYear,
        public ?string $carType,
        public ?string $motorization,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['@id'] ?? '',
            euroStandard: $data['euroStandard'] ?? '',
            normeEuro: $data['normeEuro'] ?? '',
            finition: $data['finition'] ?? '',
            version: $data['version'] ?? '',
            modelName: $data['modelName'] ?? '',
            makeName: $data['makeName'] ?? '',
            versionYear: $data['versionYear'] ?? '',
            carType: $data['carType'] ?? '',
            motorization: $data['motorization'] ?? '',
        );
    }

}