<?php

declare(strict_types=1);

/**
 * NewsletterMailServiceInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Newsletter\Service;



use App\Application\Newsletter\Dto\NewsletterSubscriberView;
use App\Domain\Newsletter\Entity\NewsletterSubscriber;
use App\Domain\Offer\Entity\Offer;

interface NewsletterMailServiceInterface
{
    public function send(NewsletterSubscriberView $newsletterSubscriber, Offer|array $offers, ?array $options = []): void;
    public function signup(NewsletterSubscriber $newsletterSubscriber): void;
    public function sendOneWithAttachment(string $mail, array $attachment): void;
}