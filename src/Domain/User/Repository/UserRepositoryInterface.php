<?php

declare(strict_types=1);

/**
 * UserRepositoryInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\User\Repository;

interface UserRepositoryInterface
{
    public function paginate(int $page, int $limit);
    public function save(?object $entity = null): void;
}