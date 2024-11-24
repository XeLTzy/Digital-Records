<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit535a4d24e4f091abd936ae4ce2f52799
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

        spl_autoload_register(array('ComposerAutoloaderInit535a4d24e4f091abd936ae4ce2f52799', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit535a4d24e4f091abd936ae4ce2f52799', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit535a4d24e4f091abd936ae4ce2f52799::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}