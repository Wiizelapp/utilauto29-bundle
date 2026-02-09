<?php
/**
 * PlanningView.
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

namespace WiizelApp\UtilAuto29\Application\Planning;

final class PlanningView
{
    public function __construct(
        public int $id,
        public \DateTimeImmutable $beginAt,
        public \DateTimeImmutable $endAt,
        public string $title,
        public bool $allDay,
        public ?PlanningCategoryView $category = null,
        public ?string $description = null,
    ) {
    }
}