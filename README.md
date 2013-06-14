README
======

What is the Webasset Installer?
----------------

The WebAsset Installer is a custom installer for Composer:
http://getcomposer.org/doc/articles/custom-installers.md

Wrap-up: The WebAsset installer will install Composer packages with the type of
"webasset" in an configurable folder instead of the vendor directory.

How to use it?

The composer.json inside your webassets package should have type and require setup like this:

	{
		"name": "vendor/MyWebPackage",
		"type": "webasset",
		"require": {
			"jaypea/web-asset-installer": "*"
		},
        "extra": {
            "target-dir": "htdocs/"
        }
	}

The composer.json in your main project might look like this:

	{
		"name": "main/project",
		"require": {
			"vendor/MyWebPackage": "*"
		}
	}
