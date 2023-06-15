<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf00c1cc741b2dc76647a1a94c6e40e7a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Clases\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf00c1cc741b2dc76647a1a94c6e40e7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf00c1cc741b2dc76647a1a94c6e40e7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf00c1cc741b2dc76647a1a94c6e40e7a::$classMap;

        }, null, ClassLoader::class);
    }
}
