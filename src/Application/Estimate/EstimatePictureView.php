<?php
/**
 * EstimatePictureView.
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

namespace WiizelApp\UtilAuto29\Application\Estimate;

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