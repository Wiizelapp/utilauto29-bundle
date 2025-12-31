<?php

declare(strict_types=1);

namespace App\Domain\Offer\Dto;

class OfferSearchDTO
{

    /**
     * @var int|null
     */
    private $maxPrice;

    /**
     * @var int|null
     */
    private $minPrice;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $motorization;

    /**
     * @var string|null
     */
    private $make;

    /**
     * @var boolean|null
     */
    private $revComplete;

    /**
     * @var string|null
     */
    private $guarantee;

    /**
     * @var string|null
     */
    private $isSold;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): OfferSearchDTO
    {
        $this->type = $type;
        return $this;
    }

    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    public function setMaxPrice(int $maxPrice): OfferSearchDTO
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @param mixed $motorization
     * @return OfferSearchDTO
     */
    public function setMotorization($motorization): static
    {
        $this->motorization = $motorization;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMotorization(): ?string
    {
        return $this->motorization;
    }

    public function setMake(?string $make): static
    {
        $this->make = $make;
        return $this;
    }

    public function getMake(): ?string
    {
        return $this->make;
    }

    public function setMinPrice(?int $minPrice): OfferSearchDTO
    {
        $this->minPrice = $minPrice;
        return $this;
    }

    public function getMinPrice(): ?int
    {
        return $this->minPrice;
    }

    public function setRevComplete(?bool $revComplete): OfferSearchDTO
    {
        $this->revComplete = $revComplete;
        return $this;
    }

    public function getRevComplete(): ?bool
    {
        return $this->revComplete;
    }

    public function getGuarantee(): ?string
    {
        return $this->guarantee;
    }

    public function setGuarantee(?string $guarantee): OfferSearchDTO
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    public function setIsSold(?string $isSold): OfferSearchDTO
    {
        $this->isSold = $isSold;
        return $this;
    }

    public function getIsSold(): ?string
    {
        return $this->isSold;
    }

}
