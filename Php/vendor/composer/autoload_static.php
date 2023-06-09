<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7347ab9c8462e7ce9158ea57f4474fb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Php\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Php\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7347ab9c8462e7ce9158ea57f4474fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7347ab9c8462e7ce9158ea57f4474fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7347ab9c8462e7ce9158ea57f4474fb::$classMap;

        }, null, ClassLoader::class);
    }
}
