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

## What have we here?

The **Gulp** build outputs both the minified and expanded versions of the CSS and JavaScript files along with their respective map files, as well as any *image minification* that needs handling.

- The `./assets/` folder is where all the action is.
  - The `sass/` folder is for SASS/CSS files. All SASS into CSS are assembled, minified and output to the `./style.min.css` file found in the root - which just so happens to be the main CSS file for this theme.
  - The `scripts/` folder is for JavaScript files. All scripts are assembled, minified and output to the `./scripts.min.js` file found in the root - which just so happens to be the main JS file for this theme.
  - The `img/` folder is a working directory for image minification. The build copies, minifies and pastes the minimized image into the main `./assets/images/` folder. Handy to have around.

