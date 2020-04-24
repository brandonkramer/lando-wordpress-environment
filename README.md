# Lando WordPress Environment
This is a WordPress development environment based on Lando which I use for my WordPress projects. It allows for core development, plugin development, and theme development. 
[Lando](https://github.com/lando/lando) is an extremely flexible local development environment that is based on [Docker](https://www.docker.com/).

This repository contains the Lando configuration file `.lando.yml` along with `config/php.ini` `config/nginx.conf` `config/httpd.conf` files for server configuration.

## Getting started
Before you get started with this setup I assume that you have:
1. Installed [Lando](https://github.com/lando/lando) and gotten familiar with its basics
1. Got familiar with Lando's [WordPress recipe](https://docs.lando.dev/config/wordpress.html)
1. Read about the various services, tooling, events and routing Lando offers.

## Usage  
1. Configure `.lando.yml`  and replace `{project}` with project name
1. Specify the desired PHP version, web server and database server
1. Run the command `lando start` from the project root.
1. Create WordPress folder with `mkdir wordpress` and move into it by `cd wordpress`
1. Download WordPress with WP CLI by `lando wp core download` 
1. Then visit the WordPress folder (`wp-{project}.lndo.site/wordpress/`) and go through install steps

## Info
Lando will automatically set up a database with a user and password and also set an environment variables called `lando info` that contains useful information about how your application can access other Lando services.
``` 
database: wordpress
username: wordpress
password: wordpress
host: database
# for mysql
port: 3306
# for postgres
# port: 5432
```
Go to `pma.wp-{project}.lndo.site` to visit PHPMyAdmin and `mail.wp-{project}.lndo.site` to visit MailHog.
## BrowserSync
 Add following options to your Browsersync script:
``` 
browserSync.init(files, {
  proxy: 'http://appserver', // could be http://appserver.nginx if you're running nginx
  port: 3000,
  open: false,
});
```

## Documentation
Refer to Lando's extensive [documentation](https://docs.lando.de).
