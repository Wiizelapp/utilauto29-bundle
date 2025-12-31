<?php
/**
 * VehicleElectricInfoView.
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

namespace WiizelApp\UtilAuto29\Application\Vehicle\Sections;

final class VehicleElectricInfoView
{
    public function __construct(
        public ?string $batteryCapacity,
        public ?string $batteryRental,
        public ?string $batteryType,
        public ?string $numberOfMotor,
        public ?string $batteryGuaranteeDurationMonth,
        public ?string $batteryGuaranteeDurationKm,
        public ?string $combinedElectricAutonomy,
        public ?string $electricDriveWheels,
        public ?string $powerOfIntegratedCharger,
        public ?string $chargingTimeDomesticSocket,
        public ?string $chargingTimeQuickPlug,
        public ?string $chargingSocketType,
        public ?string $cumulativePower,
        public ?string $batteryConsumption,
    ){}

    public static function fromArray(array $data): self
    {
        return new self(
            batteryCapacity: $data['batteryCapacity'] ?? '',
            batteryRental: $data['batteryRental'] ?? '',
            batteryType: $data['batteryType'] ?? '',
            numberOfMotor: $data['numberOfMotor'] ?? '',
            batteryGuaranteeDurationMonth: $data['batteryGuaranteeDurationMonth'] ?? '',
            batteryGuaranteeDurationKm: $data['batteryGuaranteeDurationKm'] ?? '',
            combinedElectricAutonomy: $data['combinedElectricAutonomy'] ?? '',
            electricDriveWheels: $data['electricDriveWheels'] ?? '',
            powerOfIntegratedCharger: $data['powerOfIntegratedCharger'] ?? '',
            chargingTimeDomesticSocket: $data['chargingTimeDomesticSocket'] ?? '',
            chargingTimeQuickPlug: $data['chargingTimeQuickPlug'] ?? '',
            chargingSocketType: $data['chargingSocketType'] ?? '',
            cumulativePower: $data['cumulativePower'] ?? '',
            batteryConsumption: $data['batteryConsumption'] ?? '',
        );
    }

}