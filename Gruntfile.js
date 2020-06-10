module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    noCache: true,
                    sourceMap: false,
                    outputStyle: 'compressed'
                },
                files: {
                    'www/dist/grid.min.css': 'www/sass/grid.scss',
                    'www/css/grid.min.css': 'www/sass/grid.scss'
                }
            },
            src: {
                options: {
                    noCache: true,
                    sourceMap: false,
                    outputStyle: 'expanded'
                },
                files: {
                    'www/css/grid.css': 'www/sass/grid.scss'
                }
            }
        },
        watch: {
            css: {
                files: ['www/sass/**/*.scss'],
                tasks: ["sass"]
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('build', ['sass']);
    grunt.registerTask('default', ['sass']);
};
