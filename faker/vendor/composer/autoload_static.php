<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c4aeafa732d5ede6bf14ba225a34ce7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c4aeafa732d5ede6bf14ba225a34ce7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c4aeafa732d5ede6bf14ba225a34ce7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c4aeafa732d5ede6bf14ba225a34ce7::$classMap;

        }, null, ClassLoader::class);
    }
}
