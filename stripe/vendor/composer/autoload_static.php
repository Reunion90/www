<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f29d122c8134ce2f2e8c56b11ae6b30
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f29d122c8134ce2f2e8c56b11ae6b30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f29d122c8134ce2f2e8c56b11ae6b30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}