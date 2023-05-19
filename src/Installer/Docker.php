<?php

namespace PicturaeJoomla\Installer;

class Docker
{

    public static function setup()
    {
        copy(__DIR__ . 'files/docker-compose.yml', getcwd() . 'docker-compose.yml');
        echo 'Copied : docker-compose.yml';
    }

}