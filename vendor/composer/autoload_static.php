<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30e5ef5f803933377a8ecc54313fcf9d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit30e5ef5f803933377a8ecc54313fcf9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30e5ef5f803933377a8ecc54313fcf9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30e5ef5f803933377a8ecc54313fcf9d::$classMap;

        }, null, ClassLoader::class);
    }
}
