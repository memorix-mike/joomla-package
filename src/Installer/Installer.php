<?php
namespace PicturaeJoomla\Installer;

class Installer
{
    public function __construct()
    {

    }

    public function postPackageInstall()
    {
        $file = fopen("testfile.txt", "w");
        fwrite($file, "testbestand");
    }
}