[![Gitpod Ready-to-Code](https://img.shields.io/badge/Gitpod-Ready--to--Code-blue?logo=gitpod)](https://gitpod.io/#https://github.com/Jhonatancs/laravel-PW3) 

# Repositório para exercicios da aula de PW3

## Adicionando mysql 
+ Na barra de ferramentas vá em: View > Project Setup.
+ Clique em Change Base Image > Update Docker Configuration.
+ Selecione DEFAULT + mysql
+ Clique em "Yes, generate..."
+ Salve as alterações no github
+ Saia do workspace, para-lo e exclui-lo
+ Crie um novo workspace com a URL do repositório onde voce salvou as atualizações.
+ MYSQL está instalado!

## Adicionado phpmyadmin
+ Insira o comando no terminal: composer create-project phpmyadmin/phpmyadmin
+ Tome um café enquanto espera.
+ Abra o terminal do mysql (basta digitar mysql no terminal)
+ No terminal do mysql digitar : SET PASSWORD FOR root@localhost = PASSWORD('sua senha');
+ Aperte CTRL + Z para sair do terminal do mysql
+ Para verificar se o phpmyadmin está funcionando corretamente, entre na pasta do phpmyadmin
+ insira o comando "php -S localhost:8080"
+ Abra o link da porta. 
+ Nos campos de login digite root e a senha que voce inseriu pelo mysql.
+ Se tudo deu certo irá abrir o painel do phpmyadmin normalmente.

## Adicionando laravel
> Voce pode criar o projeto dentro ou fora da public
+ No terminal insira o comando: composer global require laravel/installer
+ Em seguida insira o comando: composer create-project --prefer-dist laravel/laravel {NOME DO SEU PROJETO}
> Onde estão as chaves no comando acima substituia pelo nome do seu projeto SEM CHAVES.
+ Entre na pasta do seu projeto pelo comando "cd NomeDaPasta"
+ Digite php artisan serve
+ Verifique se o laravel está funcionando corretamente.

## Vinculando o projeto laravel com um banco de dados
+ Dentro da pasta do seu projeto, abra o arquivo .env
+ Procure DB_CONNECTION e verifique se está definido pra mysql, se nao estiver,altere para mysql
+ Em DB_DATABASE coloque o nome do seu banco de dados
+ Em DB_PASSWORD insira a mesma senha que usou para acessar o phpmyadmin
+ Para verificar se está conectado ao DB, insira o comando: php artisan migrate
+ Se tudo estiver certo serão adicionadas algumas tabelas no seu banco de dados
+ Se der algum erro, verifique no phpmyadmin se o banco de dados está criado e se é o mesmo nome que voce colocou no arquivo .env