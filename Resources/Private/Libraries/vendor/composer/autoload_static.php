<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit098c4133b3742e7569fbfb77b8c6e995
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit098c4133b3742e7569fbfb77b8c6e995::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit098c4133b3742e7569fbfb77b8c6e995::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
