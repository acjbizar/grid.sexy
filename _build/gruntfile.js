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
                    '../dist/grid.min.css': '../sass/grid.scss',
                    '../css/grid.min.css': '../sass/grid.scss'
                }
            },
            src: {
                options: {
                    noCache: true,
                    sourceMap: false,
                    outputStyle: 'expanded'
                },
                files: {
                    '../css/grid.css': '../sass/grid.scss'
                }
            }
        },
        watch: {
            css: {
                files: ['../sass/**/*.scss'],
                tasks: ["sass"]
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('build', ['sass']);
    grunt.registerTask('default', ['sass']);
};
