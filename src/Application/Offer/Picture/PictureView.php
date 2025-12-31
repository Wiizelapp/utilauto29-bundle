<?php

declare(strict_types=1);

/**
 * PictureView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Offer\Picture;

final class PictureView
{
    public function __construct(
        public int $id,
        public ?string $filename,
        public ?string $filesize,
        public ?bool $cover,
        public ?int $pictureOrder,
        public string $webPath
    ){}
}