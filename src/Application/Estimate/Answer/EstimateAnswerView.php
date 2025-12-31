<?php

declare(strict_types=1);

/**
 * EstimateAnswerView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Estimate\Answer;

final class EstimateAnswerView
{
    public function __construct(
        private int $id,
        private string $content,
        private string $mailTo,
        private float $estimatePrice,
        private bool $approved,
        private \DateTimeInterface $createdAt
    ){}

    public function getId(): int { return $this->id; }
    public function getContent(): string { return $this->content; }
    public function getMailTo(): string { return $this->mailTo; }
    public function getEstimatePrice(): float { return $this->estimatePrice; }
    public function isApproved(): bool { return $this->approved; }
    public function getCreatedAt(): \DateTimeInterface { return $this->createdAt; }
}