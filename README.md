# COSC349 Assignment 1 README

## Book Keeper application

The Book Keeper application allows the user to store books that they have read in a database. It also shows you insights into the types of books you read.

### Virtual Machine structure

The application is run over three virtual machines
* VM1: webserver
* VM2: dbserver
* VM3: webserver2

webserver : Allows for user interaction with the database. A form is used to collect data from the user and inserts data into the database.

dbserver : Stores the collected data in the database

webserver2: Produces the results of SQL queries to a web page. This does not allow the user to make any changes or additions to the database.

## Downloads

To run the Book Keeper application ensure that the following are downloaded:

Vagrant:

VirtualBox:

## Running the application

To use the application:

Clone the application repo:
and store somewhere on local computer

Open terminal or cmd line and navigate to the directory where there repo is stored.
Run the command: vagrant up

Access to the application can be found at: http://127.0.0.1:8080


