<?php

namespace PicturaeJoomla\Installer;

class Docker
{

    private static $dockerComposeFile = 'docker-compose.yml';


    public static function setup()
    {
        self::copyDockerComposeFile();
    }

    /**
     * @return void
     */
    public static function up(): void
    {
        shell_exec('docker-compose up');
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