<?php
namespace PicturaeJoomla\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;



class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        var_dump('install');

        $installer = new Installer($io, $composer);
        $composer->getInstallationManager()
                 ->addInstaller($installer);
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        var_dump('deactivate');
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        var_dump('uninstall');
    }
}