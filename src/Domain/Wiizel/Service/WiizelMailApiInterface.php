<?php

declare(strict_types=1);

/**
 * WiizelMailApiInterface
 *
 * Class INTERFACE permettant de se connecter au service Wiizel APP
 * EI Yann Cario & Wiizel Software - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Wiizel\Service;

interface WiizelMailApiInterface
{
    /**
     * emails is an array at format ['to' => 'mail@mail.fr', 'from' => 'mail@mail.fr']
     *
     * @param array $emails
     * @param string $subject
     * @param string $template
     * @param string $template_data
     * @param array|null $attachments
     * @param bool $queue
     * @return array
     */
    public function sendMailToApi(array $emails, string $subject, string $template, string $template_data, ?array $attachments = null, bool $queue = false): array;
    public function sendMailWithAttachment(array $emails, string $subject, string $template, string $template_data, string $attachment_path, bool $queue = false): array;
    public function getAll(): array;
    public function retryFailed(int $id): array;
    public function oneDelete(int $id): array;

}