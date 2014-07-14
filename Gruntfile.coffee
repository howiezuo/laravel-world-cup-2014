module.exports = (grunt) ->
  grunt.initConfig
    pkg: grunt.file.readJSON 'package.json'
    less:
      development:
        files:
          'public/css/style.css': 'public/less/style.less'
    watch:
      scripts:
        files: ['public/less/*.less']
        tasks: ['less']

  grunt.loadNpmTasks 'grunt-contrib-less'
  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.registerTask 'default', ['less', 'watch']
  return
