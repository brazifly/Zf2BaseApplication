I made this so it would be easy to spin up apps using the ZF2, Bootstrap 3, and Doctrine setup. Use it if you want to start your application!

# Install dependencies

in the root of the project, do a 

```
curl -sS https://getcomposer.org/installer | php
```

then run 

```
php composer.phar install
```
# Set up VHOST

Don't forget to set up apache for ZF2

```
<VirtualHost *:80>
    ServerName zf2-tutorial.localhost
    DocumentRoot /path/to/zf2-tutorial/public
    SetEnv APPLICATION_ENV "development"
    <Directory /path/to/zf2-tutorial/public>
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
    ErrorLog /path/to/logs/error.log
    CustomLog /path/to/logs/access.log combined

</VirtualHost>
```

A vhost to that effect!
