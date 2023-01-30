<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd69af58899102cb10c64a9483b40d96a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'P' => 
        array (
            'PlugAnalistics\\' => 15,
        ),
        'A' => 
        array (
            'Analistics\\Customers\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'PlugAnalistics\\' => 
        array (
            0 => __DIR__ . '/..' . '/analistics/analistics-data-integrations/src',
        ),
        'Analistics\\Customers\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd69af58899102cb10c64a9483b40d96a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd69af58899102cb10c64a9483b40d96a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd69af58899102cb10c64a9483b40d96a::$classMap;

        }, null, ClassLoader::class);
    }
}
