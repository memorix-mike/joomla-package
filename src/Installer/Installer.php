<?php

namespace PicturaeJoomla\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Installer\InstallerInterface;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use Symfony\Component\Console\Command\Command;

class Installer implements InstallerInterface
{

    public function dump($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }

    public function __construct(IOInterface $io, Composer $composer)
    {
        var_dump('IO: ' . dump($io));
        var_dump('Composer: ' . dump($composer));
    }

    public function supports(string $packageType)
    {
        return $packageType;
    }

    public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
    }

    public function download(PackageInterface $package, ?PackageInterface $prevPackage = null)
    {
    }

    public function prepare(string $type, PackageInterface $package, ?PackageInterface $prevPackage = null)
    {
    }

    public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
    {

        var_dump('installation method...');

        $file = fopen('testbestand.txt', 'w');
        fwrite($file, "dit is een test");
        var_dump('install');
        return Command::SUCCESS;
    }

    public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
        var_dump('update method ...');
        return Command::SUCCESS;
    }

    public function uninstall(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
        var_dump('uninstall method ...');
        return Command::SUCCESS;
    }

    public function cleanup(string $type, PackageInterface $package, ?PackageInterface $prevPackage = null)
    {
    }

    public function getInstallPath(PackageInterface $package)
    {
    }
}