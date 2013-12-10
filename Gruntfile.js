'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        //'assets/js/*.js',
        //'assets/js/plugins/*.js',
        'assets/js/_plugins.js',
        'assets/js/_main.js',
        '!assets/js/main.min.js'
      ]
    },
    uglify: {
      dist: {
        files: {
          'assets/js/main.min.js': [
            'assets/js/plugins/*.js',
            'assets/js/_plugins.js',
            'assets/js/_main.js'
          ]
        }
      }
    },
    version: {
      options: {
        file: 'lib/scripts.php',
        css: 'assets/css/main.min.css',
        cssHandle: 'roots_main',
        js: 'assets/js/main.min.js',
        jsHandle: 'roots_scripts'
      }
    },
    sass: {
      dist: {
        options: {
         style: 'nested',
         noCache: true,
         sourcemap: true
        },
        files: {
          'assets/css/main.min.css': [
            'assets/scss/styles.scss'
          ]
        }
      }
    },
    autoprefixer: {
      dist: {
        files: {
          'assets/css/main.min.css': 'assets/css/main.min.css'
        }
      }
    },
    watch: {
      sass: {
        files: [
          'assets/scss/*.scss'
        ],
        tasks: ['sass','autoprefixer', 'version']
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify', 'version']
      },
      livereload: {
        options: {
          livereload: true
        },
        files: [
          'assets/css/main.min.css',
          'assets/js/scripts.min.js',
          'lib/*.php',
          'templates/*.php',
          './*.php'
        ]
      }
    },
    clean: {
      dist: [
        'assets/css/main.min.css',
        'assets/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-wp-version');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');


  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'sass',
    'autoprefixer',
    'uglify',
    'version'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};
