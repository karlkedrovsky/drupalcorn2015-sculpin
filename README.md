# DrupalCorn 2015 - Sculpin and Drupal

This repo contains the final source code from my presentation on [Sculpin and Drupal at DrupalCorn 2015](http://2015.drupalcorn.org/sessions/sculpin-and-drupal).

To run the app just run the following from the root directory:

* sculpin install
* sculpin generate --watch --server

The theme uses Zurb Foundation and if you want to modify it for some reason you'll need to do the following:

* cd source/themes/karlkedrovsky/drupalcorn
* npm install -g gulp gulp-sass gulp-watch
* npm install foundation-sites
* gulp
