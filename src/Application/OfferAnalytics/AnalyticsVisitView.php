<?php
/**
 * AnalyticsVisitView.
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

use WiizelApp\UtilAuto29\Application\Customer\Dto\CustomerView;

final class AnalyticsVisitView
{
    public function __construct(
        public int $id,
        public string $ipAddress,
        public string $userAgent,
        public bool $isBot = false,
        public ?string $referer = null,
        public ?string $deviceType = null,
        public ?CustomerView $customerView = null,
        public ?\DateTimeImmutable $visitedAt = null,
        public ?string $sessionId = null,
    ){}
}