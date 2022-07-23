# OuterlooperPress

## A Child Is Born

- Outerlooper, A WordPress Child Theme
- Author: Outerlooper, Michael Cooper
- Template: Twenty Twenty One

## Install

- Clone this "***OuterlooperPress***" WordPress theme repo into your `./wp-content/themes/` folder:

    `$ git clone https://github.com/outerlooper/OuterlooperPress.git`

- Make sure the "***Twenty Twenty One***" WordPress *(parent)* theme is installed.
- Open the `OuterlooperPress/` theme directory in terminal.
- Grab the packages:

    `$ npm-install`

- Build the assets:

    `$ gulp`

- Boom.

## Gulp Build

The Gulp build outputs the theme's minified and expanded CSS and JS along with their map files along with any set image minification.

- The `./assets/` folder is where all the action is.
- The `sass/` folder is a working directory for SASS/CSS files. The build assembles all SASS into CSS, minifies 'em and outputs the `style.min.css` file into the root - which just so happens to be the main CSS file for this theme.
- The `scripts/` folder is a working directory for JavaScript files. The build assembles all scripts, minifies 'em and outputs the `./scripts.min.js` file into the root - which just so happens to be the main JS file for this theme.
- The `img/` folder is a working directory for image minification. The build copies, minifies and pastes the minimized image into the main `./assets/images/` folder. Handy to have around.

