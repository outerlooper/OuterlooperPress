# OuterlooperPress

## A Child Is Born

- Outerlooper, A WordPress Child Theme
- Author: Outerlooper, Michael Cooper
- Template: Twenty Twenty One

## Install and Build

- Clone this "***OuterlooperPress***" WordPress theme repo into your `./wp-content/themes/` folder:

    `$ git clone https://github.com/outerlooper/OuterlooperPress.git`

- Make sure the "***Twenty Twenty One***" WordPress *(parent)* theme is installed.
- Open the `OuterlooperPress/` theme directory in terminal.
- Grab the packages:

    `$ npm-install`

- Build the assets:

    `$ gulp`

- Boom.

## The Gulp Build

The build outputs both the minified and expanded versions of the CSS and JavaScript files along with their respective map files. It can also handle some image minification when you need it as well.

### The `./assets/` folder is where all the action is
- The `css/` folder is for CSS.
- The `fonts/` folder is for fonts.
- The `images/` folder (PROD) is the main images folder.
- The `img/` folder (DEV) is for image files that need to be minimized. The build minifies and moves any image file(s) from the `img/` directory into the main `images/` folder\. Handy.
- The `sass/` folder is for SASS/CSS files to be processed into CSS, minified and output to the `./style.css` and `./style.min.css` files.
- The `scripts/` folder is for JavaScript files to be combined, minified and output to the `./scripts.js` and `./scripts.min.js` files.
- The `vendor/` folder is for vendor files.
