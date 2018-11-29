<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ffda6fdd4e2ad8742b2eb578ff120cd
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vnvmedia\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vnvmedia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ffda6fdd4e2ad8742b2eb578ff120cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ffda6fdd4e2ad8742b2eb578ff120cd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}