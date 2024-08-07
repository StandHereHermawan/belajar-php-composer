<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d4df6e8c2d5b8b2b44378b34bd4b2df
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AriefWorks\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AriefWorks\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d4df6e8c2d5b8b2b44378b34bd4b2df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d4df6e8c2d5b8b2b44378b34bd4b2df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d4df6e8c2d5b8b2b44378b34bd4b2df::$classMap;

        }, null, ClassLoader::class);
    }
}
