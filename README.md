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

### The Assets
The `./assets/` folder is where all the dev action is.

- `css/` folder (PROD) - for additional CSS outside of the core styles.
- `fonts/` folder (PROD) - for hosting fonts locally.
- `images/` folder (PROD) - the theme images folder.
- `img/` folder (DEV) - for compressing image files to be used in the theme.
  - The build compresses and distributes any image file(s) found in the `img/` directory over to the main `images/` folder\. *Handy*.
- `js/` folder (PROD) - for additional JavaScript outside of the core scripts.
- `sass/` folder (DEV) is for transpiling, mapping and minfiying the **OuterlooperPress** SCSS to CSS.
  - `./style.css`
  - `./style.css.map`
  - `./style.min.css`
  - `./style.min.css.map`
- `scripts/` folder (DEV) is for transpiling, mapping and minfiying the **OuterlooperPress** JavaScript.
  - `./scripts.js`
  - `./scripts.js.map`
  - `./scripts.min.js`
  - `./scripts.min.js.map`
- `vendor/` folder (DEV/PROD) is for vendor files.

### The Style
- `./style.css` file - expanded CSS (DEV).
- `./style.css.map` file - map for expanded CSS.
- `./style.min.css` file - minifed CSS (PROD).
- `./style.min.css.map` file - map for expanded CSS.

### The Scripts
- `./scripts.js` file - expanded JS (DEV).
- `./scripts.js.map` file - map for expanded JS.
- `./scripts.min.js` file - minifed JS (PROD).
- `./scripts.min.js.map` file - map for expanded JS.