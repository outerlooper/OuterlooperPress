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

- `css/` - additional CSS outside of the core styles
- `fonts/` - locally hosted fonts
- `images/` - theme images folder
- `img/` - (dev) for compressing image files to be used in the theme
  - The build compresses and distributes any image file(s) found in the `img/` directory over to the main `images/` folder *Handy*
- `js/` - additional JavaScript outside of the core scripts
- `sass/` - (dev) for transpiling, mapping and minfiying the **OuterlooperPress** SCSS to CSS
  - `./style.css`
  - `./style.css.map`
  - `./style.min.css`
  - `./style.min.css.map`
- `scripts/` - (dev) for transpiling, mapping and minfiying the **OuterlooperPress** JavaScript
  - `./scripts.js`
  - `./scripts.js.map`
  - `./scripts.min.js`
  - `./scripts.min.js.map`
- `vendor/` - locally served vendor files

### The Style
- `./style.css` - (*required*) expanded **OuterlooperPress** theme CSS style details
- `./style.css.map` - expanded CSS map
- `./style.min.css` - (prod) minified **OuterlooperPress** style
- `./style.min.css.map` - minified map

### The Scripts
- `./scripts.js` - expanded **OuterlooperPress** JavaScript scripts
- `./scripts.js.map` - expanded JavaScript map
- `./scripts.min.js` - (prod) minified **OuterlooperPress** scripts
- `./scripts.min.js.map` - minified map