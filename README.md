# WordPress-Starter-Theme

A WordPress Starter Theme.

## Introduction

WordPress-Starter-Theme is a basis for developing WordPress themes. It contains very little styling and html elements to allow you to adapt it to your needs without having to delete the existing one.  
This theme still contains some arbitrarily chosen functions in the _functions.php_ file. I often use these functions so I wanted to include them since this basis is primarily intended for my projects.

## Features

-   Sass for stylesheets
-   Browsersync for synchronized browser testing
-   Gulp tasks to monitor changes in your files and perform the corresponding tasks (compile, autoprefix, minify CSS & JS, optimize images, generate pot file)
-   Gulp task to create a zip folder containing all the files necessary for production.
-   PHPCS with WordPress Coding Standards

## Requirements

Make sure all dependencies have been installed before moving on:

-   [WordPress](https://wordpress.org/)
-   [Composer](https://getcomposer.org/)
-   [Node.js](http://nodejs.org/)
-   [Gulp](https://gulpjs.com/)

## Theme development

Download all the files from the repo in your root project. Then:

```
composer install
```

This command will install the dependencies for PHPCS & WPCS. It will also install [HTML5Shiv](https://github.com/aFarkas/html5shiv) in the assets directory.

```
npm install
```

This command will install all the dependencies needed to run the Gulp tasks.

Finally, you can start creating your theme !

## Changelog

| Version | Date       | Notes                                                                      |
| ------- | ---------- | -------------------------------------------------------------------------- |
| v.1.1.1 | 2020-04-10 | Add missing Gutenberg block files, update Gulp clean config                |
| v1.1.0  | 2020-04-03 | Add some headings, taxonomy description & replace input markup with button |
| v1.0.0  | 2020-03-12 | Stable version                                                             |

## License

The WordPress-Starter-Theme is licensed under the GPL v2 or later. A copy of the license is included in the root of the plugin’s directory. The file is named LICENSE.
