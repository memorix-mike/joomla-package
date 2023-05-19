<?php
namespace PicturaeJoomla\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Installer implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new TemplateInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}