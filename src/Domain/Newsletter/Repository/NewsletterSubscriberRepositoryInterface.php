<?php

declare(strict_types=1);

/**
 * NewsletterSubscriberRepositoryInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Newsletter\Repository;

use App\Domain\Newsletter\Entity\NewsletterSubscriber;
use Knp\Component\Pager\Pagination\PaginationInterface;

interface NewsletterSubscriberRepositoryInterface
{
    public function paginate(int $page, int $limit): PaginationInterface;
    public function save(?object $entity = null): void;
    public function delete(object $entity): void;
    public function add(NewsletterSubscriber $newsletterSubscriber): void;
}