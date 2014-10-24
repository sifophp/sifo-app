SIFO App
========
The SIFO App is the starting point to create your own SIFO application.

After cloning this repo, you'll need to have **composer** installed in your system. If you have never installed it then:

	$ curl -sS https://getcomposer.org/installer | php
	$ mv composer.phar /usr/local/bin/composer

Once composer is installed you should be able to run `composer`. Invoking the install will download all necessary packages:
	 
	$ composer install

After the command everything should be installed (you will see a `vendor` folder now).

Your own application should be created inside the `instances` folder, see others for understanding structure.
