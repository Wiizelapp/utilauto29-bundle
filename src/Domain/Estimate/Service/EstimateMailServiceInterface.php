<?php

declare(strict_types=1);

/**
 * EstimateMailServiceInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Estimate\Service;

use App\Application\Estimate\Dto\Answer\EstimateAnswerView;
use App\Application\Estimate\Dto\EstimateDetailView;

interface EstimateMailServiceInterface
{
    public function send(EstimateDetailView $estimate, EstimateAnswerView $answer): void;
}