<?php

declare(strict_types=1);

/**
 * VehicleCommercialDataView.
 *
 * DTO For Database From Wiizel Software
 * EI Yann Cario - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Vehicle\Sections;

final class VehicleCommercialDataView
{
    public function __construct(
        public ?string $commercialDate,
        public ?string $price,
        public ?string $endCommercialDate,
        public ?string $guaranteeTime,
        public ?string $revisionIntervalKm,
        public ?string $revisionIntervalMaxMonth,
    ){}

    public static function fromArray(array $data): self
    {
        return new self(
            commercialDate: $data['commercialDate'] ?? '',
            price: $data['price'] ?? '',
            endCommercialDate: $data['endCommercialDate'] ?? '',
            guaranteeTime: $data['guaranteeTime'] ?? '',
            revisionIntervalKm: $data['revisionIntervalKm'] ?? '',
            revisionIntervalMaxMonth: $data['revisionIntervalMaxMonth'] ?? ''
        );
    }

}