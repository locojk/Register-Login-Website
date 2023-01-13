# Register-Login-website

This register/login system allows users to create an account and log in to a website, it can be viewed in the following link:
URL: https://web.cs.dal.ca/~gao4/register-login/

To run the code locally and view it, please follow the instructions below.

# Requirements
PHP 7.3.29 or higher

MySQL 5.7 or higher

# Setup
1. In order to protect the personal database account security, the database information file has not been uploaded, create a new MySQL database is required to run this project:
   (1) Import the User.sql file which inside "helper" folder into the MySQL database to create the necessary tables.
   (2) To enable database connection, find dbinfo.php in "helper" folder and fill host name, databse schema name, username and the password. Then put it into "includes" folder.
   (3) Update the database connection settings with your MySQL credentials.
2. Upload the files to a web server, one chioce is installing a web server application such as XAMP or MAMP locally. See https://make.wordpress.org/core/handbook/tutorials/installing-a-local-server/mamp/
