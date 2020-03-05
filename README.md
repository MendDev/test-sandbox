# Coding Test Instructions

```
1. Please fork this repo, and submit a PR when you are done.
2. Create a web page "task list" that submits form data and inserts it into the database 
   then shows the updated task list. 
3. Also allow the deleting of those entries and show the updated list after deletion.
4. Must use JavaScript, PHP and MySQL.
5. The front end should make ajax restful calls to a php api endpoint.
6. Add SQL for creating the database that you are using.
7. (optional) Make task list item editable.

Shouldn't take you longer than 3-4 hours to complete.
You may use any frameworks or extra libraries that you wish. 

We specifically are looking for your implementation of the following in your code:
* Good programming principles
* Validation
* Unit testing
* Restful 
* Ajax

We are not looking for examples of:
* CSS styling, color choices etc

Please list the files and/or the main entry points in the PR. So that we we 
can easily find your work. This will help us see what you have written as 
opposed to what might have been added by third party code.
```

--------

#### Docker setup shamelessly sourced from https://github.com/sprintcube/docker-compose-lamp

# LAMP stack built with Docker Compose

A basic LAMP stack environment built using Docker Compose. It consists of the following:

* PHP
* Apache
* MySQL

## Installation

Clone this repository on your local computer and checkout the appropriate branch e.g. 7.4.x. 
Run the `docker-compose up -d`.

```shell
git clone https://github.com/sprintcube/docker-compose-lamp.git
cd docker-compose-lamp/
git fetch --all
git checkout 7.4.x
cp sample.env .env
docker-compose up -d
```

Your LAMP stack is now ready. You can access it via `http://localhost`.

### Composer and Db Setup

Connect to the container  
`docker exec -ti mend-webserver /bin/bash`

Install composer files and run migration
```
composer install
vendor/bin/phinx migrate
```

## Configuration and Usage

https://github.com/sprintcube/docker-compose-lamp/tree/7.4.x

### (Additional from Mend) 

1. Install Docker for Mac/Windows, and verify that it's running. You should see the docker icon near the date-time after the installation is complete.

2. From the command line navigate to the repo folder and run `docker-compose up`, this should kick off a series of downloads and installs.

3. Once it's done installing and building the container, you can run the command `docker ps` to verify that the container is up.

4. At this point, as long as you don't have any other server listening to port 80, navigate your browser to 127.0.0.1. You can also change the port in the docker-compose.yml file as needed if port 80 conflicts with any existing set up.

5. You should be able to navigate to the repo via your IDE and work in the folder named test-sandbox/www to add your code.

## Resetting the containers
To remove any existing conflicting containers, images, and volumes, from the command line run the following.

```
docker-compose down
yes | docker system prune -a
docker volume rm $(docker volume ls -q)
docker images purge -a
```


### Connect to MySQL

```
> docker exec -ti mend-mysql /bin/bash
```
Inside the container:
```
root@96362952ce65:/# mysql -u root -p 
Enter password: 

Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 6
Server version: 5.7.29 MySQL Community Server (GPL)

Copyright (c) 2000, 2020, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql>
```

