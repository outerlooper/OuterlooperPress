# &#x2728; OuterlooperPress

**OuterlooperPress** is an otherworldly **WordPress Theme** created for my own personal projects; from out here in the perimeter; just outside the loop; by a true ***Outerlooper*** dude in a good ***Outerlooper*** mood. 

**OuterlooperPress** is a **WordPress** *child theme* inheriting all of the core excellence bestowed upon us by **Twenty Twenty One** *parent theme* in order to ground us well as we fearlessly set course for *other dimensions unknown*. Love and appreciation to **the team** for all of the amazing work, both seen and unseen. The glory is yours, the experience is ours, but the pleasure is all mine. 

May **The Source** Be Ever With You. Cheers!

- Theme: OuterlooperPress
- Parent: Twenty Twenty One
- Author: Outerlooper, Michael Cooper
- Website: [outerlooper.github.io](https://outerlooper.github.io/)

## &#x26A1; Install and Build

- Clone the "***OuterlooperPress***" repo into your `./wp-content/themes/` folder:

    `$ git clone https://github.com/outerlooper/OuterlooperPress.git`

- Make sure the "***Twenty Twenty One***" *(parent)* theme is installed
- Open the `OuterlooperPress/` theme directory in your terminal
- Grab the packages:

    `$ npm-install`

- Build the assets:

    `$ gulp`

- Boom ... let's rock this bitch!

## &#x26A1; The Gulp Build

`$ gulp` - outputs the **OuterlooperPress** theme styles, scripts and maps (minifed + expanded) along with optional image file compression handling

### &#x2728; The Assets

`./assets/` - where all the action is

- `css/` - additional CSS outside of the core **OuterlooperPress** theme styles
- `fonts/` - locally hosted fonts
- `images/` - **OuterlooperPress** theme images folder
- `img/` - (dev) for compressing image files to be used in the theme
  - compresses and distributes any image file(s) located in the `img/` directory into the main **OuterlooperPress** theme `images/` folder ... *Handy*
- `js/` - additional JavaScript outside of the core **OuterlooperPress** theme scripts
- `sass/` - (dev) for transpiling, mapping and minfiying the **OuterlooperPress** theme SCSS to CSS
  - `./style.css`
  - `./style.css.map`
  - `./style.min.css`
  - `./style.min.css.map`
- `scripts/` - (dev) for transpiling, mapping and minfiying the **OuterlooperPress** theme JavaScript
  - `./scripts.js`
  - `./scripts.js.map`
  - `./scripts.min.js`
  - `./scripts.min.js.map`
- `vendor/` - locally served vendor files

### &#x2728; The Style

*DO NOT modify these files manually - `$ gulp` - **The Gulp Build** is your friend.

- `./style.css` - (*required*) expanded **OuterlooperPress** theme CSS style details
- `./style.css.map` - expanded CSS map
- `./style.min.css` - (prod) minified **OuterlooperPress** theme style
- `./style.min.css.map` - minified map

### &#x2728; The Script

*DO NOT modify these files manually - `$ gulp` - **The Gulp Build** is good.

- `./scripts.js` - expanded **OuterlooperPress** JavaScript theme scripts
- `./scripts.js.map` - expanded JavaScript map
- `./scripts.min.js` - (prod) minified **OuterlooperPress** theme scripts
- `./scripts.min.js.map` - minified map