module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    sourceMap: false,
                    style: 'compressed'
                },
                files: {
                    '../dist/grid.min.css': '../sass/grid.scss'
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
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.registerTask('build', ['sass']);
    grunt.registerTask('default', ['sass']);
};
