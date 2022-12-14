<?php

declare(strict_types=1);

namespace Ghostwriter\SemanticVersion\Tests\Unit;

use Ghostwriter\SemanticVersion\Version;

/**
 * @coversDefaultClass \Ghostwriter\SemanticVersion\Version
 *
 * @internal
 *
 * @small
 */
final class VersionTest extends AbstractTestCase
{
    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getValue
     */
    public function testConstruct(): void
    {
        $version = new Version('');

        self::assertEmpty($version->getValue());
    }

    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::getValue
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getMinor
     */
    public function testGetMinor(): void
    {
        $version = new Version('');
        self::assertSame(0, $version->getMinor()->getValue());
    }

    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getValue
     * @covers \Ghostwriter\SemanticVersion\Version::parse
     */
    public function testParse(): void
    {
        $version = Version::parse('');
        self::assertEmpty($version->getValue());
    }

    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getValue
     */
    public function testGetValue(): void
    {
        $version = new Version('');
        self::assertEmpty($version->getValue());
    }

    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::getValue
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getPatch
     */
    public function testGetPatch(): void
    {
        $version = new Version('');
        self::assertSame(0, $version->getPatch()->getValue());
    }

    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::getValue
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getMajor
     */
    public function testGetMajor(): void
    {
        $version = new Version('');
        self::assertSame(0, $version->getMajor()->getValue());
    }

    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::getValue
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getBuild
     */
    public function testGetBuild(): void
    {
        $version = new Version('');
        self::assertEmpty($version->getBuild()->getValue());
    }

    /**
     * @covers \Ghostwriter\SemanticVersion\Value\BuildVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MajorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\MinorVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PatchVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::__construct
     * @covers \Ghostwriter\SemanticVersion\Value\PreReleaseVersion::getValue
     * @covers \Ghostwriter\SemanticVersion\Version::__construct
     * @covers \Ghostwriter\SemanticVersion\Version::getPrerelease
     */
    public function testGetPrerelease(): void
    {
        $version = new Version('');
        self::assertEmpty($version->getPrerelease()->getValue());
    }
}
