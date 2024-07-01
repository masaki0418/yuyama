const gulp = require("gulp");
const browserSync = require("browser-sync");
const ssi = require("connect-ssi");
const sass = require('gulp-sass');
const autoprefixer = require("gulp-autoprefixer");
const glob = require("gulp-sass-glob");
const notify = require('gulp-notify');
const plumber = require("gulp-plumber");
const babel = require('gulp-babel');
const changed = require('gulp-changed');
const uglify = require("gulp-uglify-es").default;
const imagemin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");

const paths = {
  rootDir: "dist/",
  scssSrc: "source/scss/**/*.scss",
  jsSrc:   "source/js/**/*.js",
  imgSrc:  "source/img/**/*",
  outCss:  "dist/assets/css",
  outJs:   "dist/assets/js",
  outImg:  "dist/assets/img",
};

// browser sync
function browserSyncFunc(){
  browserSync.init({
    server: {
      baseDir: paths.rootDir,
      middleware: [
        ssi({
          baseDir: paths.rootDir,
          notify: false, //通知
          ext: ".html"
        })
      ]
    },
    port: 4000,
    reloadOnRestart: true
  });
}

// sass
function sassFunc() {
  return gulp
    .src(paths.scssSrc, { sourcemaps: true })
    .pipe(plumber({
    errorHandler: notify.onError('<%= error.message %>'),
  }))
    .pipe(glob())
    .pipe(sass({
    outputStyle: 'compressed'
  }))
    .pipe(autoprefixer({
    grid: "autoplace",
    cascade: false
  }))
    .pipe(gulp.dest(paths.outCss, {sourcemaps: '../sourcemaps'}))
    .pipe(browserSync.stream());
}

// js
function jsFunc() {
  return gulp.src(paths.jsSrc, {
    sourcemaps: true
  })
    .pipe(plumber({
    errorHandler: notify.onError('<%= error.message %>'),
  }))
    .pipe(babel())
    .pipe(uglify({}))
    .pipe(gulp.dest(paths.outJs));
}

// img
function imgFunc() {
  return gulp.src(paths.imgSrc)
    .pipe(changed(paths.outImg))
    .pipe(imagemin([
      mozjpeg({
        quality: 80,
        progressive: false // デフォルトはtrue
      }),
      pngquant('65-80'),
      imagemin.svgo(),
      imagemin.gifsicle()
    ],
      { verbose: true } // 処理した画像のログをTerminalに出力
    ))
    .pipe(gulp.dest(paths.outImg));
}

function browserReload(done) {
  browserSync.reload();
  done();
}

// watch
function watchFunc(done) {
  gulp.watch(paths.rootDir, browserReload);
  gulp.watch(paths.scssSrc, sassFunc);
  gulp.watch(paths.jsSrc,   jsFunc);
  gulp.watch(paths.imgSrc,  imgFunc);
  done();
}

// scripts tasks
gulp.task('default',
  gulp.parallel(browserSyncFunc, watchFunc)
);

exports.imgFunc = imgFunc;