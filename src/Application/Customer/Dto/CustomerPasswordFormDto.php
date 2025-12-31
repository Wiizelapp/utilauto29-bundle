<?php

declare(strict_types=1);

/**
 * CustomerCreatePasswordFormDto DTO.
 *
 * EI Yann Cario - 2025
 *
 * @category Interface
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Customer\Dto;

use App\Application\Customer\Command\CustomerPasswordCommand;

final class CustomerPasswordFormDto
{
    public function __construct(
        public ?int $id = null,
        public ?string $password = null,
    ) {}

    public function toCommand(): CustomerPasswordCommand
    {
        return new CustomerPasswordCommand($this->id, $this->password);
    }
}