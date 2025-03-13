# Deployment notes

**Use the compose file in this repository to run the app.** From `~/omm-docker` run `docker-compose up -d`.

As of March 2025, the production server is on OpenStack, and it runs the code **on the `add-google-analytics` branch**, not `main`.

The code in `/app` is **bind-mounted** to the container. Do not switch branches, edit code etc unless intentionally updating the production deployment.

## Create database

The app requires the database CreditCard to be created in order to function properly. Create it with 
```
docker exec CONTAINER_ID  mysql -uroot -e "create database CreditCard"
```
## Copy data from XAMPP

The app requires its mysql database to have certain tables and relations already defined in order to function properly. Therefore, it was necessay to export mysql database from this [xampp folder](https://github.com/hicsail/omm-php). This may be a one-time step only since data is persisted in the docker container ran above.

The following are the step to get data from xampp;

- export mysql database with mysqldump

```
mysqldump -u root -p CreditCard > creditcard.sql
```

where CreditCard is the name of a database in xampp and creditcard.sql is the name of the exported file

- convert windows endings to unix line endings

If the data was exported on a windows machine, the file will need to be converted for linux (mattrayner/lamp is a linux based image)

```
dos2unix /path/to/creditcard.sql
```

- import mysql database into lamp running instance

```
mysql -u root -p CreditCard < creditcard.sql
```

"mysql" command is available inside var/lib/mysql of the running container. The file, creditcard.sql will need to be accessible from within the container. The file can be placed there with docker cp.
