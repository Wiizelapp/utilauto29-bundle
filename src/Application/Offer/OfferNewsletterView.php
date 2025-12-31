<?php
/**
 * OfferNewsletterView.
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

namespace WiizelApp\UtilAuto29\Application\Offer;

final class OfferNewsletterView
{
    public function __construct(
        private ?int $id = null,
        private ?string $description = null,
        private float|string $price = '',
        private ?string $slug = null,
        private ?string $reference = null,
        private ?string $kilometers = null,
        private ?string $guarantee = null,
        private ?int $critair = null,
        private ?string $issuance = null,
        private ?string $handsNumber = null,
        private ?string $qrCode = null,
        private ?bool $online = null,
        private ?string $pictureOrder = null,
        private ?\DateTimeImmutable $createdAt = null,
        private ?string $fiscalPower = null,
        private ?string $powerCh = null,
        private ?string $motorization = null,
        private ?string $modelName = null,
        private ?string $version = null,
        private ?string $versionYear = null
    ) {}

    public function getId(): ?int { return $this->id; }
    public function getDescription(): ?string { return $this->description; }
    public function getPrice(): float|string { return $this->price; }
    public function getSlug(): ?string { return $this->slug; }
    public function getReference(): ?string { return $this->reference; }
    public function getKilometers(): ?string { return $this->kilometers; }
    public function getGuarantee(): ?string { return $this->guarantee; }
    public function getCritair(): ?string { return $this->critair; }
    public function getIssuance(): ?string { return $this->issuance; }
    public function getHandsNumber(): ?string { return $this->handsNumber; }
    public function getQrCode(): ?string { return $this->qrCode; }
    public function getOnline(): ?bool { return $this->online; }
    public function getPictureOrder(): ?string { return $this->pictureOrder; }
    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function getFiscalPower(): ?string { return $this->fiscalPower; }
    public function getPowerCh(): ?string { return $this->powerCh; }
    public function getMotorization(): ?string { return $this->motorization; }
    public function getModelName(): ?string { return $this->modelName; }
    public function getVersion(): ?string { return $this->version; }
    public function getVersionYear(): ?string { return $this->versionYear; }
}