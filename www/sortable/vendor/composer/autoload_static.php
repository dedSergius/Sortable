<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd590d324fb379c1d6e13f19a7fc869d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd590d324fb379c1d6e13f19a7fc869d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd590d324fb379c1d6e13f19a7fc869d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}