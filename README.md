
## Stream-Fairy

#### Develop a movie catalog (Netflix-style) using PHP and Laravel

### To download the application, execute the following command:
```http
  git clone https://github.com/brunoivisS/Stream-Fairy.git
```
 
#### After downloading, navigate to the project folder and execute:
```http
  docker-compose up -d --build
```
#### After executing the command, run:
```http
  docker-compose run composer install
```
#### After the installation, to run the migrations, execute:
```http
  docker-compose run artisan migrate
```
#### To run the seeds, execute the following command:
```http
 docker-compose run artisan db:seed
```

#### After successfully executing all the commands above, execute the following:


```http
  execute  docker-compose down 
```

  ### To run the application, execute:
  ```http
    docker-compose up -d
  ```
 ### To make the application run successfully, it's necessary to insert this code into the .env file:
  ```http
  APP_KEY=base64:8h+WqvnKXoBtyFxs16VhVF1Aboydx+EhlkospZTQ+Ls=
```
 ### ATTENTION
 ##### If you encounter a stream error in the application, "the stream or file" error, execute:
  ```http
  docker-compose exec php chmod  -R 777 storage
```



