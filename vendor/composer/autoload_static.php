<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d8b4e69ebdc53c7cb4214dcfe68589b
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Hautelook' => 
            array (
                0 => __DIR__ . '/..' . '/hautelook/phpass/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7d8b4e69ebdc53c7cb4214dcfe68589b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
