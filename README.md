
## Stream-Fairy

#### Desenvolver um catálogo de filmes (estilo Netflix) utilizando PHP e Laravel

### para fazer download da aplicação, execute o seguinte comando:
```http
  git clone https://github.com/brunoivisS/Portfolio.git
```
 
#### Após efeituar download, entre na pasta do projeto, e execute:
```http
  docker-compose up -d --build
```
#### Após efeituar download, entre na pasta do projeto:
```http
  docker-compose run composer install
```
#### Após efeituar download, entre na pasta do projeto:
```http
  docker-compose run artisan migrate
```
#### Para roda as seeds, execute o seguinte comando:
```http
 docker-compose run artisan db:seed
```

#### Após, executa com exitos todos os comandos acima, execute abaixo:


```http
  execute  docker-compose down 
```
#### Para subituir o ip voce precisa sabe o ip da sua maquina

#### No ubunutu ifconfig | no windows ipconfig
### Altere o ip local que está definido abaixo:
| Parâmetro   | Tipo       | IP                           |
| :---------- | :--------- | :---------------------------------- |
| `host: "192.168.1.9",` | `string` | your_ip |

  ### Para executar a aplicação execute:
  ```http
    npm run dev
  ```
 ### para que execute com exito a aplicação é nessario inseri esse codigo no arquivo .env:
  ```http
  APP_KEY=base64:8h+WqvnKXoBtyFxs16VhVF1Aboydx+EhlkospZTQ+Ls=
```
 ### ATENÇÃO
 ##### caso estive dando erro de stream na aplicação, erro the stream or file, execute:
  ```http
  docker-compose exec php chmod  -R 777 storage
```



