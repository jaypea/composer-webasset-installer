<?php
namespace jaypea\Composer;
use Composer\Package\PackageInterface;


/**
 * Custom Installer for web assets (e.g. Javascript or CSS files). Will install
 * the package in the target-dir folder instead of the (default) vendor directory.
 * This helps to make the files public accessible.
 *
 */


class WebAssetInstaller extends \Composer\Installer\LibraryInstaller
{
	/**
	 * {@inheritDoc}
	 */
	protected function getPackageBasePath(PackageInterface $package)
	{
		$extra = $package->getExtra();

		if(!isset($extra['target-dir'])) {
			throw new \InvalidArgumentException(
				'Unable to install web asset. Missing target-dir parameter in extra field.'
			);
		}

		return $extra['target-dir'];
	}


	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return (bool) ('webasset' === $packageType);
	}

}