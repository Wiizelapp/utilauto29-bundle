<?php

declare(strict_types=1);

/**
 * TransactionManagerInterface.
 *
 * Abstraction de gestion des transactions
 * EI Yann Cario - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Domain\Service\Doctrine;

interface TransactionManagerInterface
{
    /**
     * Exécute une fonction dans une transaction.
     *
     * @template T
     * @param callable():T $callback
     * @return mixed
     */
    public function transactional(callable $callback): mixed;
}