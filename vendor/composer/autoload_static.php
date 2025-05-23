<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc976a19842bc32c8d29fb4194debd8b7
{
    public static $files = array (
        '88254829cb0eed057c30eaabb6d8edc4' => __DIR__ . '/..' . '/amphp/amp/src/functions.php',
        '429ae5f14a13a9076791c19422e10996' => __DIR__ . '/..' . '/amphp/amp/src/Future/functions.php',
        'c8601a4144b50a7b548da082c89c4dc1' => __DIR__ . '/..' . '/amphp/amp/src/Internal/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Revolt\\' => 7,
        ),
        'A' => 
        array (
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Revolt\\' => 
        array (
            0 => __DIR__ . '/..' . '/revolt/event-loop/src',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc976a19842bc32c8d29fb4194debd8b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc976a19842bc32c8d29fb4194debd8b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc976a19842bc32c8d29fb4194debd8b7::$classMap;

        }, null, ClassLoader::class);
    }
}
