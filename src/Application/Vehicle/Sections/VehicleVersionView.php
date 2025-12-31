<?php
/**
 * VehicleVersionView.
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

final class VehicleVersionView
{
    public function __construct(
      public ?int $id = null,
      public ?string $euroStandard,
      public ?string $normeEuro,
      public ?string $finition,
      public ?string $version,
      public ?string $modelName,
      public ?string $makeName,
      public ?string $year,
      public ?string $type,
      public ?string $energy
    ){}

}