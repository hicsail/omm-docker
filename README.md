# Manual run

## Start app within a LAMP based image

- Start Docker LAMP

```
docker run -i -t -p "80:80" -v ${PWD}/app:/app -v ${PWD}/mysql:/var/lib/mysql mattrayner/lamp:latest
```

The command leverages mattrayner/lamp image to start a container running the LAMP stack. It expects a folder "app" at the directory where the command was run, where php code is stored.

The container will start a mysql database, create a mysql folder at the directory where the command is run and mount that folder to var/lib/mysql inside the runnign container.

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
