<?php

declare(strict_types=1);

/**
 * EstimatePictureView.
 *
 * @category Domain
 * @package  utilauto29/shared
 * @author   Yann <yann@proaxive.fr>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://utilauto29.fr
 */

namespace Shared\Application\Estimate;

final class EstimatePictureView
{
    public function __construct(
        private int $id,
        private string $filename,
        private string $filesize,
        private string $path
    ){}

    public function getId(): int { return $this->id; }
    public function getFilename(): string { return $this->filename; }
    public function getFilesize(): string { return $this->filesize; }
    public function getPath(): string { return $this->path; }
}