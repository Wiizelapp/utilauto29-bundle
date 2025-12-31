<?php

declare(strict_types=1);

/**
 * EquipmentView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Equipment;

final class EquipmentView
{
    public function __construct(
      public int $id,
      public string $name,
      public string $category,
      public ?string $slug = null,
      public ?int $vehicleId = null,
    ){}
}