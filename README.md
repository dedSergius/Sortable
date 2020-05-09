# Sortable

Simple implementation of sortable data single page application using PHP and JS.

### Tech

Sortable uses a number of open source projects to work:

* [Twitter Bootstrap](http://twitter.github.com/bootstrap/) - great UI boilerplate for modern web apps
* [Flat UI](http://designmodo.github.io/Flat-UI/) - a beautiful theme for Bootstrap
* [jQuery](http://jquery.com) - JavaScript Library
* [Marei's DB class](https://github.com/mareimorsy/DB) - a simple query builder class in PHP written by Marei Morsy

### Installation
Sortable is very easy to install and deploy in a Docker application.

```sh
cd sortable
docker-compose up -d
```
This command will create a multi-container Docker application that includes Nginx, PHP, MySQL and phpMyAdmin.

If you want to install the application manually, you will need import the **sortable_dump.sql** file from the **www\sortable** folder to you database and change the database connection settings in the **config.php** file in the **www\sortable\app** directory.


License
----

MIT

