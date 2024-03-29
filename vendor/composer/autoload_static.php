<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3595403a1bbc4e6eea91ee911bc9825
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3595403a1bbc4e6eea91ee911bc9825::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3595403a1bbc4e6eea91ee911bc9825::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf3595403a1bbc4e6eea91ee911bc9825::$classMap;

        }, null, ClassLoader::class);
    }
}
