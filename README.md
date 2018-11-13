# Appogram Sample With PHP

this repository contain a very simple server that written in PHP

# Installation
 ## PHP files
 we use [WAMP](http://www.wampserver.com/en/) for testing this Sample.so if you use this software just download this repository and copy all file in the root directory `www` and then your server is ready.
## Database
we provide for you a sample database also. you can import this database in you `MySql` or `MariaDB` for this propuse you can use `PHPMy Admin`. the database name is `appogram_sample.sql` and located in root directory of this repository.
### config database
if you want to change the configuration of database you can change `/db/db.php` file.

## Rewrite Url
In our Appogram sample appo we use urls without extension like `/Draw` and not `/Draw.php` for this reason we also provide a `.htaccess` file that let server dosen't care about file extension so be sure that for this file.

## Allowin access to methods and httpd-vhosts.conf
Because Appogram appo's run on physical devices or emulator that aren't a server and server run on different machine at first you must allow your OS(Windows/Linux/MacOS,etc) to allow connection from other address and port to this machine.  for example in `Window` you can allow port `80` in Inbounds/Outbunds of windows firewall. after that you should change some config of `httpd-vhosts.conf` of Apache. 
If you use wamp you can right click on wamp icon in windows taskbar and then from Apache menu select `httpd-vhosts.conf` and then replace `Require local` with  `Require all granted`. full example of our `httpd-vhost.conf` is like this :

     # Virtual Hosts
    #
    <VirtualHost *:80>
      ServerName localhost
      ServerAlias localhost
      DocumentRoot "${INSTALL_DIR}/www"
      <Directory "${INSTALL_DIR}/www/">
        Options +Indexes +Includes +FollowSymLinks +MultiViews
        AllowOverride All
        Require all granted
      </Directory>
    </VirtualHost>

***some notes***
 by default server run on `localhost:80` and ready to use.then you can use the address of server in [Appogram Studio](https://studio.appogram.io)

# Use in Appogram Studio 
After you run the server you need to add the url of server in  [Appogram Studio](https://studio.appogram.io) but first of all be sure that you download the last version of [Appo Template](https://github.com/AppogramIO/Sample-Appogram-Appo) and then import it to versions. after that go to `Designer` and on top of page select `Variables`.Click on `Variables` button after a modal opend edit the `server` variable and replace it with this server url.

**Important Note 1**
the server run on `localhost` and port `80` but as you know if you use this url in you app it cause a problem in android emulator or other devices. so instead of using `localhost`  use your **ip address** for example if your app address is `192.168.1.10` instead of using `localhost:80` use `192.168.1.10:80` for `server` variable in Appogram Studio.

**Important Note 2**
this is very important that after you import the version in Appogram Studio then save it. for this go to `Designer` and then click on `Save and Update` button.

# Configs

for changing ip and port or change secret key of jwt you should change `config.js` and then restart the server.
