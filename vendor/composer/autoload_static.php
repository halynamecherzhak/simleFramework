<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6689086a5f96b9bd410e163b79c52cc
{
    public static $classMap = array (
        'app\\Controller\\Controller\\Controller' => __DIR__ . '/../..' . '/app/Controller/Controller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb6689086a5f96b9bd410e163b79c52cc::$classMap;

        }, null, ClassLoader::class);
    }
}