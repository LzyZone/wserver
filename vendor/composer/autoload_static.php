<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c324d25a2fc8e5f9140bfec12a81ab2
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'library\\servers\\' => 16,
            'library\\' => 8,
        ),
        'f' => 
        array (
            'factory\\' => 8,
        ),
        'b' => 
        array (
            'bin\\' => 4,
        ),
        'V' => 
        array (
            'Vendor\\Namespace\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'library\\servers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library/servers',
        ),
        'library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library',
        ),
        'factory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/factory',
        ),
        'bin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/bin',
        ),
        'Vendor\\Namespace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wserver',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c324d25a2fc8e5f9140bfec12a81ab2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c324d25a2fc8e5f9140bfec12a81ab2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
