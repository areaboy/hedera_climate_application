Waste Recycling and Composting System is  an applications designed to connect, help and encourage Users to share, compost or  recycle inorganic waste
 (Plastic Cans, bottles, Metals, Aluminum Cans ) etc. in an exchange for <b>Hedera Crypto Cool Payments.



This application was built with Hedera, Nodejs, PHP, PHP-Emailer Client, Mysql Database, Ajax, JQUERY, Bootstraps, Css, Google Javascript Map sdk API, Google Address Geocoding API, 
Google Graph/Charts API etc.



How To Test the Application:

This Application has two main folders

1.)Hedera_waste:   This folder contains PHP Mysql Application Parts that is connected to Nodejs Via an Ajax Call

2.) Hedera_app:  This Folder Contains Nodejs Full Hedera Applications For Checking Hedera Account Balance, making Rewards/Payments transfers etc. 
Via an Ajax calls from the php Applications


Steps to Follow.

Installing the PHP Applications.

1.) Download and Xammpp Server. Ensure that php and Mysql Database Server is running After installation.

2.) Copy hedera_waste folder to htdocs of Xampp Sever eg. C:\xampp\htdocs\hedera_waste

3.) Download PHP-Emailer from https://github.com/areaboy/php-emailer. Unzip it and  copy mail_vendor folder into the php(hedera_waste) main application folder. 
Eg. C:\xampp\htdocs\hedera_waste\mail_vendor
 

4.) Call up phpmyadmin and create a database called hedera_waste.

5.) import database Tables called hedera_db.SQL to create all the necessary Tables.

6.) Edit both  data6rst.php and data6rst1.php files to set your mysql credentials.

7.) Edit settings.php files to set the following Parameters

A.)Google map Geo-coding, Reverse-Geocoding and javascript Map sdk API key. You can Visit https://console.cloud.google.com/
Create a Project, Create your API Credential Key. Ensure that Google Javascript Map and Google Geo-coding API are enable.

Just one API Credential key will serv for all


B.) Set Your Site Project URL. Eg. http://localhost/hedera_waste


C.) set nodejs listen url Eg. http://localhost:3000


D.)  Email Messaging Server Credential configuration. To enable Waste Composting and Recycling Companies to be able to send Email to Users




Installing the Nodejs and Hedera Payments Applications.

1.) Open Hedera_app folder and 

2.) Edit db_connect.js files to configure mysql database credentials.  These database credentials must match with that set in both data6rst.php and data6rst1.php
respectively since the nodejs and php applications are accessing the same database.

3.) Edit .ENV files to enter your Hedera Account ID and DER Private Keys where Appropriates. This will enable Admins(Waste Composting and Recycling Companies to easily
Check their Hedera Account balance and Rewards Users via Hedera Payments Transfers.

4.)  CD to Hedera_app from command prompt and type  NPM INSTALL to install all dependency files.
  Run NPM START to start Nodejs Server.
The Nodejs Server will be running at http://localhost:3000

Finally, its time to run php application.  Now that Nodejs Server has been started and running.   Open a Browser and enter 
http://localhost/hedera_waste and Viola. The full application is ready for use.

 If you need any help, hit me at esedofredrick [at] gmail.com

Thanks and God bless





