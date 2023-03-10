<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b1e5537bff41226c70c86b62f1636a1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lunedev66\\Tracingpost\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lunedev66\\Tracingpost\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b1e5537bff41226c70c86b62f1636a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b1e5537bff41226c70c86b62f1636a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b1e5537bff41226c70c86b62f1636a1::$classMap;

        }, null, ClassLoader::class);
    }
}
