<?php

declare(strict_types=1);

/**
 * OfferUpdateView.
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

use Shared\Application\Offer\Picture\PictureView;
use Shared\Application\Vehicle\Sections\VehicleDimensionsView;
use Shared\Application\Vehicle\Sections\VehicleEngineView;
use Shared\Application\Vehicle\Sections\VehicleVersionView;
use Shared\Domain\Offer\OfferStateEnum;

class OfferUpdateView
{
    /**
     * @param int|null $id
     * @param string|null $title
     * @param OfferStateEnum|null $offerState
     * @param string|null $description
     * @param float|null $price
     * @param string|null $reference
     * @param string|null $kilometers
     * @param string|null $guarantee
     * @param int|null $critair
     * @param string|null $issuance
     * @param string|null $handsNumber
     * @param string|null $plateCountry
     * @param string|null $plateNumber
     * @param string|null $ldpNumber
     * @param string|null $reviewing
     * @param string|null $filterEnergy
     * @param string|null $filterMake
     * @param string|null $filterType
     * @param string|null $qrCode
     * @param bool|null $online
     * @param bool|null $atDateToday
     * @param bool|null $sold
     * @param bool|null $isReserved
     * @param bool|null $revDrain
     * @param bool|null $revDistribution
     * @param bool|null $revBreaking
     * @param bool|null $revPneumatic
     * @param bool|null $revComplete
     * @param bool|null $revClutch
     * @param bool|null $revBattery
     * @param bool|null $revShockAbsorber
     * @param bool|null $infront
     * @param string[] $vehicleInfos
     * @param VehicleVersionView|null $vehicle
     * @param VehicleEngineView|null $vehicleEngine
     * @param VehicleDimensionsView|null $vehicleDimensions
     * @param array|null $equipments
     * @param mixed|null $pictureFiles
     * @param string|null $videoId
     * @param array $pictures
     */
    public function __construct(
        public ?int $id = null,
        public ?string $title = null,
        public ?OfferStateEnum $offerState = null,
        public ?string $description = null,
        public ?float $price = null,
        public ?string $reference = null,
        public ?string $kilometers = null,
        public ?string $guarantee = null,
        public ?int $critair = null,
        public ?string $issuance = null,
        public ?string $handsNumber = null,
        public ?string $plateCountry = null,
        public ?string $plateNumber = null,
        public ?string $ldpNumber = null,
        public ?string $reviewing = null,
        public ?string $filterEnergy = null,
        public ?string $filterMake = null,
        public ?string $filterType = null,
        public ?string $qrCode = null,
        public ?bool $online = null,
        public ?bool $atDateToday = null,
        public ?bool $sold = null,
        public ?bool $isReserved = null,
        public ?bool $revDrain = null,
        public ?bool $revDistribution = null,
        public ?bool $revBreaking = null,
        public ?bool $revPneumatic = null,
        public ?bool $revComplete = null,
        public ?bool $revClutch = null,
        public ?bool $revBattery = null,
        public ?bool $revShockAbsorber = null,
        public ?bool $infront = null,
        public ?array $vehicleInfos = [],
        public ?VehicleVersionView $vehicle = null,
        public ?VehicleEngineView $vehicleEngine = null,
        public ?VehicleDimensionsView $vehicleDimensions = null,
        public ?array $equipments = [],
        public mixed $pictureFiles = null,
        public ?string $videoId = null,
        /** @var PictureView */
        public array $pictures = []
    ) {}

    public function _toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'offerState' => $this->offerState,
            'description' => $this->description,
            'price' => $this->price,
            'reference' => $this->reference,
            'kilometers' => $this->kilometers,
            'guarantee' => $this->guarantee,
            'critair' => $this->critair,
            'issuance' => $this->issuance,
            'handsNumber' => $this->handsNumber,
            'plateCountry' => $this->plateCountry,
            'plateNumber' => $this->plateNumber,
            'ldpNumber' => $this->ldpNumber,
            'reviewing' => $this->reviewing,
            'filterEnergy' => $this->filterEnergy,
            'filterMake' => $this->filterMake,
            'filterType' => $this->filterType,
            'qrCode' => $this->qrCode,
            'online' => $this->online,
            'atDateToday' => $this->atDateToday,
            'sold' => $this->sold,
            'isReserved' => $this->isReserved,
            'revDrain' => $this->revDrain,
            'revDistribution' => $this->revDistribution,
            'revBreaking' => $this->revBreaking,
            'revPneumatic' => $this->revPneumatic,
            'revComplete' => $this->revComplete,
            'revClutch' => $this->revClutch,
            'revBattery' => $this->revBattery,
            'revShockAbsorber' => $this->revShockAbsorber,
            'infront' => $this->infront,
            'vehicleInfos' => $this->vehicleInfos,
            'videoId' => $this->videoId,
        ];
    }
}