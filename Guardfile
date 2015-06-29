notification :off

group :development do

  # Run watch sass directory and compile into css
  guard 'sass', :input => 'sass', :output => 'css'

  # Clear the theme registry every time you change one of the
  # relevant theme files.
  guard :shell do
    puts 'Monitoring theme files.'

    watch(%r{.+\.(php|inc|info)$}) { |m|
      puts 'Change detected: ' + m[0]
      `drush cache-clear theme-registry`
      puts 'Cleared theme registry.'
    }
  end

  # https://github.com/guard/guard-livereload.
  # Ignore *.normalize.scss to prevent flashing content when re-rendering.
  guard :livereload do
    watch(%r{^((?!\.normalize\.).)*\.(css|js)$})
  end

end
