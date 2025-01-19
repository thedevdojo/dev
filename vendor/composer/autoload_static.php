<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13175ddfe0acf462fc8058c8023a6aaf
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dev\\Blog\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dev\\Blog\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit13175ddfe0acf462fc8058c8023a6aaf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13175ddfe0acf462fc8058c8023a6aaf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13175ddfe0acf462fc8058c8023a6aaf::$classMap;

        }, null, ClassLoader::class);
    }
}
