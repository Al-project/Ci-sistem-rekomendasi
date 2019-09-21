<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit378975b9c40512654178112f8ac9d73c
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
        'S' => 
        array (
            'Sastrawi\\' => 
            array (
                0 => __DIR__ . '/..' . '/sastrawi/sastrawi/src',
            ),
        ),
        'F' => 
        array (
            'Fieg' => 
            array (
                0 => __DIR__ . '/..' . '/fieg/bayes/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit378975b9c40512654178112f8ac9d73c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
