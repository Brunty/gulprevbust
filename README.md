Gulp Rev Bust [Bolt Extension]
======================

This extension allows you to use the [gulp-rev](https://www.npmjs.com/package/gulp-rev) gulp plugin to cache-bust your assets via a rev-manifest.json (or other specified) file.

## Configuring the Extension

If you're using the default gulp-rev configuration, this extension should find the manifest file without any configuration.

If you're using a custom named manifest file, you can specify the name of this file (relative to the __theme root__) in the configuration file for this extension `app/config/extensions/gulprevbust.brunty.yml`

## Configuring gulp-rev

See the [gulp-rev documentation](https://www.npmjs.com/package/gulp-rev) for information on that.

## Using the extension

Given a manifest file of:

    {
        "css/unicorn.css": "css/unicorn-098f6bcd.css",
        "js/unicorn.js": "js/unicorn-273c2cin.js"
    }

To output the name of the CSS file we require, we'd use:

    <link rel="stylesheet" type="text/css" media="all" href="{{ gulp_rev_bust('css/unicorn.css') }}">
    
To output:

    <link rel="stylesheet" type="text/css" media="all" href="css/unicorn-098f6bcd.css">
    
In our HTML.