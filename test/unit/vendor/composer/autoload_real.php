<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd6b1f2a4527f6e7ba889215fc8b8d00f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd6b1f2a4527f6e7ba889215fc8b8d00f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd6b1f2a4527f6e7ba889215fc8b8d00f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd6b1f2a4527f6e7ba889215fc8b8d00f::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitd6b1f2a4527f6e7ba889215fc8b8d00f::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequired6b1f2a4527f6e7ba889215fc8b8d00f($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequired6b1f2a4527f6e7ba889215fc8b8d00f($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}