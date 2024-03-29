<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59103a79de65bf068fd24bea11a5cc37
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BuscaCep\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BuscaCep\\' => 
        array (
            0 => __DIR__ . '/..' . '/buscacep/yyhago/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59103a79de65bf068fd24bea11a5cc37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59103a79de65bf068fd24bea11a5cc37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59103a79de65bf068fd24bea11a5cc37::$classMap;

        }, null, ClassLoader::class);
    }
}
