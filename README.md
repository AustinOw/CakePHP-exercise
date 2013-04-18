Installation Guide
==================

Setup Requirement:
  [CakePHP](http://www.cakephp.org) - The rapid development PHP framework
  [BootStrap](http://twitter.github.io/bootstrap/index.html) - The Powerful Web Development framework 

  Local Web Hosting Software:
  [MAMP](http://www.mamp.info/) - Local Web Hosting for Macintosh

  - SQL Manager
  - FTP Manager
  
1. Install MAMP
    a. Configure The port number from the WAMP Main Window. to "MAMP Port"
    b. Set "Run Apache/MySQL server as user "www/mysql"
    c. Set MySQL root password, and unclick "Allow local access only"
    d. Make sure PHP version is higher than CakePHP requirement. For myself, I am using PHP 5.4.10
    e. Finaly, click "Start" and Check "WebStat"

2. Download the CakePHP, and unpack to following: 
    For MAMP:
      A. Unpack to /Applications/MAMP/htdoc
      B. Structure will be like this:-

            /Applications/MAMP/htdoc
                /app
                /cake
                /vendors
                /.htaccess
                /index.php
                /README
                
      C. Set Apache, mod_rewrite and .htaccess [Click Here for Details](http://book.cakephp.org/1.2/en/The-Manual/Developing-with-CakePHP/Installation.html#apache-and-mod-rewrite-and-htaccess)
          a. In http.conf make sure setting are same as following:
          
                <Directory />
                    Options FollowSymLinks
                    AllowOverride All
                #    Order deny,allow
                #    Deny from all
                </Directory>
              
              And Uncommand " # " the following line:
                LoadModule rewrite_module libexec/apache2/mod_rewrite.so
          
          b. Check for .htaccess file same as the one inside cakephp [installtion webpage](http://book.cakephp.org/1.2/en/The-Manual/Developing-with-CakePHP/Installation.html#apache-and-mod-rewrite-and-htaccess). 
                - Go Terminal and type command following to check those .htaccess file
                  - nano /Applications/MAMP/htdoc/.htaccess
                  - nano /Applications/MAMP/htdoc/app/.htaccess
                  - nano /Applications/MAMP/htdoc/app/webroot/.htaccess
                  
      D. Set CakePHP Database setting [Click Here for Details](http://book.cakephp.org/1.2/en/The-Manual/Developing-with-CakePHP/Configuration.html)
          a. Rename app/config/database.php.default to database.php
          b. go into it and set the database detail as you have set in your sql database:
              var $default = array('driver'      => 'mysql',
                                   'persistent'  => false,
                                   'host'        => 'localhost',
                                   'login'       => 'cakephpuser',
                                   'password'    => 'c4k3roxx!',
                                   'database'    => 'my_cakephp_project',
                                   'prefix'      => '');
                              
      
            
