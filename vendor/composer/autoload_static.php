<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd7247a397d6555888046a15ca6467b0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Potherca\\Scanner\\' => 17,
            'PhpMyAdmin\\SqlParser\\' => 21,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Potherca\\Scanner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PhpMyAdmin\\SqlParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmyadmin/sql-parser/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPSQLParser\\' => 
            array (
                0 => __DIR__ . '/..' . '/greenlion/php-sql-parser/src',
            ),
        ),
        'A' => 
        array (
            'Analog' => 
            array (
                0 => __DIR__ . '/..' . '/analog/analog/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd7247a397d6555888046a15ca6467b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd7247a397d6555888046a15ca6467b0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdd7247a397d6555888046a15ca6467b0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
