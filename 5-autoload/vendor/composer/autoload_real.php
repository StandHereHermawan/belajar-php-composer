<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9d4df6e8c2d5b8b2b44378b34bd4b2df
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

        spl_autoload_register(array('ComposerAutoloaderInit9d4df6e8c2d5b8b2b44378b34bd4b2df', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9d4df6e8c2d5b8b2b44378b34bd4b2df', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9d4df6e8c2d5b8b2b44378b34bd4b2df::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
