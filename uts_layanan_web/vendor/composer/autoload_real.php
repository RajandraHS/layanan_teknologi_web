<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit28ec1aa4ff9fa1adef86e30f41e4e0e9
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

        spl_autoload_register(array('ComposerAutoloaderInit28ec1aa4ff9fa1adef86e30f41e4e0e9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit28ec1aa4ff9fa1adef86e30f41e4e0e9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit28ec1aa4ff9fa1adef86e30f41e4e0e9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
