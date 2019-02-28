<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c9a4c2fa633b19fd7856e91c5cb542e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c9a4c2fa633b19fd7856e91c5cb542e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c9a4c2fa633b19fd7856e91c5cb542e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
