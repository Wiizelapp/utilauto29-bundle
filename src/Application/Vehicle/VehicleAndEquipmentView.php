<?php
/**
 * VehicleAndEquipmentView.
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

use WiizelApp\UtilAuto29\Application\Equipment\EquipmentView;
use WiizelApp\UtilAuto29\Application\Vehicle\Sections\VehicleVersionView;

final class VehicleAndEquipmentView
{
    public function __construct(
      public readonly EquipmentView $equipments,
      public readonly VehicleVersionView $vehicle,
    ){}
}