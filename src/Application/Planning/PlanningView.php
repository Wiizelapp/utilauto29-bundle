<?php
/**
 * PlanningView.
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

declare(strict_types=1);

namespace Shared\Application\Planning;

final class PlanningView
{
    public function __construct(
        public int $id,
        public \DateTime $beginAt,
        public \DateTime $endAt,
        public string $title,
        public bool $allDay,
        public ?string $description = null,
        public ?string $backgroundColor = null,
        public ?string $textColor = null,
    ) {
    }
}