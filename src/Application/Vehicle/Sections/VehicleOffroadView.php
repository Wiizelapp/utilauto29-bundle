<?php
/**
 * VehicleOffroadView.
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