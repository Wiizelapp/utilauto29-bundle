<?php

declare(strict_types=1);

/**
 * AnalyticsVisitView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\OfferAnalytics;

use Shared\Application\Customer\Dto\CustomerView;

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