<?php

declare(strict_types=1);

/**
 * VehicleComfortView.
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

final class VehicleComfortView
{
    public function __construct(
        public readonly ?string $airConditioning,
        public readonly ?string $automaticClimateControl,
        public readonly ?string $sunroof,
        public readonly ?string $electricWindowsFront,
        public readonly ?string $electricWindowsRear,
        public readonly ?string $heatedSeats,
        public readonly ?string $electricSeats,
        public readonly ?string $memorySeats,
        public readonly ?string $steeringWheelAdjustment,
        public readonly ?string $centralLocking,
        public readonly ?string $keylessEntry,
        public readonly ?string $handsFreeStart,
        public readonly ?string $rearViewCamera,
        public readonly ?string $parkingSensorsFront,
        public readonly ?string $parkingSensorsRear,
        public readonly ?string $cruiseControl,
        public readonly ?string $speedLimiter,
        public readonly ?string $navigationSystem,
        public readonly ?string $infotainmentScreenSize,
        public readonly ?string $soundSystemBrand
    ) {}
}