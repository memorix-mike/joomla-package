<?php

namespace PicturaeJoomla\Installer;

class Docker
{
    public static function setup()
    {
        $file = __DIR__ . '/files/ddocker/ocker-compose.yml';

        if(file_exists($file)) {
            copy($file, getcwd() . '/docker-compose.yml');
            echo 'Done copying yml file.';
        }
        else {
            echo 'file does not exists at: ' . __DIR__ . '/files/docker/docker-compose.yml';
        }
    }
}