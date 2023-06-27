<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4dc081084d663d76d8c87a98dcb1a9e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite4dc081084d663d76d8c87a98dcb1a9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4dc081084d663d76d8c87a98dcb1a9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4dc081084d663d76d8c87a98dcb1a9e::$classMap;

        }, null, ClassLoader::class);
    }
}
