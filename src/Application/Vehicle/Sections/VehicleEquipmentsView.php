<?php
/**
 * VehicleEquipmentsView.
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

final class VehicleEquipmentsView
{
    public function __construct(
        public int $id,
        public ?string $label,
        public ?string $theme,
        public ?string $type,
        public ?int $vehicleId,
    ){}
}