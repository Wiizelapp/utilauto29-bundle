<?php
/**
 * VehicleMultimediaView.
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

readonly class VehicleMultimediaView
{
    public function __construct(
        private ?string $bluetooth,
        private ?string $usbPorts,
        private ?string $auxInput,
        private ?string $cdPlayer,
        private ?string $digitalRadio,
        private ?string $androidAuto,
        private ?string $appleCarPlay,
        private ?string $voiceControl,
        private ?string $touchscreen,
        private ?string $navigationSystem,
        private ?string $soundSystemBrand
    ) {}

    public function bluetooth(): ?string { return $this->bluetooth; }
    public function usbPorts(): ?string { return $this->usbPorts; }
    public function auxInput(): ?string { return $this->auxInput; }
    public function cdPlayer(): ?string { return $this->cdPlayer; }
    public function digitalRadio(): ?string { return $this->digitalRadio; }
    public function androidAuto(): ?string { return $this->androidAuto; }
    public function appleCarPlay(): ?string { return $this->appleCarPlay; }
    public function voiceControl(): ?string { return $this->voiceControl; }
    public function touchscreen(): ?string { return $this->touchscreen; }
    public function navigationSystem(): ?string { return $this->navigationSystem; }
    public function soundSystemBrand(): ?string { return $this->soundSystemBrand; }
}