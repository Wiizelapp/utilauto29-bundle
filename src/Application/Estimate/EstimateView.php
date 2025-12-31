<?php

declare(strict_types=1);

/**
 * UserView.
 *
 * @category Domain
 * @package  utilauto29/shared
 * @author   Yann <yann@proaxive.fr>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://utilauto29.fr
 */

namespace Shared\Application\Estimate;

final readonly class EstimateView
{
    public function __construct(
        private int $id,
        private ?string $reference,
        private ?string $model,
        private ?string $registration,
        private ?string $kilometers,
        private ?string $myEstimate,
        private bool $completed,
        private ?string $state,
        private ?string $mail,
        private ?\DateTimeImmutable $createdAt,
        private bool $rollingVehicle,
        private ?array $estimateAnswers = [],
        private ?array $estimatePictures = null,
        private ?string $carVin = null,
        private ?string $project = null,
        private ?string $color = null,
    ){}

    public function getId(): int { return $this->id; }
    public function getReference(): ?string { return $this->reference; }
    public function getModel(): ?string { return $this->model; }
    public function getRegistration(): ?string { return $this->registration; }
    public function getKilometers(): ?string { return $this->kilometers; }
    public function getMyEstimate(): ?string { return $this->myEstimate; }
    public function isCompleted(): bool { return $this->completed; }
    public function getState(): ?string { return $this->state; }
    public function getMail(): ?string { return $this->mail; }
    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function getEstimatePictures(): ?array { return $this->estimatePictures; }
    public function getProject(): ?string { return $this->project; }
    public function getColor(): ?string { return $this->color; }
    public function getCarVin(): ?string { return $this->carVin; }
    public function getEstimateAnswers(): ?array { return $this->estimateAnswers; }
    public function getRollingVehicle(): ?bool { return $this->rollingVehicle; }
}