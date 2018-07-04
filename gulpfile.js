// const gulp = require('gulp');
// const sass = require('gulp-sass');
// const autoprefixer = require('gulp-autoprefixer');
//
// gulp.task('sass', ()=>
//     gulp.src('./frontend/scss/*.scss')
//         .pipe(sass({
//             outputStyle: 'expanded'
//         }))
//         .pipe(autoprefixer({
//             versions: 'last 2 versions'
//         }))
//         .pipe(gulp.dest('./frontend/dist/css'))
// );
//
// gulp.task('default', ()=> {
//     gulp.watch('./**/**.scss', ['sass'])
// });