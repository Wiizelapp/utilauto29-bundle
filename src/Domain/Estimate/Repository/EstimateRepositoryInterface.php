<?php

declare(strict_types=1);

/**
 * EstimateRepositoryInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Estimate\Repository;

use Knp\Component\Pager\Pagination\PaginationInterface;

interface EstimateRepositoryInterface
{
    public function save(?object $entity = null): void;
    public function paginate(int $page, int $limit): PaginationInterface;
}