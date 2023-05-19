<?php

namespace PicturaeJoomla\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;

class Installer extends InstallerInterface
{
    public function __construct(IOInterface $io, Composer $composer)
    {
        var_dump('Lets go!');
    }
}