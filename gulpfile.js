// JavaScript Document
var gulp = require("gulp");
//var ejs = require("gulp-ejs");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var uglify = require("gulp-uglify");
var plumber = require("gulp-plumber");

gulp.task("ejs", function(){
    gulp.src(["ejs/**/*.ejs", "!ejs/**/_*.ejs"])
    .pipe(plumber())
    .pipe(ejs({}, {ext: '.html'}))
    .pipe(gulp.dest("./html"));
});

gulp.task("js", function(){
    gulp.src(["js/**/*.js", "!js/min/**/*.js"])
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest("./js/min"));
});

gulp.task("sass", function(){
    gulp.src("sass/**/*.scss")
    .pipe(plumber())
    .pipe(autoprefixer())
    .pipe(sass())
    .pipe(gulp.dest("./css"));
});

gulp.task("default", function(){
    gulp.watch(["js/**/*.js", "!js/min/**/*.js"],["js"]);
    gulp.watch("sass/**/*.scss", ["sass"]);
    //gulp.watch(["ejs/**/*.ejs", "!ejs/**/_*.ejs"],["ejs"]);
});