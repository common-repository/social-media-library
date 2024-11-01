<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafce67c2972a75d835fae65e7e051825
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
        ),
        'M' => 
        array (
            'Motto\\InstagramMediaLibrary\\' => 28,
        ),
        'I' => 
        array (
            'InstagramScraper\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Motto\\InstagramMediaLibrary\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'InstagramScraper\\' => 
        array (
            0 => __DIR__ . '/..' . '/restyler/instagram-php-scraper/src/InstagramScraper',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafce67c2972a75d835fae65e7e051825::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafce67c2972a75d835fae65e7e051825::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitafce67c2972a75d835fae65e7e051825::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitafce67c2972a75d835fae65e7e051825::$classMap;

        }, null, ClassLoader::class);
    }
}
