<?php

declare(strict_types=1);

/**
 * VehicleVersionView.
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