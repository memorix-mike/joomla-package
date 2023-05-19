<?php

namespace PicturaeJoomla\Installer;

class Docker
{

    public static function setup()
    {
        copy('files/docker-compose.yml', getcwd() . '/docker-compose.yml');
        echo 'Copied : docker-compose.yml';
    }

}