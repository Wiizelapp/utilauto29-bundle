<?php

declare(strict_types=1);

/**
 * OfferRepositoryInterface.
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

use App\Application\Offer\Dto\OfferFilterCriteria;
use App\Application\Offer\Dto\OfferSearchCriteria;
use App\Domain\Offer\Entity\Offer;
use Knp\Component\Pager\Pagination\PaginationInterface;

interface OfferRepositoryInterface
{
    public function markForPersistence(Offer $offer): void;
    public function save(?object $entity = null): void;
    public function findLatest(int $limit): array;
    public function searchWithFilter(OfferFilterCriteria $criteria, ?int $page = null, ?int $limit = null): PaginationInterface;
    public function searchByReferenceOrVehicle(OfferSearchCriteria $criteria): array;
    public function findPrevious(\DateTimeImmutable $createdAt): ?Offer;
    public function findNext(\DateTimeImmutable $createdAt): ?Offer;
    public function findMostViewedOffer(\DateTimeInterface $from = null, \DateTimeInterface $to = null): ?array;
    public function delete(object $entity): void;
}