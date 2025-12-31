<?php
/**
 * OfferPriceHistoryView.
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

namespace WiizelApp\UtilAuto29\Application\Offer;

use DateTimeImmutable;

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