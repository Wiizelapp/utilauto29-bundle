<?php

declare(strict_types=1);

/**
 * ExternalOfferProviderInterface
 *
 * Class permettant de se connecter au service Wiizel APP
 * EI Yann Cario & Wiizel Software - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Wiizel\Service;

interface ExternalOfferProviderInterface
{
    /**
     * Permet de récupérer une ressource depuis l'API
     *
     * @param string $resource
     * @return array
     */
    public function getResource(string $resource): array;

    /**
     * Permet de récupérer une ressource paginée
     *
     * @param string $resource
     * @param int $perPage
     * @param int $page
     * @return array
     */
    public function getResourcesPaginate(string $resource, int $perPage = 10, int $page = 1): array;
}