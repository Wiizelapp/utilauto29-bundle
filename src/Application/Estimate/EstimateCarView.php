<?php

declare(strict_types=1);

namespace Shared\Application\Estimate;

final class EstimateCarView
{
    public function __construct(
        public ?string $model = null,
        public ?\DateTimeInterface $startDate = null,
        public ?string $registration = null,
        public ?float $kilometers = null,
        public ?string $color = null,
        public bool $rollingVehicle = false,
        public ?float $myEstimate = null,
        public ?string $mail = null,
        public ?string $project = null,
        public ?string $reference = null
    ){}
}