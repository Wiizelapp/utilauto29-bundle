<?php

declare(strict_types=1);

/**
 * ApiVehicleDetails
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

use App\Application\Vehicle\Dto\VehicleChassisView;
use App\Application\Vehicle\Dto\VehicleCommercialDataView;
use App\Application\Vehicle\Dto\VehicleConsumptionView;
use App\Application\Vehicle\Dto\VehicleDimensionsView;
use App\Application\Vehicle\Dto\VehicleElectricInfoView;
use App\Application\Vehicle\Dto\VehicleEngineView;
use App\Application\Vehicle\Dto\VehicleOffroadView;

final readonly class ApiVehicleDetails
{
    /**
     * @param ApiVehicleEquipment[] $equipments
     */
    public function __construct(
        public ApiVehicleVersion $version,
        public VehicleConsumptionView $consumption,
        public VehicleEngineView $engine,
        public VehicleDimensionsView $dimensions,
        public VehicleChassisView $chassis,
        public VehicleElectricInfoView $electric,
        public VehicleOffroadView $offroad,
        public VehicleCommercialDataView $commercial,
        public array $equipments,
        public ?int $vehicleApiVersion = null,
    ) {}
}