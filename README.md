Installation Guide
==================
<b>Sample Page After finish Install</b>
<pre>http://localhost/home</pre>

<b>Setup Requirement:</b>

1. [CakePHP](http://www.cakephp.org) - The rapid development PHP framework
2. [BootStrap](http://twitter.github.io/bootstrap/index.html) - The Powerful Web Development framework 
3. Local Web Hosting Software:
		[MAMP](http://www.mamp.info/) - Local Web Hosting for Macintosh
		[WAMP](http://www.wampserver.com) - Local Web Hosting for Windows
4. SQL Manager

<i>Note: In my eviroment I am using Mac. So I prefer MAMP.</i> 

<b>Step of Installing MAMP & CakePHP<b>

1. Install MAMP
<pre>
a. Configure The port number from the WAMP Main Window. to "MAMP Port"
b. Set "Run Apache/MySQL server as user "www/mysql"
c. Set MySQL root password, and unclick "Allow local access only"
d. Make sure PHP version is higher than CakePHP requirement. For myself, I am using PHP 5.4.10
e. Finaly, click "Start" and Check "WebStat"

2. Download the CakePHP, and unpack to following
<pre>
A. Unpack to /Applications/MAMP/htdoc
</pre>
<pre>
B. Structure will be like this:
		/Applications/MAMP/htdoc
		    /app
		    /cake
		    /vendors
		    /.htaccess
		    /index.php
		    /README
</pre>
<pre>
C. Set Apache, mod_rewrite and .htaccess [Click Here for Details](http://book.cakephp.org/1.2/en/The-Manual/Developing-with-CakePHP/Installation.html#apache-and-mod-rewrite-and-htaccess)
		
	a. In http.conf make sure setting are same as following:<pre>
			<Directory />
				Options FollowSymLinks
				AllowOverride All
				#    Order deny,allow
				#    Deny from all
			</Directory></pre>And Uncommand " # " the following line:<pre>
LoadModule rewrite_module libexec/apache2/mod_rewrite.so
</pre>
b. Check for .htaccess file same as the one inside cakephp [installtion webpage](http://book.cakephp.org/1.2/en/The-Manual/Developing-with-CakePHP/Installation.html#apache-and-mod-rewrite-and-htaccess).<pre>
Go Terminal and type command following to check those .htaccess file
nano /Applications/MAMP/htdoc/.htaccess
nano /Applications/MAMP/htdoc/app/.htaccess
nano /Applications/MAMP/htdoc/app/webroot/.htaccess
</pre>
</pre>
<pre>
D. Set CakePHP Database setting [Click Here for Details](http://book.cakephp.org/1.2/en/The-Manual/Developing-with-CakePHP/Configuration.html)
	a. Rename app/config/database.php.default to database.php
	b. go into it and set the database detail as you have set in your sql database:
<pre>          
	var $default = array('driver'      => 'mysql',
	                 'persistent'  => false,
	                 'host'        => 'localhost',
	                 'login'       => 'cakephpuser',
	                 'password'    => 'c4k3roxx!',
	                 'database'    => 'my_cakephp_project',
	                 'prefix'      => '');
</pre></pre>
3. Edit Permission for tempolary folder
<pre>
Open up the Terminal and run (for example):
chmod 777 /Applications/MAMP/htdoc/app/tmp
</pre>
4. Change the Core file Salt & cipherSeed Value
<pre>
Open up /app/config/core.php and change the values for:
Security.salt
Security.cipherSeed
</pre>
5. Create Database, and table in MySQL & Insert Data
<pre>
CREATE DATABASE IF NOT EXISTS cakephp_db;
USE cakephp_db;
</pre>
<pre>
DROP TABLE IF EXISTS `cakephp_db`.`inventories`;
CREATE TABLE  `cakephp_db`.`inventories` (
  `ItemID` smallint(6) unsigned zerofill NOT NULL,
  `ItemName` text NOT NULL,
  `UnitPrice` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `Quantity` smallint(4) unsigned NOT NULL DEFAULT '0',
  `Category` text NOT NULL,
  `Year` year(4) NOT NULL,
  `Description` text,
  `Comment` text,
  `ImageLink` text,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
</pre>
<pre>
INSERT INTO `inventories` (`ItemID`,`ItemName`,`UnitPrice`,`Quantity`,`Category`,`Year`,`Description`,`Comment`,`ImageLink`) VALUES 
 (000001,'Dom Perignon 2003','159.99',30,'Vintage White Wine',2003,'The bouquet spirals through a light-filled, floral softness to the gritty minerality that epitomises Dom Perignon, evocative of candied fruit, plant life and exquisite camphor leaf freshness, and finally plunges into darkness, spices and licorice root.',NULL,'cache.wine.com/labels/114639m.jpg'),
 (000002,'Beringer Napa Valley Cabernet Sauvignon 2010 ','29.99',50,'Red Wine',2010,'Beringers Napa Valley Cabernet Sauvignon is crafted to reflect the Napa Valley appellation. This wine is evocative of the rich terroir of the vineyards, but is still immediately approachable and appealing. ',NULL,'cache1.wine.com/labels/121945m.jpg');
</pre>
6. Test The Page
<pre>
http://localhost/home
</pre>
