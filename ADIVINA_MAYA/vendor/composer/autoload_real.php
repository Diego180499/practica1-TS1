<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcf1f81c5d3a81a2c4cbe56ef348cc603
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

        spl_autoload_register(array('ComposerAutoloaderInitcf1f81c5d3a81a2c4cbe56ef348cc603', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcf1f81c5d3a81a2c4cbe56ef348cc603', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcf1f81c5d3a81a2c4cbe56ef348cc603::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
