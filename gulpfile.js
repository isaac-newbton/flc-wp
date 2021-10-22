var gulp = require('gulp'),
uglify = require('gulp-uglify'),
autoprefixer = require('gulp-autoprefixer'),
sass = require('gulp-sass')(require('sass'));
sourcemaps = require('gulp-sourcemaps');

gulp.task('uglify', () =>
    gulp.src('src/js/**/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('js'))
);

gulp.task('processSASS', () => 
    gulp.src('src/sass/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass(
            {
                outputStyle: 'compressed'
            }
        ).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./'))
);

gulp.task('watchSASS', () => 
    gulp.watch('src/sass/**/*.scss', gulp.series('processSASS'))
);

gulp.task('watchJS', () => 
    gulp.watch('src/js/**/*.js', gulp.series('uglify'))
);

gulp.task('default', gulp.parallel('watchSASS', 'watchJS'));