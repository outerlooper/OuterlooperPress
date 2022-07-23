const gulp = require('gulp');
// const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');
const terser = require('gulp-terser'); 
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sass = require('gulp-sass')(require('sass'));
const rename = require('gulp-rename');
// const browserSync = require('browser-sync').create();

// const htmlSrc = [
//     //'./CNAME', // OLD GitHub Pages
//     './README.md', 
//     './manifest.json',
//     './index.html'
// ];
const rootDir = './';
// const imgSrc = './assets/img/**/*';
// const fontSrc = './assets/fonts/**/*';
// const venSrc = './assets/vendor/**/*';
const cssDarkModeSrc = './assets/sass/style-dark-mode.scss';
const cssEditorSrc = './assets/sass/style-editor.scss';
const cssSrc = './assets/sass/style.scss';
const jsSrc = [
    './assets/scripts/app-config.js',
    './assets/scripts/**/*.js'
];
// const imgDest = './assets/images';
// const fontDest = './assets/fonts';
// const venDest = './assets/vendor';
const cssDarkModeDest = './assets/css';
const cssEditorDest = './assets/css';
const cssDest = './assets/css';
//const jsDest = './assets/js';

// function html() {
//     return gulp.src(htmlSrc)
//         .pipe(gulp.dest(rootDest));
// }

// function icons() {
//     return gulp.src([
//             './*.ico',
//             './*.png'
//         ])
//         .pipe(imagemin())
//         .pipe(gulp.dest(rootDest));
// }

// function images() {
//     return gulp.src(imgSrc)
//         //.pipe(imagemin())
//         .pipe(gulp.dest(imgDest));
// }

// function fonts() {
//     return gulp.src(fontSrc)
//         .pipe(gulp.dest(fontDest)); // pipe is like js async then, waits until ready
// }

// function vendor() {
//     return gulp.src(venSrc)
//         .pipe(gulp.dest(venDest)); // pipe is like js async then, waits until ready
// }

function css() {
    return gulp.src(cssSrc)
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(
        sass({
            outputStyle: 'expanded',
        }).on('error', sass.logError)
        )
        .pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(rootDir));
        //.pipe(gulp.dest(cssDest));
        //.pipe(gulp.dest(cssDev))
        //.pipe(browserSync.stream());
}

function cssMin() {
    return gulp.src(cssSrc)
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(
        sass({
            outputStyle: 'compressed',
        }).on('error', sass.logError)
        )
        .pipe(postcss([autoprefixer()]))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(rootDir));
        //.pipe(gulp.dest(cssDest))
        //.pipe(gulp.dest(cssDev))
        //.pipe(browserSync.stream());
}

function js() {
    return gulp.src(jsSrc)
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(concat('scripts.js'))
        .pipe(sourcemaps.write('.'))
        //.pipe(gulp.dest(jsDest))
        //.pipe(gulp.dest(jsDev))
        .pipe(gulp.dest(rootDir));
        //.pipe(browserSync.stream());
  }
  
  function jsMin() {
    return gulp.src(jsSrc)
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(concat('scripts.js'))
        .pipe(terser()) // minifies js including es6, gulp-uglify does not do es6
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        //.pipe(gulp.dest(jsDest))
        //.pipe(gulp.dest(jsDev))
        .pipe(gulp.dest(rootDir));
        //.pipe(browserSync.stream());
  }



//exports.html = html; // root files
//exports.icons = icons; // icons in root
//exports.images = images; // graphics
//exports.fonts = fonts; // font icons
//exports.vendor = vendor; // vendor files
exports.css = css; // compile scss to css
exports.cssMin = cssMin; // minify css
exports.js = js; // concat js
exports.jsMin = jsMin; // minify js

// exports.default = gulp.series(gulp.parallel(
//     pgPortfolio, html, icons, images, fonts, vendor, css, cssMin, js, jsMin
//     ), watch);

exports.default = gulp.parallel(
    css, cssMin, js, jsMin
    );