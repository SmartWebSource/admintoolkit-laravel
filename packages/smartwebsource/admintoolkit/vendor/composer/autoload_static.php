<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1183a1a8f28572571bfd77a79cf1100f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Smartwebsource\\Admintoolkit\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Smartwebsource\\Admintoolkit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/smartwebsource/admintoolkit/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1183a1a8f28572571bfd77a79cf1100f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1183a1a8f28572571bfd77a79cf1100f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1183a1a8f28572571bfd77a79cf1100f::$classMap;

        }, null, ClassLoader::class);
    }
}
