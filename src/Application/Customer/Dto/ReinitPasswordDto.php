<?php
/**
 * ReinitPasswordDto.
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

namespace WiizelApp\UtilAuto29\Application\Customer\Dto;

class ReinitPasswordDto
{
    public function __construct(
        public ?int $code = null,
        public ?string $password = null,
    ){}
}