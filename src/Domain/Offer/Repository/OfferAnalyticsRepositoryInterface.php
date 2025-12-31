<?php

declare(strict_types=1);

/**
 * OfferAnalyticsRepositoryInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Offer\Repository;

use App\Domain\Customer\Entity\Customer;
use App\Domain\Offer\Entity\Offer;

interface OfferAnalyticsRepositoryInterface
{
    public function save(?object $entity): void;
    public function hasRecentVisit(Offer $offer, string $ip, \DateTimeImmutable $since, ?Customer $customer = null): bool;
    // Stats (read)
    public function countTotalVisits(Offer $offer): int;

    public function countAllTotalVisits(?\DateTimeInterface $from = null, ?\DateTimeInterface $to = null): int;

    public function countUniqueVisits(Offer $offer): int;

    public function countVisitsInPeriod(Offer $offer, \DateTimeInterface $from, \DateTimeInterface $to): int;

    public function countCustomerVisits(Customer $customer): int;
    public function countDailyVisits(Offer $offer, \DateTimeInterface $from, \DateTimeInterface $to): array;
    public function countAllDailyVisits(\DateTimeInterface $from, \DateTimeInterface $to): array;

    /**
     * @return array<array{offer: Offer, views: int}>
     */
    public function getTopVisitedOffers(int $limit = 5): array;
}