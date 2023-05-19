<?php

namespace PicturaeJoomla\Installer;

class Docker
{

    private static $dockerComposeFile = 'docker-compose.yml';


    public static function setup()
    {
        self::copyDockerComposeFile();
    }

    private static function copyDockerComposeFile()
    {
        $file = __DIR__ . '/files/docker/' . self::$dockerComposeFile;

        if(file_exists($file)) {
            try {
                copy($file, getcwd() . '/docker-compose.yml');
                echo 'Done copying yml file.' . "\n";
            } catch (\Exception $exception) {
                echo $exception->getMessage();
            }
        }
        else {
            echo 'Docker compose file does not exists at: ' . $file . "\n";
        }
    }
}