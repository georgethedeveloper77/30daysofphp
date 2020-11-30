**Web Server**

php -S localhost:4000 /

**Create a Virtual Host for your Website**

1. sudo mkdir /var/www/your_domain
2. sudo chown -R $USER:$USER /var/www/your_domain
3. sudo nano /etc/apache2/sites-available/your_domain.conf

- /etc/apache2/sites-available/your_domain.conf
  <VirtualHost \*:80>
  ServerName your_domain
  ServerAlias www.your_domain
  ServerAdmin webmaster@localhost
  DocumentRoot /var/www/your_domain
  ErrorLog ${APACHE_LOG_DIR}/error.log
  CustomLog ${APACHE_LOG_DIR}/access.log combined
  </VirtualHost>

1. sudo a2ensite your_domain
2. sudo a2dissite 000-default
3. sudo apache2ctl configtest
4. sudo systemctl reload apache2

Restart apache server
/etc/init.d/apache2 restart

**Commands**

- echo

**Variables**
containers

**Data Types**
1. strings = ""
2. intergers
3. floats
4. boolean
5. null

**working with strings**
 $phrase = "Giraffe Academy <br>";
 echo strtolower($phrase);
 echo strtoupper($phrase);
 echo strlen($phrase);
 echo $phrase[0];
 echo $phrase[0] = "B";
 echo str_replace("<br>Giraffe", "Panda", $phrase);
 echo substr($phrase, 8,);

**working with numbers**
1. abs();
2. pow();
3. sqrt();
4. max(,);
5. min(,);
6. cell();
7. floor();

**url Parameters**
store in4 => not secure

**POST vs GET**
$_POST = hides in4 url
$_GET = displays in4 url

 **Associative Arrays**
 key =>