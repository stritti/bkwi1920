<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit043f82c2ea6e770ca62c9764f8440818
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit043f82c2ea6e770ca62c9764f8440818::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit043f82c2ea6e770ca62c9764f8440818::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
