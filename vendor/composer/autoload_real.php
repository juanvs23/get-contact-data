<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit12e57e82157ebc726e3106ac0b67e77d
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

        spl_autoload_register(array('ComposerAutoloaderInit12e57e82157ebc726e3106ac0b67e77d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit12e57e82157ebc726e3106ac0b67e77d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit12e57e82157ebc726e3106ac0b67e77d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
