<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaef307e61cd13167252be92da8147562
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sajid\\SiyomTvasta\\' => 18,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sajid\\SiyomTvasta\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaef307e61cd13167252be92da8147562::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaef307e61cd13167252be92da8147562::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaef307e61cd13167252be92da8147562::$classMap;

        }, null, ClassLoader::class);
    }
}
