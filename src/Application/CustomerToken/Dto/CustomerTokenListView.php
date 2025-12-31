<?php

/**
 * CustomerTokenListView.
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

namespace WiizelApp\UtilAuto29\Application\CustomerToken\Dto;

use App\Domain\CustomerToken\TokenType;
use WiizelApp\UtilAuto29\Application\Customer\Dto\CustomerView;

class CustomerTokenListView
{
    public function __construct(
        public int $id,
        public \DateTimeImmutable $expiredAt,
        public TokenType $type,
        public CustomerView $customerView,
        public ?\DateTimeImmutable $consumedAt = null,
        public ?string $token = null
    ) {
    }
}