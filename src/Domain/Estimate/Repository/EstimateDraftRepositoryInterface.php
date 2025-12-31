<?php

declare(strict_types=1);

/**
 * EstimateDraftRepositoryInterface.
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

use App\Application\Estimate\Dto\EstimateCarView;
use App\Application\Estimate\Dto\EstimateCreateDto;

interface EstimateDraftRepositoryInterface
{
    public function save(string $token, EstimateCarView $dto): void;
    public function get(string $token): ?EstimateCarView;
    public function delete(string $token): void;
}