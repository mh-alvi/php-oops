<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit436ccaaef5c95d5c1781f7b2f119ce5d
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

        spl_autoload_register(array('ComposerAutoloaderInit436ccaaef5c95d5c1781f7b2f119ce5d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit436ccaaef5c95d5c1781f7b2f119ce5d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit436ccaaef5c95d5c1781f7b2f119ce5d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
