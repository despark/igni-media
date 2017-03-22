var gulp = require('gulp');
var config = require('../config.backend').igni_media;

gulp.task('igni-media', function () {
    gulp.src(config.src, {base: config.base}).pipe(gulp.dest(config.dest));
    gulp.src(config.colorbox.src).pipe(gulp.dest(config.colorbox.dest));
});