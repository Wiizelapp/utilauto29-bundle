<?php
/**
 * CustomerView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Wiizel Softwares <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

declare(strict_types=1);

namespace WiizelApp\UtilAuto29\Application\Customer\Dto;

final readonly class CustomerView
{
    public function __construct(
        private int $id,
        private string $fullName,
        private string $email,
        private ?int $customerNumber,
        private \DateTimeInterface $createdAt,
        private \DateTimeInterface $updatedAt,
        private ?string $phone = null,
        private ?string $mobile = null,
        private ?string $address = null,
        private ?string $city = null,
        private ?string $addrLongitude = null,
        private ?string $addrLatitude = null,
        private ?string $zipCode = null,
        private ?string $department = null,
        private ?string $withReduction = null,
        private ?int $code = null,
        private ?bool $isSecure2Fa = null,
        private ?array $vehiclesRelation = []
    ){}

    public function getId(): int { return $this->id; }
    public function getFullName(): string { return $this->fullName; }
    public function getEmail(): string { return $this->email; }
    public function getPhone(): ?string { return $this->phone; }
    public function getMobile(): ?string { return $this->mobile; }
    public function getAddress(): ?string { return $this->address; }
    public function getCity(): ?string { return $this->city; }
    public function getAddrLongitude(): ?string { return $this->addrLongitude; }
    public function getAddrLatitude(): ?string { return $this->addrLatitude; }
    public function getZipCode(): ?string { return $this->zipCode; }
    public function getCustomerNumber(): ?int { return $this->customerNumber; }
    public function getCreatedAt(): \DateTimeInterface { return $this->createdAt; }
    public function getUpdatedAt(): \DateTimeInterface { return $this->updatedAt; }
    public function getDepartment(): ?string { return $this->department; }
    public function getWithReduction(): ?string { return $this->withReduction; }
    public function getCode(): ?int { return $this->code; }
    public function getVehiclesRelation(): array { return $this->vehiclesRelation; }
    public function isSecure2Fa(): bool { return $this->isSecure2Fa; }

}
