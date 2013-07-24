require "rubygems"
require "bundler"
Bundler.setup

# Settings for Compass and rsync deployment
css_dir               = "assets/css"
theme                 = "base"
ssh_user              = "timothybsmith.com@s142056.gridserver.com" # for rsync deployment
remote_root           = "/nfs/c10/h02/mnt/142056/domains/ttimsmith.com/html" # for rsync deployment

namespace :styles do

  desc "Clear the styles"
  task :clear => ["compile:clear"]

  desc "Compile new styles"
  task :compile => ["compile:default"]

  namespace :compile do

    task :clear do
      puts "*** Clearing styles ***"
      system "rm -Rfv #{css_dir}/*"
    end

    task :default => :clear do
      puts "*** Compiling styles ***"
      system "compass compile"
    end

    desc "Compile new styles for production"
    task :production => :clear do
      puts "*** Compiling styles ***"
      system "compass compile --output-style compressed --force"
    end

  end

end

desc "Clears and generates new styles, builds and deploys"
task :deploy do
  puts "*** Deploying the site ***"
  system "rsync -avz --delete . #{ssh_user}:#{remote_root}/wp-content/"
  # puts "*** Pushing code to GitHub ***"
  # system "git push origin master"
end