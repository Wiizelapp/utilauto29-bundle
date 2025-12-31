<?php

declare(strict_types=1);

namespace App\Domain\Offer\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class OfferContactDTO
{

    #[Assert\NotBlank]
    #[Assert\Email]
    public string $email = '';

    public string $vehicle = '';

    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 800)]
    public string $message = '';

    #[Assert\Length(min:9, max:10)]
    public string $phone = '';

    public string $offer_reference = '';

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(?string $email): OfferContactDTO
    {
        $this->email = $email;
        return $this;
    }

    public function getVehicle(): string
    {
        return $this->vehicle;
    }

    public function setVehicle(?string $vehicle): OfferContactDTO
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(?string $message): OfferContactDTO
    {
        $this->message = $message;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): OfferContactDTO
    {
        $this->phone = $phone;
        return $this;
    }

    public function getOfferReference(): string
    {
        return $this->offer_reference;
    }

    public function setOfferReference(?string $offer_reference): OfferContactDTO
    {
        $this->offer_reference = $offer_reference;
        return $this;
    }


}