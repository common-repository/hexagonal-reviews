<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90b27a0dce1d62a80ca0fed8c2bce224
{
    public static $files = array (
        '23c18046f52bef3eea034657bafda50f' => __DIR__ . '/..' . '/symfony/polyfill-php81/bootstrap.php',
        'e39a8b23c42d4e1452234d762b03835a' => __DIR__ . '/..' . '/ramsey/uuid/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php81\\' => 23,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
            'Ramsey\\Collection\\' => 18,
        ),
        'P' => 
        array (
            'Psr\\EventDispatcher\\' => 20,
            'Psr\\Container\\' => 14,
        ),
        'H' => 
        array (
            'HexagonalReviews\\' => 17,
        ),
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php81\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php81',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Ramsey\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/collection/src',
        ),
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'HexagonalReviews\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ReturnTypeWillChange' => __DIR__ . '/..' . '/symfony/polyfill-php81/Resources/stubs/ReturnTypeWillChange.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90b27a0dce1d62a80ca0fed8c2bce224::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90b27a0dce1d62a80ca0fed8c2bce224::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90b27a0dce1d62a80ca0fed8c2bce224::$classMap;

        }, null, ClassLoader::class);
    }
}
