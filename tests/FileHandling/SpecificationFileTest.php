<?php

declare(strict_types=1);

namespace OpenApiMerge\Tests\FileHandling;

use cebe\openapi\SpecObjectInterface;
use OpenApiMerge\FileHandling\File;
use OpenApiMerge\FileHandling\SpecificationFile;
use PHPUnit\Framework\TestCase;

class SpecificationFileTest extends TestCase
{
    public function testGetter(): void
    {
        $stubSpecObject = $this->createStub(SpecObjectInterface::class);
        $fileStub       = new File('example.file');
        $sut            = new SpecificationFile($fileStub, $stubSpecObject);

        self::assertSame($fileStub, $sut->getFile());
        self::assertSame($stubSpecObject, $sut->getOpenApiSpecificationObject());
    }
}