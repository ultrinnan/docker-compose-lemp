# LAMP stack built with Docker Compose

This is a basic LAMP stack environment built using Docker Compose. It consists following:

* PHP 7.2
* Apache 2.4
* MySQL 5.7
* phpMyAdmin

## Installation

Clone this repository on your local computer and run the `docker-compose up -d`.

Your LAMP stack is now ready!! You can access it via `http://localhost`.

To shut down (and keep data) run `docker-compose down`

To clear all add `-v` to previous command, it will delete data in volumes.

## Configuration

This package comes with default configuration options. You can modify them by creating `.env` file in your root directory.

To make it easy, just copy the content from `sample.env` file and update the environment variable values as per your need.

### Configuration Variables

There are following configuration variables available and you can customize them by overwritting in your own `.env` file.

_**DOCUMENT_ROOT**_

It is a document root for Apache server. The default value for this is `./www`. All your sites will go here and will be synced automatically.

Initially there is test files in document root to check Apache and database and 1 test site in folder "site_test" to check virtual hosts. You can add as many sites as you need in subfolders with name `site_{my_site_name}`. Such folders will be ignored by current git, so you can use own git repos in this folders.

With such structure this project is a wrapper for all other projects, and will not interfere with their git. 

_**MYSQL_DATA_DIR**_

This is MySQL data directory. The default value for this is `./data/mysql`. All your MySQL data files will be stored here.

_**VHOSTS_DIR**_

This is for virtual hosts. The default value for this is `./config/vhosts`. You can place your virtual hosts conf files here.

> Make sure you add an entry to your system's `hosts` file for each virtual host by editing `/etc/hosts` file. 
>
> Example: `127.0.0.1   test.local`

Recommended naming convention is same as for document root - `site_{my_vhost_name}.conf`. This will prevent vhosts configs from version control.


_**APACHE_LOG_DIR**_

This will be used to store Apache logs. The default value for this is `./logs/apache2`. Will be created after first run.

_**MYSQL_LOG_DIR**_

This will be used to store Apache logs. The default value for this is `./logs/mysql`. Will be created after first run.

## Web Server

Apache is configured to run on port 80. So, you can access it via `http://localhost`.

#### Apache Modules

By default following modules are enabled.

* rewrite
* headers

> If you want to enable more modules, just update `./bin/webserver/Dockerfile`. You can also generate a PR and we will merge if seems good for general purpose.
> You have to rebuild the docker image by running `docker-compose build` and restart the docker containers.

#### Connect via SSH

You can connect to web server using `docker exec` command to perform various operation on it. Use below command to login to container via ssh.

```shell
docker exec -it web_server /bin/bash
```

## PHP

The installed version of PHP is 7.2

#### Extensions

By default following extensions are installed.

* mysqli
* mbstring
* zip
* intl
* mcrypt
* curl
* json
* iconv
* xml
* xmlrpc
* gd

> If you want to install more extension, just update `./bin/webserver/Dockerfile`. You can also generate a PR and we will merge if seems good for general purpose.
> You have to rebuild the docker image by running `docker-compose build` and restart the docker containers.

## phpMyAdmin

phpMyAdmin is configured to run on port 8080. Use following default credentials.

http://localhost:8080/  
- username: root  
- password: password

or use default:

- database: web_test_base
- username: docker
- password: docker

## Redis

It comes with Redis. It runs on default port `6379`.

---
based on https://github.com/sprintcube/docker-compose-lamp/tree/7.2.x