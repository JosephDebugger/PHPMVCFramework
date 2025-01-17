<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc117663be8fb0f40049f22dffaec434f
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

        spl_autoload_register(array('ComposerAutoloaderInitc117663be8fb0f40049f22dffaec434f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc117663be8fb0f40049f22dffaec434f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc117663be8fb0f40049f22dffaec434f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
