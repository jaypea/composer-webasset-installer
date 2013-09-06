<?php

namespace jaypea\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class WebAssetPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new WebAssetInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

}
