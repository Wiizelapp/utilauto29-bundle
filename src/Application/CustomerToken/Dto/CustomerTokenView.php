<?php

declare(strict_types=1);

/**
 * CustomerTokenListView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\CustomerToken\Dto;

use App\Domain\CustomerToken\TokenType;
use Shared\Application\Customer\Dto\CustomerView;

final class CustomerTokenView
{
    public function __construct(
      public int $id,
      public \DateTimeImmutable $expiresAt,
      public TokenType $type,
      public CustomerView $customerView,
      public ?\DateTimeImmutable $consumedAt = null,
      public ?string $token = null
    ){}
}