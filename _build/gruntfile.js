module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    noCache: true,
                    sourcemap: 'none',
                    style: 'compressed'
                },
                files: {
                    '../dist/grid.min.css': '../sass/grid.scss'
                }
            },
            src: {
                options: {
                    noCache: true,
                    sourcemap: 'none',
                    style: 'expanded'
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
