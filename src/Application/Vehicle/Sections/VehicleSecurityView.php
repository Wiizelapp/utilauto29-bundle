<?php
/**
 * VehicleSecurityView.
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

readonly final class VehicleSecurityView
{
    public function __construct(
        private ?string $abs,
        private ?string $esp,
        private ?string $airbagsFront,
        private ?string $airbagsSide,
        private ?string $airbagsCurtain,
        private ?string $laneDepartureWarning,
        private ?string $laneKeepingAssist,
        private ?string $emergencyBraking,
        private ?string $blindSpotMonitoring,
        private ?string $trafficSignRecognition,
        private ?string $adaptiveCruiseControl,
        private ?string $fatigueDetection,
        private ?string $autoHighBeam,
        private ?string $nightVision,
        private ?string $alarmSystem,
        private ?string $immobilizer
    ) {}

    public function getAbs(): ?string { return $this->abs; }
    public function getEsp(): ?string { return $this->esp; }
    public function getAirbagsFront(): ?string { return $this->airbagsFront; }
    public function getAirbagsSide(): ?string { return $this->airbagsSide; }
    public function getAirbagsCurtain(): ?string { return $this->airbagsCurtain; }
    public function getLaneDepartureWarning(): ?string { return $this->laneDepartureWarning; }
    public function getLaneKeepingAssist(): ?string { return $this->laneKeepingAssist; }
    public function getEmergencyBraking(): ?string { return $this->emergencyBraking; }
    public function getBlinSpotMonitoring(): ?string { return $this->blindSpotMonitoring; }
    public function getTrafficSignRecognition(): ?string { return $this->trafficSignRecognition; }
    public function getAdaptiveCruiseControl(): ?string { return $this->adaptiveCruiseControl; }
    public function getFatigueDetection(): ?string { return $this->fatigueDetection; }
    public function getAutoHighBeam(): ?string { return $this->autoHighBeam; }
    public function getNightVision(): ?string { return $this->nightVision; }
    public function getAlarmSystem(): ?string { return $this->alarmSystem; }
    public function getImmobilizer(): ?string { return $this->immobilizer; }
}