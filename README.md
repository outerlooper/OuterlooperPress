# OuterlooperPress

## A Child Is Born
- Outerlooper, A WordPress Child Theme
- Author: Outerlooper, Michael Cooper
- Template: Twenty Twenty One

## Install
- Download 'OuterlooperPress' into the WordPress themes directory
- Requires the 'Twenty Twenty One' WordPress parent theme
- Run 'npm-install' to update packages
- Run 'gulp' to build assets

## Gulp Build
The Gulp build outputs the theme's minified and expanded CSS and JS along with their maps, as well as any designated image minification.

### assets/
The './assets/' folder is where all the action is.

#### sass/style.scss -> style.min.css
The './assets/sass/' folder is a working directory for SASS/CSS files. The build assembles all SASS into CSS, minifies 'em and outputs the 'style.min.css' file - which just so happens to be the main CSS file for this theme.

#### scripts/ -> scripts.min.js
The './assets/scripts/' folder is a working directory for JavaScript files. The build assembles all scripts, minifies 'em and outputs the './scripts.min.js' file - which just so happens to be the main JS file for this theme.

#### img/ -> images/
The './assets/img/' folder is a working directory for image minification. The build copies, minifies and pastes the minimized image into the main './assets/images' folder - if the build would so happen to find image files in there.

