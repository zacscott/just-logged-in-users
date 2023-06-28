<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c444d043a2842578743e5c2db5820af
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JustLoggedInUsers\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JustLoggedInUsers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c444d043a2842578743e5c2db5820af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c444d043a2842578743e5c2db5820af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c444d043a2842578743e5c2db5820af::$classMap;

        }, null, ClassLoader::class);
    }
}
