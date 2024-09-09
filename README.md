# COSC349 Assignment 1 README

## Book Keeper application

The Book Keeper application allows the user to store information about books that they have read in a database. It also shows you insights into the types of books you read.

### Virtual Machine structure

The application is run over three virtual machines
* VM1: webserver
* VM2: dbserver
* VM3: webserver2

webserver : Allows for user interaction with the database. A form is used to collect data from the user and inserts data into the database. A hyperlink from this webpage directs the user to the ip that hosts webserver2.

dbserver : Stores the collected data in the database. The database is accessed in both websever and webserver2 using php.

webserver2: Produces the results of SQL queries from the database to a web page. This does not allow the user to make any changes or additions to the database. A hyperlink from this webpage directs the user to the ip that hosts webserver.

## Running the application

To use the application:

Clone the application repo: https://github.com/bekrol/cosc349-assn1.git
and store somewhere on local computer that is easily accessible

Open terminal or cmd line and navigate to the directory where there repo is stored.
Run the command: vagrant up

Access to the application can be found at: http://127.0.0.1:8081

