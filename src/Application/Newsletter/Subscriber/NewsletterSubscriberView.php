<?php
/**
 * NewsletterSubscriberView.
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

namespace WiizelApp\UtilAuto29\Application\Newsletter\Subscriber;

use DateTimeImmutable;

final class NewsletterSubscriberView
{
    public function __construct(
        private int $id,
        private string $mail,
        private bool $isActivated,
        private string $token,
        private string $mailHash,
        private DateTimeImmutable $expiredAt,
    ){}

    public function getId(): int { return $this->id; }
    public function getMail(): string { return $this->mail; }
    public function isActivated(): bool { return $this->isActivated; }
    public function getToken(): string { return $this->token; }
    public function getMailHash(): string { return $this->mailHash; }
    public function getExpiredAt(): DateTimeImmutable { return $this->expiredAt; }
}