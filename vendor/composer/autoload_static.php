<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70834d71f11b0cf3b3f4071761f13b66
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Matrix\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Matrix\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/matrix/classes/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70834d71f11b0cf3b3f4071761f13b66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70834d71f11b0cf3b3f4071761f13b66::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70834d71f11b0cf3b3f4071761f13b66::$classMap;

        }, null, ClassLoader::class);
    }
}
