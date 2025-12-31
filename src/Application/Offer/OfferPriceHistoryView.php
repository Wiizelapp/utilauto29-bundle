<?php

declare(strict_types=1);

/**
 * OfferPriceHistoryView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Offer;

use DateTimeImmutable;
use Shared\Application\User\Dto\UserView;

final class OfferPriceHistoryView
{
    public function __construct(
        public int $id,
        public int $offerId,
        public int $userId,
        public float $oldPrice,
        public float $newPrice,
        public DateTimeImmutable $changeDate,
    ){}
}