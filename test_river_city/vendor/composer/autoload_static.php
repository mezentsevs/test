<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf620c4bd869899220c5fa4ec3d4d9c8f
{
    public static $files = array (
        '9d150879be4e401d28d2dcbce8b5e030' => __DIR__ . '/../..' . '/includes/config.php',
        'c355f96307f0b496849eb21bde22a588' => __DIR__ . '/../..' . '/includes/initialize.php',
        '0316f4295147b1c63bc16f4d038b8697' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixesPsr0 = array (
        'i' => 
        array (
            'includes\\' => 
            array (
                0 => __DIR__ . '/../..' . '/test_river_city',
            ),
        ),
    );

    public static $classMap = array (
        'includes\\DatabaseObject' => __DIR__ . '/../..' . '/includes/DatabaseObject.php',
        'includes\\File' => __DIR__ . '/../..' . '/includes/File.php',
        'includes\\Folder' => __DIR__ . '/../..' . '/includes/Folder.php',
        'includes\\MySQLDatabase' => __DIR__ . '/../..' . '/includes/MySQLDatabase.php',
        'includes\\Navigation' => __DIR__ . '/../..' . '/includes/Navigation.php',
        'includes\\ObjSorter' => __DIR__ . '/../..' . '/includes/ObjSorter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf620c4bd869899220c5fa4ec3d4d9c8f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf620c4bd869899220c5fa4ec3d4d9c8f::$classMap;

        }, null, ClassLoader::class);
    }
}