<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite92b4ab6987f526f687cd36ed02e1d55
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite92b4ab6987f526f687cd36ed02e1d55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite92b4ab6987f526f687cd36ed02e1d55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite92b4ab6987f526f687cd36ed02e1d55::$classMap;

        }, null, ClassLoader::class);
    }
}
