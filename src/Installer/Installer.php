<?php
namespace PicturaeJoomla\Installer;

//use Composer\Script\Event;
//use Composer\Installer\PackageEvent;

class Installer
{
    public function __construct()
    {
        dd('loaded!');
    }

    public static function postUpdate()
    {
        // here be dragons
        $file = fopen("testfile.txt", "w");
        fwrite($file, "testbestand");
        fwrite(STDOUT, "Task completed successfully!");

        symlink('Joomla/test.php', 'test');
    }

    public function postPackageInstall()
    {
        $file = fopen("testfile.txt", "w");
        fwrite($file, "testbestand");
    }
}