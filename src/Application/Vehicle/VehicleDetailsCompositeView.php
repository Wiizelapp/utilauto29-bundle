<?php
/**
 * VehicleDetailsCompositeView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Wiizel Softwares <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

declare(strict_types=1);

namespace WiizelApp\UtilAuto29\Application\Vehicle;

use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleChassisView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleCommercialDataView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleConsumptionView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleDimensionsView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleElectricInfoView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleEngineView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleOffroadView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleVersionView;

final readonly class VehicleDetailsCompositeView
{
    public function __construct(
        private int                       $id,
        private array                     $equipments, // @var VehicleEquipmentView[]
        private ?string                   $options,
        private ?string                   $carEquipment,
        private ?int                      $apiVersionId,
        private VehicleCommercialDataView $commercialData,
        private VehicleConsumptionView    $consumption,
        private VehicleDimensionsView     $dimensions,
        private VehicleEngineView         $engine,
        private VehicleOffroadView        $offroad,
        private VehicleVersionView        $version,
        private VehicleChassisView        $chassis,
        private VehicleElectricInfoView   $electricInfo,
    ){}

    public function getId(): int { return $this->id; }
    public function getEquipments(): array { return $this->equipments; }
    public function getOptions(): ?string { return $this->options; }
    public function getCarEquipment(): ?string { return $this->carEquipment; }
    public function getApiVersionId(): ?int { return $this->apiVersionId; }
    public function getCommercialData(): VehicleCommercialDataView { return $this->commercialData; }
    public function getConsumption(): VehicleConsumptionView { return $this->consumption; }
    public function getDimensions(): VehicleDimensionsView { return $this->dimensions; }
    public function getEngine(): VehicleEngineView { return $this->engine; }
    public function getOffroad(): VehicleOffroadView { return $this->offroad; }
    public function getVersion(): VehicleVersionView { return $this->version; }
    public function getChassis(): VehicleChassisView { return $this->chassis; }
    public function getElectricInfo(): VehicleElectricInfoView { return $this->electricInfo; }
}