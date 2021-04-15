
## Concluido :D
<p>Finalmente eu conclui, sério, foram  05 dias me dedicando 100% ao projeto, na chuva (milagre), no sol, nas montanhas, eu realmente me debrucei, por ser meu primeiro sistema mais "Completo" eu quis dar o meu melhor, mas mesmo assim, tem algumas falahas<p>
<p>Por favor, antes de tudo, quando for para o projeto, quando ele estiver na maquina, tem que dar um php artisan migrate:fresh --seed, isso vai fazer a migração para o banco e adicionar a seed <br>
<h1> O projeto:</h1>
<h4> Eu fui desafiado a realizar o seguinte projeto:</h4>
<p> Uma empresa de distribuição de alimentos precisa de um sistema interno para gerenciar seus clientes e endereços de entrega.

O cadastro será interno e deve ser restrito a usuários logados com login e senha. O cadastro do cliente deve conter Nome Empresa, CNPJ, Telefone, Nome do Responsável, Email e Endereço(Cep, Logradouro, Bairro, Complemento, Número, Cidade, Estado).</p>
<h5>Para alguém que é de um nível acima do meu, com certeza acharia o projeto simples, eu de cara também achei algo simples, até começar a fazer, foi um projeto muito divertido, <strong>MESMO</strong></h5>
Não mais, algumas dicas para rodar o projeto:
<h3>-Você precisa subir os containers do docker (precisa ter na sua maquina, se não tiver, vou ensinar um "life-hack") </h3>
    ->Para subir é muito simples, só dar um docker-compose up -d 
 <h3>Com o docker up, vamos para os primeiros passos:</h3>
<p> Então, na minha seed, eu criei um usuario admin padrão com meu nome(lucasAdmin) A senha desse usuario vai ser admin</p>
<p> Vale sempre lembrar, tudo pode ser alterado no seed, caso você tenha dado o migrate:fresh com o seed, é só rodar esse mesmo comando que ele atualiza 😏</p>
<h4>Olá, meu novo administrador</h4>
<p>Pronto, qual a sensação de se sentir um admin do meu sistema? 😳</p>
<p> Enfim, você ta na tela de dashboard, nela temos algumas coisas legais, no canto superior direito você poder ver um botão de sair do sistema, sim você pode sair do sistema hehehe</p>
<p>Na direita, você consegue ver dois links, esses links são bem intuitivos, um você vai poder cadastrar novos usuarios no sistema, no outro, novas empresas e editar elas</p>
<p>~~Nessa página tem um problema que eu não consegui resolver :(, o botão de voltar, mesmo com outro tipo de usuario, ele volta para o dashboard, isso causa um problema de segurança, eu botei esse botão porque o usuari precisa voltar para o dashboard, então eu prefiro dizer que ele ta sendo um problema para mim, se alguém estiver disposto a ajudar, o projeto ta 100% livre</p>
 
 <h2>Tipos de usuario</h2>
  O desafio pede 3 tipos de usuario? Correto? Bom, eu tentei fazer pelo ACL do laravel, mas eu não tava conseguindo MESMO, enão, eu tentei fazer uma forma mais "rudimentar", mais simples eu diria
Se você observar no meu controller "administradorController" eu tenho uma função verificar, nela eu faço os ifs de cada usuario, eu pego essas informações no banco do user que o administrador cadastrou
Você consegue fazer tudo isso pelo formulario de cadastro.
<h4> Os tipos de usuarios:</h4>

<p> Usuario administrador, pode fazer tudo no sistema, inclusive cadastrar novos usuarios</p>
<p> Usuario Editor, pode fazer o crud de nova empresa e adicionar endereços e etc</p>
<p> Usuario visualizador, só pode olhar o que já foi criado </p>

<hr>

<p>O resto do projeto é um crud, se alguém tiver achado alguma falha, não deixa de entrar em contato comigo<p>

<hr>

<p> O life hack caso você não tenha o docker, é só tirar o arquivo laravel da pasta, colocar em outra e dar um 
<p>-composer update --no-scripts </p>
 (antes desse, verifica o .env example, você pode usar ele como .env normal, muda o nome da db e tals)
<p>-php artisan migrate:fresh --seed</p>
Pronto, estará pronto para utilizar e editar
<hr>
<p>A forma que eu modelei o banco:</p>
<img src="https://cdn.discordapp.com/attachments/828666736596877323/832069191850524732/unknown.png">
