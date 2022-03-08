<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9940f95bcc661befeedbb3f754698d6f
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Encriss\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Encriss\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9940f95bcc661befeedbb3f754698d6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9940f95bcc661befeedbb3f754698d6f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9940f95bcc661befeedbb3f754698d6f::$classMap;

        }, null, ClassLoader::class);
    }
}