<?php
/**
 * EstimateCarView.
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

namespace WiizelApp\UtilAuto29\Application\Estimate;

final class EstimateCarView
{
    public function __construct(
        public ?string $model = null,
        public ?\DateTimeInterface $startDate = null,
        public ?string $registration = null,
        public ?float $kilometers = null,
        public ?string $color = null,
        public bool $rollingVehicle = false,
        public ?float $myEstimate = null,
        public ?string $mail = null,
        public ?string $project = null,
        public ?string $reference = null
    ){}
}