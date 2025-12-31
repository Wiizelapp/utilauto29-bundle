<?php
/**
 * VehicleEngineView.
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

final class VehicleEngineView
{
    public function __construct(
        public ?string $motorization,
        public ?string $fiscalPower,
        public ?string $motor,
        public ?string $cylinderInCm3,
        public ?string $powerCh,
        public ?string $coupleNm,
        public ?string $superchargingType,
        public ?string $gearbox,
        public ?string $drivingWheels,
        public ?string $maxSpeed,
        public ?string $zeroToCentKmh,
        public ?string $powerChAndFp = null,
        public ?int $id = null,
    ){}

    public static function fromArray(array $data): self
    {
        return new self(
            motorization: $data['motorization'] ?? '',
            fiscalPower: $data['fiscalPower'] ?? '',
            motor: $data['motor'] ?? '',
            cylinderInCm3: $data['cylinderInCm3'] ?? '',
            powerCh: $data['powerCh'] ?? '',
            coupleNm: $data['coupleNm'] ?? '',
            superchargingType: $data['superchargingType'] ?? '',
            gearbox: $data['gearbox'] ?? '',
            drivingWheels: $data['drivingWheels'] ?? '',
            maxSpeed: $data['maxSpeed'] ?? '',
            zeroToCentKmh: $data['zeroToCentKmh'] ?? '',
            id: $data['id'] ?? null,
        );
    }
}