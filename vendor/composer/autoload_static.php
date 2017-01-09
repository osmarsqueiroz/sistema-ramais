<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2d5555fe5331658d10b33daa052a8ee
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Site\\' => 5,
        ),
        'P' => 
        array (
            'Projeto\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Site\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public_html',
        ),
        'Projeto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2d5555fe5331658d10b33daa052a8ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2d5555fe5331658d10b33daa052a8ee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
