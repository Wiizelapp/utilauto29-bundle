<?php
/**
 * OfferView.
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

use WiizelApp\UtilAuto29\Domain\Offer\OfferStateEnum;

final class OfferView
{
    public function __construct(
        private ?int $id = null,
        private ?string $title = null,
        private ?OfferStateEnum $offerState = null,
        private ?string $slug = null,
        private ?string $description = null,
        private null|string|float $price = null,
        private ?string $reference = null,
        private ?string $kilometers = null,
        private ?string $guarantee = null,
        private ?int $critair = null,
        private ?string $issuance = null,
        private ?string $handsNumber = null,
        private ?string $plateCountry = null,
        private ?string $plateNumber = null,
        private ?string $ldpNumber = null,
        private ?string $reviewing = null,
        private ?string $filterEnergy = null,
        private ?string $filterMake = null,
        private ?string $filterType = null,
        private ?string $qrCode = null,
        private ?bool $online = null,
        private ?bool $sold = null,
        private ?bool $isReserved = null,
        private ?bool $revDrain = null,
        private ?bool $revDistribution = null,
        private ?bool $revBreaking = null,
        private ?bool $revPneumatic = null,
        private ?bool $revComplete = null,
        private ?bool $revClutch = null,
        private ?bool $revBattery = null,
        private ?bool $revShockAbsorber = null,
        private ?bool $infront = null,
        private ?string $videoId = null,
        private ?string $webPathPicture = null,
        private ?\DateTimeImmutable $createdAt = null,
        private ?bool $isFavoriteByUser = null,
        private ?int $countFavorites = null,
        private ?array $vehicleInfos = [],
    ) {}

    public function getId(): ?int { return $this->id; }
    public function getTitle(): ?string { return $this->title; }
    public function getOfferState(): ?OfferStateEnum { return $this->offerState; }
    public function getSlug(): ?string { return $this->slug; }
    public function getDescription(): ?string { return $this->description; }
    public function getPrice(): null|string|float { return $this->price; }
    public function getReference(): ?string { return $this->reference; }
    public function getKilometers(): ?string { return $this->kilometers; }
    public function getGuarantee(): ?string { return $this->guarantee; }
    public function getCritair(): ?int { return $this->critair; }
    public function getIssuance(): ?string { return $this->issuance; }
    public function getHandsNumber(): ?string { return $this->handsNumber; }
    public function getPlateCountry(): ?string { return $this->plateCountry; }
    public function getPlateNumber(): ?string { return $this->plateNumber; }
    public function getLdpNumber(): ?string { return $this->ldpNumber; }
    public function getReviewing(): ?string { return $this->reviewing; }
    public function getFilterEnergy(): ?string { return $this->filterEnergy; }
    public function getFilterMake(): ?string { return $this->filterMake; }
    public function getFilterType(): ?string { return $this->filterType; }
    public function getQrCode(): ?string { return $this->qrCode; }
    public function isOnline(): ?bool { return $this->online; }
    public function isSold(): ?bool { return $this->sold; }
    public function isReserved(): ?bool { return $this->isReserved; }
    public function isRevDrain(): ?bool { return $this->revDrain; }
    public function isRevDistribution(): ?bool { return $this->revDistribution; }
    public function isRevBreaking(): ?bool { return $this->revBreaking; }
    public function isRevPneumatic(): ?bool { return $this->revPneumatic; }
    public function isRevComplete(): ?bool { return $this->revComplete; }
    public function isRevClutch(): ?bool { return $this->revClutch; }
    public function isRevBattery(): ?bool { return $this->revBattery; }
    public function isRevShockAbsorber(): ?bool { return $this->revShockAbsorber; }
    public function isInFront(): ?bool { return $this->infront; }
    public function getWebPathPicture(): ?string { return $this->webPathPicture; }
    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }

    public function isFavoriteByUser(): ?bool { return $this->isFavoriteByUser; }

    public function getCountFavorites(): ?int { return $this->countFavorites; }
    public function getVehicleInfos(): ?array { return $this->vehicleInfos; }
    public function getVideoId(): ?string { return $this->videoId; }

}