<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0fd59138118ac57f94de952c86b50d0
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0fd59138118ac57f94de952c86b50d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0fd59138118ac57f94de952c86b50d0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
