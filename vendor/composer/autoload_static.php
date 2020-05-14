<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd23208e17905f7f8dec1681a626a5d38
{
    public static $files = array (
        '6df254737b22ea0203f28b20a7462f0d' => __DIR__ . '/..' . '/ant-service/library/core/Initialize.php',
        'a25f7570f5b960c3d90882bf965ab97e' => __DIR__ . '/..' . '/ant-service/library/core/QuickFun.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AntService\\Src\\Output\\' => 22,
            'AntService\\Src\\Interfaces\\' => 26,
            'AntService\\Src\\DataBase\\' => 24,
            'AntService\\Src\\Common\\' => 22,
            'AntService\\Command\\' => 19,
            'AntService\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AntService\\Src\\Output\\' => 
        array (
            0 => __DIR__ . '/..' . '/ant-service/library/source/output',
        ),
        'AntService\\Src\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/..' . '/ant-service/library/source/interfaces',
        ),
        'AntService\\Src\\DataBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/ant-service/library/source/database',
        ),
        'AntService\\Src\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/ant-service/library/source/common',
        ),
        'AntService\\Command\\' => 
        array (
            0 => __DIR__ . '/../..' . '/command',
        ),
        'AntService\\' => 
        array (
            0 => __DIR__ . '/..' . '/ant-service/library/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd23208e17905f7f8dec1681a626a5d38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd23208e17905f7f8dec1681a626a5d38::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
