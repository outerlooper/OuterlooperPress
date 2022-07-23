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

The build outputs both the minified and expanded versions of the CSS and JavaScript files along with their respective map files, as well as any *image minification* that needs handling.

- The `./assets/` folder is where all the action is.
  - The `css/` folder is for CSS.
  - The `fonts/` folder is for fonts.
  - The `images/` folder (PROD) is the main images folder.
  - The `img/` folder (DEV) is for image files that need to be minimized. The build copies, minifies and pastes the newly minimized image file(s) from `img/` into the main `images/` folder\. Clears files from `img/` when done. Handy to have around.
  - The `sass/` folder is for SASS/CSS files. All SASS files are processed into CSS, minified and output to the `./style.min.css` file found in the root.
  - The `scripts/` folder is for JavaScript files. All scripts are combined, minified and output to the `./scripts.min.js` file found in the root.
  - The `vendor/` folder is for vendor files.
