<?php

declare(strict_types=1);

/**
 * TokenManagerInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\CustomerToken\Service;

use App\Domain\Customer\Entity\Customer;
use App\Domain\CustomerToken\Entity\CustomerToken;
use App\Domain\CustomerToken\TokenType;

interface CustomerTokenManagerInterface
{
    public function createToken(Customer $customer, TokenType $type): ?CustomerToken;
    public function createTokenForCustomer(Customer $customer, TokenType $type, int $time = 15): ?CustomerToken;
    public function validateToken(CustomerToken $token, TokenType $expectedType): bool;
    public function consumeToken(CustomerToken $token): void;
}