Laravel docker

The project must be mounted using docker:

  - Start docker daemon

  - Run your docker machine: docker-compose up -d
  - Access the php container: docker exec -it php-madonna sh  
  - From inside the machine:
    - Run: composer install
    - Copy the .env.example to .env
    - Run: php artisan key:generate
    - Run: apk add npm
    - Run: npm run dev
  - Web running on http://localhost:8088
  - Api status check running on GET request: http://localhost:8088/api/status
  - Swagger running on http://localhost:8082/
  - Postman base collection file can be found on src/postman
  - phpMyAdmin running on http://localhost:9191
    - user: root
    - password: secret
  - As database we use MySQL:
    - database name: laravel
    - database user: root
    - database password: secret
  
  - To stop de container:
    docker-compose stop
    
- Create a firebaseAuth.js in public/js/ and copy firebaseConfig script. We can get the data in settings / project configuration / 


:)
