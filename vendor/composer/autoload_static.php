<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8549628b65bd955a7ec4393760f5e3d5
{
    public static $files = array (
        '2d8efffb12e6db25d55f016aeb2d3c4c' => __DIR__ . '/../..' . '/inc/namespace.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PSR2R\\' => 6,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'AssetManagerFramework\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PSR2R\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig-r/psr2r-sniffer/PSR2R',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'AssetManagerFramework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wp-content/plugins/asset-manager-framework/inc',
        ),
    );

    public static $classMap = array (
        'AMFWordPress\\Factory' => __DIR__ . '/../..' . '/inc/class-factory.php',
        'AMFWordPress\\Provider' => __DIR__ . '/../..' . '/inc/class-provider.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8549628b65bd955a7ec4393760f5e3d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8549628b65bd955a7ec4393760f5e3d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8549628b65bd955a7ec4393760f5e3d5::$classMap;

        }, null, ClassLoader::class);
    }
}
