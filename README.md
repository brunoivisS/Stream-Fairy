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

docker-compose composer install 

após execuca e conclui download,  

execute  docker-compose down 

agora cópia e cola o .env.example  

renome a cópia para .env 

coloque isso no .env 

APP_KEY=base64:8h+WqvnKXoBtyFxs16VhVF1Aboydx+EhlkospZTQ+Ls= 

prontinho, agora apenas execute docker-compose up 

pronto a aplicação está rodando na sua máquina 

 
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
