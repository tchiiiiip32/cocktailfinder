// function defaultTask(cb) {
//     // place code for your default task here
//     cb();
// }
//
// exports.default = defaultTask

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

var src = [
        './styles/**/*.scss',
        './resources/assets/sass/app.scss',
        './resources/assets/sass/_variables.scss',
        './resources/assets/sass/navbar.scss',
    ],
    commonsrc = [
        './node_modules/bootstrap-sass/assets/stylesheets',
        './node_modules/sweetalert2/src',
        './node_modules/font-awesome/scss'
    ];

gulp.task('styles', function () {
    gulp.src(src)
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: commonsrc
        })
            .on('error', sass.logError))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 4 versions', 'iOS > 7', 'Firefox > 20']
        }))
        .pipe(sourcemaps.write(function (file) {
            console.log("map", file.path.replace('/resources/sass', '/webroot/css'));
            return file.base + '../../webroot/css/';
        }))
        .pipe(gulp.dest(function (file) {
            console.log(file.base + '../../webroot/css/');
            return file.base + '../../webroot/css/';
        }));
});

gulp.task('build', function () {
    gulp.src(src)
        .pipe(sass({
            includePaths: commonsrc,
            outputStyle: 'compressed'
        })
            .on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 4 versions', 'iOS > 7', 'Firefox > 20']
        }))
        .pipe(gulp.dest(function (file) {
            console.log(file.base, file.path);
            return file.base + '../../webroot/css/';
        }));
});

gulp.task('watch', function () {
    gulp.watch(src, ['styles']);
});

gulp.task('default', ['styles', 'watch']);
