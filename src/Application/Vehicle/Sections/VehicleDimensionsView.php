<?php
/**
 * VehicleDimensionsView.
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

namespace WiizelApp\UtilAuto29\Application\Vehicle\Sections;

final class VehicleDimensionsView
{
    public function __construct(
        public ?string $lengthInMeter,
        public ?string $widthWithoutMirrorInMeter,
        public ?string $heightInMeter,
        public ?string $wheelBaseInMeter,
        public ?string $trunkVolumeInLitersMax,
        public ?string $trunkVolumeInLitersMin,
        public ?string $numberOfDoors,
        public ?string $numberOfPlace,
        public ?string $emptyWeightInKg,
        public ?int $id = null,
    ){}

    public static function fromArray(array $data): self
    {
        return new self(
            lengthInMeter: $data['lengthInMeter'] ?? '',
            widthWithoutMirrorInMeter: $data['widthWithoutMirrorInMeter'] ?? '',
            heightInMeter: $data['heightInMeter'] ?? '',
            wheelBaseInMeter: $data['wheelBaseInMeter'] ?? '',
            trunkVolumeInLitersMax: $data['trunkVolumeInLitersMax'] ?? '',
            trunkVolumeInLitersMin: $data['trunkVolumeInLitersMin'] ?? '',
            numberOfDoors: $data['numberOfDoors'] ?? '',
            numberOfPlace: $data['numberOfPlace'] ?? '',
            emptyWeightInKg: $data['emptyWeightInKg'] ?? '',
            id: $data['id'] ?? null,

        );
    }
}