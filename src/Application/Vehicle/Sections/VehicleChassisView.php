<?php
/**
 * VehicleChassisView.
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

final class VehicleChassisView
{
    public function __construct(
        public ?int $id,
        public ?string $frontSuspension,
        public ?string $rearSuspension,
        public ?string $frontTireSize,
        public ?string $rearTireSize,
        public ?string $spareTire,
        public ?string $discBrake,
        public ?string $direction,
        public ?string $differentialLock,
        public ?string $turningDiameterWallInMeter,
        public ?string $turningDiameterCurbsInMeter
    ){}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'] ?? null,
            frontSuspension: $data['frontSuspension'] ?? '',
            rearSuspension: $data['rearSuspension'] ?? '',
            frontTireSize: $data['frontTireSize'] ?? '',
            rearTireSize: $data['rearTireSize'] ?? '',
            spareTire: $data['spareTire'] ?? '',
            discBrake: $data['discBrake'] ?? '',
            direction: $data['direction'] ?? '',
            differentialLock: $data['differentialLock'] ?? '',
            turningDiameterWallInMeter: $data['turningDiameterWallInMeter'] ?? '',
            turningDiameterCurbsInMeter: $data['turningDiameterCurbsInMeter'] ?? '',
        );
    }
}