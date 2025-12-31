<?php

declare(strict_types=1);

/**
 * OfferCardView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Offer;

use Shared\Domain\Offer\OfferStateEnum;

final class OfferCardView implements \JsonSerializable
{
    public function __construct(
        private int $id,
        private ?\DateTimeImmutable $createdAt,
        private ?string $reference,
        private ?string $slug,
        private ?OfferStateEnum $offerState,
        private ?bool $sold,
        private ?bool $reserved,
        private ?string $guarantee,
        private ?string $title,
        private float|string $price,
        private ?string $webPathPicture,
        private ?string $version,
        private ?string $modelName,
        private ?string $makeName,
        private ?string $kilometers,
        private ?string $numberDoors,
        private ?string $gearBox,
        private ?string $energy,
        private ?string $power,
        private ?bool $inFront,
        private ?string $issuance,
        public ?int $countVisits,
        public ?bool $online,
        private ?bool $isFavoriteByUser = null
    ){}

    public function getId(): int { return $this->id; }
    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function getReference(): ?string { return $this->reference; }
    public function getSlug(): ?string { return $this->slug; }
    public function getSold(): ?bool { return $this->sold; }
    public function getReserved(): ?bool { return $this->reserved; }
    public function getGuarantee(): ?string { return $this->guarantee; }
    public function getTitle(): ?string { return $this->title; }
    public function getPrice(): float|string { return $this->price; }
    public function getWebPathPicture(): ?string { return $this->webPathPicture; }
    public function getVersion(): ?string { return $this->version; }
    public function getModelName(): ?string { return $this->modelName; }
    public function getMakeName(): ?string { return $this->makeName; }
    public function getKilometers(): ?string { return $this->kilometers; }
    public function getNumberDoors(): ?string { return $this->numberDoors; }
    public function getGearBox(): ?string { return $this->gearBox; }
    public function getEnergy(): ?string { return $this->energy; }
    public function getPower(): ?string { return $this->power; }
    public function isInFront(): ?bool { return $this->inFront; }
    public function getIssuance(): ?string { return $this->issuance; }
    public function isFavoriteByUser(): ?bool { return $this->isFavoriteByUser; }
    public function getOfferState(): ?OfferStateEnum { return $this->offerState; }

    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'createdAt' => $this->createdAt?->format('Y-m-d H:i:s'),
            'reference' => $this->reference,
            'slug' => $this->slug,
            'sold' => $this->sold,
            'reserved' => $this->reserved,
            'guarantee' => $this->guarantee,
            'title' => $this->title,
            'price' => $this->price,
            'webPathPicture' => $this->webPathPicture,
            'version' => $this->version,
            'modelName' => $this->modelName,
            'makeName' => $this->makeName,
            'kilometers' => $this->kilometers,
            'numberDoors' => $this->numberDoors,
            'gearBox' => $this->gearBox,
            'energy' => $this->energy,
            'power' => $this->power,
            'inFront' => $this->inFront,
            'issuance' => $this->issuance,
            'countVisits' => $this->countVisits,
            'offerState' => $this->offerState,
        ];
    }
}