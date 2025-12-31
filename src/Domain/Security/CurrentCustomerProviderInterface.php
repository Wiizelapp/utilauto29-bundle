<?php

declare(strict_types=1);

/**
 * CurrentCustomerProviderInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Security;

use App\Domain\Customer\Entity\Customer;

interface CurrentCustomerProviderInterface
{
    public function getCustomer(): ?Customer;
}