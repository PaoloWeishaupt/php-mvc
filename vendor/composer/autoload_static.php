<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a799528a0cf5888be344ead871c303d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'L' => 
        array (
            'Libs\\' => 5,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/models',
        ),
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/libs',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/controllers',
        ),
    );

    public static $classMap = array (
        'Controllers\\ErrorPage' => __DIR__ . '/../..' . '/application/controllers/ErrorPage.php',
        'Controllers\\Home' => __DIR__ . '/../..' . '/application/controllers/Home.php',
        'Libs\\Application' => __DIR__ . '/../..' . '/application/libs/Application.php',
        'Libs\\Auth' => __DIR__ . '/../..' . '/application/libs/Auth.php',
        'Libs\\Database' => __DIR__ . '/../..' . '/application/libs/Database.php',
        'Libs\\ViewLoader' => __DIR__ . '/../..' . '/application/libs/ViewLoader.php',
        'Models\\Books' => __DIR__ . '/../..' . '/application/models/Books.php',
        'Models\\Users' => __DIR__ . '/../..' . '/application/models/Users.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a799528a0cf5888be344ead871c303d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a799528a0cf5888be344ead871c303d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a799528a0cf5888be344ead871c303d::$classMap;

        }, null, ClassLoader::class);
    }
}