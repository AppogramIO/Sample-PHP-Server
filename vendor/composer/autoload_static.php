<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31303a4f0c02842d9ab2653a8ac1924e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31303a4f0c02842d9ab2653a8ac1924e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31303a4f0c02842d9ab2653a8ac1924e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}