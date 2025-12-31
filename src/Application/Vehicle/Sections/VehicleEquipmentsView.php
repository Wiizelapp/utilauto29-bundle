<?php

declare(strict_types=1);

/**
 * VehicleEngineView.
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