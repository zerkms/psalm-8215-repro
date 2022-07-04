<?php
declare(strict_types=1);

namespace Zerkms;

use IteratorAggregate;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Finder\Finder;

final class Directory
{
    public function runme(): void
    {
        $files = $this->fetch();

        foreach ($files as $file) {
            echo $file->getPathname();
        }
    }

    /**
     * @psalm-return Finder&IteratorAggregate<array-key, SplFileInfo>
     */
    private function fetch(): IteratorAggregate
    {
        return new Finder();
    }
}
