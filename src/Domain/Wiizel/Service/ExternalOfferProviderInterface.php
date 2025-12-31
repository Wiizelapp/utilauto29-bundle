<?php
/**
 * ExternalOfferProviderInterface.
 *
 * Wiizel App - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Wiizel Softwares <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

declare(strict_types=1);

namespace WiizelApp\UtilAuto29\Domain\Wiizel\Service;

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