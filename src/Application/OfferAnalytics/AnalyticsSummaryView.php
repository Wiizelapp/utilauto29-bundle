<?php
/**
 * AnalyticsSummaryView.
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

namespace WiizelApp\UtilAuto29\Application\OfferAnalytics;

use WiizelApp\UtilAuto29\Application\Offer\OfferView;

final class AnalyticsSummaryView
{
    public function __construct(
        public int $id,
        public int $totalViews,
        public int $uniqueViews,
        public \DateTimeImmutable $lastViewedAt,
        public string $lastIp,
        public \DateTimeImmutable $createdAt,
        public ?OfferView $offerView = null,
    ){}
}