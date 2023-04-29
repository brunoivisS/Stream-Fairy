# Stream-Fairy
 Desenvolver um catálogo de filmes (estilo Netflix) utilizando PHP e Laravel
 --------Documentação do Stream Fairy-----------
para que o ambiente pode ser executado foi necessário 

dividir os serviços em microsserviço, o nginx_fairys é o único responsável 

pela renderização da página, NGINX é um software open-source para servidores web, 

funciona como proxy reverso, escondendo o ip do servidor que executa o código, 

gerando mais segurança no ambiente de produção; 

 
$$$$$$$$$$$$$$$$$$$$$$$$COMO RODA A APLICAÇÃO$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
para que aplicação rode vc precisa  

docker-compose up -d --build  

executar esse comando 

docker-compose run composer install
para roda as migrations
docker-compose run artisan migrate    
para roda as seeds
docker-compose run artisan db:seed    



após execuca e conclui download,  

execute  docker-compose down 

APP_KEY=base64:8h+WqvnKXoBtyFxs16VhVF1Aboydx+EhlkospZTQ+Ls= 

prontinho, agora apenas execute docker-compose up 

pronto a aplicação está rodando na sua máquina 

(caso estive dando erro de stream na aplicação, execute:
"docker-compose exec php chmod  -R 777 storage"
erro the stream or file)
 
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
