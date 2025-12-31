<?php

declare(strict_types=1);

/**
 * CustomerMailServiceInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Customer\Service;

use App\Application\CustomerToken\Dto\CustomerTokenView;

interface CustomerMailServiceInterface
{
    public function sendInvit(CustomerTokenView $dto): void;
    public function sendResetPassword(CustomerTokenView $dto): void;
    public function sendMessage(): void;
    public function sendDocuments(string $mail, array $attachment): void;
}