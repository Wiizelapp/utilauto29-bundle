<?php

declare(strict_types=1);

/**
 * VehicleAndEquipmentView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Vehicle;

use Shared\Application\Equipment\EquipmentView;
use Shared\Application\Vehicle\Sections\VehicleVersionView;

final class VehicleAndEquipmentView
{
    public function __construct(
      public readonly EquipmentView $equipments,
      public readonly VehicleVersionView $vehicle,
    ){}
}