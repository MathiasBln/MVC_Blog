<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2ac1669e528b202f6be581960af8b20
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Root\\Html\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Root\\Html\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2ac1669e528b202f6be581960af8b20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2ac1669e528b202f6be581960af8b20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2ac1669e528b202f6be581960af8b20::$classMap;

        }, null, ClassLoader::class);
    }
}