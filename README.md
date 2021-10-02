# Simplest Docker Setup for Php8.0-PostgresQL

This is a simple spin up of docker container for Php8.0 web server connected to
PostgresQL database.

## Getting Started

1. Clone this repository
2. Copy config-sample.php to config.php
3. Copy database.env.example to database.env
4. Change directory to the cloned folder
5. `docker-compose up`

## Test database connection

### Login to postgres database

`docker-compose run database bash` - to login to database container shell\
`psql --host=database --username=admin --dbname=docker_test`\

Enter password when promted: dbpass

### Create users table

```
CREATE TABLE users (user_id serial PRIMARY KEY,\
username VARCHAR ( 50 ) UNIQUE NOT NULL,\
password VARCHAR ( 50 ) NOT NULL,\
email VARCHAR ( 255 ) UNIQUE NOT NULL,\
created_on TIMESTAMP NOT NULL,\
last_login TIMESTAMP);
```

### Insert a user into the users table

`INSERT INTO users VALUES(1, 'gerlie', 'dfb30057573d8f20d0e03fd72a215ebe', 'test@test.com', '2021-10-01', '2021-10-01 10:00:00');`

### Reload the page

Visit http://localhost:8000/
