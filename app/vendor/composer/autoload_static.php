<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fa9dc7269536ee54d952d5980b295d2
{
    public static $files = array (
        '077c46ea4b0fe94d4bac6ac6d1c848fe' => __DIR__ . '/..' . '/copyleaks/php-plagiarism-checker/autoload.php',
        '941748b3c8cae4466c827dfb5ca9602a' => __DIR__ . '/..' . '/rmccue/requests/library/Deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpOrg\\Requests\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpOrg\\Requests\\' => 
        array (
            0 => __DIR__ . '/..' . '/rmccue/requests/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Requests' => __DIR__ . '/..' . '/rmccue/requests/library/Requests.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fa9dc7269536ee54d952d5980b295d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fa9dc7269536ee54d952d5980b295d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fa9dc7269536ee54d952d5980b295d2::$classMap;

        }, null, ClassLoader::class);
    }
}
