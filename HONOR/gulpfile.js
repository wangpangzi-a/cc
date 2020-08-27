var gulp = require("gulp");
var uglify = require("gulp-uglify");
var a=require("gulp-minify-css");
var rename = require("gulp-rename");
// gulp.task("uglify",function(){
//     console.log("这是压缩");
//     gulp.src("css/content.css").pipe(uglify()).pipe(gulp.dest("c:\\aaa"));
// });
gulp.task("css",function(done){
	console.log("这是压缩");
    gulp.src("css/shouye.css").pipe(a()).pipe(rename("shouye.min.css")).pipe(gulp.dest("C:\\ccc"));
    gulp.src("css/xiangqingye.css").pipe(a()).pipe(rename("xiangqingye.min.css")).pipe(gulp.dest("C:\\ccc"));
	done();
});
// gulp.task("cax",function(){
//     console.log("这是压缩");
//     gulp.src("css/gouwuche.css").pipe(a()).pipe(gulp.dest("C:\\ccc"));
// //     gulp.src("css/shouye.css").pipe(a()).pipe(gulp.dest("C:\\bbb"));
// //     gulp.src("css/xiangqingye.css").pipe(a()).pipe(gulp.dest("C:\\bbb"));
// 	done()
// });
gulp.task("js",function(done){
    console.log("这是压缩");
    gulp.src("js/shouye.js").pipe(uglify()).pipe(rename("shouye.min.js")).pipe(gulp.dest("C:\\ccc"));
	done()
});