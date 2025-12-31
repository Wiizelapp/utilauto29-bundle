<?php
/**
 * VehicleListView.
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

namespace WiizelApp\UtilAuto29\Application\Vehicle;

final class VehicleListView
{
    public function __construct(
        private readonly int $id,
        private readonly string $version,
        private readonly string $brand,
        private readonly string $model,
        private readonly string $type,
        private readonly string $energy,
        private readonly string $year,
        private readonly ?int $vehicleApiVersion,
    ) {}

    public function getId(): int { return $this->id; }
    public function getVersion(): string { return $this->version; }
    public function getVehicleApiVersion(): ?int { return $this->vehicleApiVersion; }
    public function getBrand(): string { return $this->brand; }
    public function getModel(): string { return $this->model; }
    public function getType(): string { return $this->type; }
    public function getEnergy(): string { return $this->energy; }
    public function getYear(): string { return $this->year; }
}