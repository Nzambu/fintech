Get the application/s ready to run in the following steps

NB: Make sure to start local server and mysql or mariadb. 

    That is, systemctl start apache2 && systemctl start mariadb

1. Download and Unzip the shared file or Clone the github repository available here - https://github.com/Nzambu/fintech . Store the folder at /var/www/html/{ the folder - fintech }

2. Assuming your environment uses mysql or mariadb, edit the .env file to create a local connection as follows. CReate a database with the name 'fintech'

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fintech
DB_USERNAME=change_to_your_datbase_username
DB_PASSWORD=change_to_your_datbase_password

3. Access the unziped/cloned folder on terminal and change directory to laravel. That is, cd /laravel

4. Run the following commands

    1. Composer update
    2. php artisan key:generate
    3. php artisan jwt:secret
    4. php artisan migrate:fresh
    3. php artisan db:seed

5. Change directory one level up by running the comman cd ..

6. Navigate to vue folder using the command cd /vue and run the following commands

    1. yarn update
    2. yarn run serve - wait for the command execute

7. visit on the browser localhost:8080/

    user email : patrick@fintech.com
    password : P@%%w0rd

8. Documentation for all the apis is available at http://localhost/fintech/laravel/public/docs/ . The path is accessible if the folder was moved as described in the first step. Otherwise, navigate to the laravel folder in fintech and run the following command.

    1. php artisan serve --host localhost --port 8000

9. Access the documentation at http://localhost:8000/docs/