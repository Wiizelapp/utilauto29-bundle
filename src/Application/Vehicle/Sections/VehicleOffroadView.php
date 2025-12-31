<?php

declare(strict_types=1);

/**
 * VehicleOffroadView.
 *
 * DTO For Database From Wiizel Software
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Vehicle\Sections;

final class VehicleOffroadView
{
    public function __construct(
        public ?string $angleOfAttack,
        public ?string $vanishingAngle,
        public ?string $cumulativeTorque,
    ){}

    public static function fromArray(array $data): self
    {
        return new self(
            angleOfAttack: $data['angleOfAttack'] ?? '',
            vanishingAngle: $data['vanishingAngle'] ?? '',
            cumulativeTorque: $data['cumulativeTorque'] ?? '',
        );
    }

}