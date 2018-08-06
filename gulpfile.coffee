# configuration
path =
  css: 'views/css/',
  scss: 'views/css/*',
  js: 'views/js/',
  php: 'views/post/',
  php_admin: 'views/admin/',
  template: 'views/template/'


# Require
gulp = require('gulp')
browserSync = require('browser-sync')
$ = require('gulp-load-plugins')()


# Tasks
gulp.task 'sass', ->
  gulp.src "#{path.scss}*.scss"
  .pipe $.sass().on('error', $.sass.logError)
  .pipe $.autoprefixer
    browsers: ['last 2 versions']
  .pipe gulp.dest path.css
  .pipe $.size()
  .pipe browserSync.reload(stream: true)

gulp.task 'js-watch', ->
  browserSync.reload()

gulp.task 'php-watch', ->
  browserSync.reload()


gulp.task 'default', ->
  browserSync
   proxy: "127.0.0.1/ToucanGulp"
  gulp.watch "#{path.scss}*.scss", ['sass']
  gulp.watch "#{path.js}*.js", ['js-watch']
  gulp.watch "#{path.php}*.php", ['php-watch']
  gulp.watch "#{path.php_admin}*.php", ['php-watch']
  gulp.watch "#{path.template}*.php", ['php-watch']


