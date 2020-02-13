# Repositório para exercicios da aula de PW3

## adicionando mysql
+ View > Project Setup.
+ Clicar em Change Base Image > Update Docker Configuration
+ Selecionar DEFAULT + mysql
+ Cliar em "Yes, generate..."
+ Salvar alterações no github
+ Sair do workspace, para-lo e exclui-lo
+ Criar um novo workspace com a URL do repositório onde voce salvou as atualizações.
+ MYSQL está instalado!

## adicionado phpmyadmin
> no meu caso eu criei uma pasta public para poder usar o comando "apachectl start" sem problemas
+ entre na pasta public pelo comando: cd public
+ insira o comando no terminal: composer create-project phpmyadmin/phpmyadmin
+ tome um café enquanto espera.
+ abra o terminal do mysql (basta digitar mysql no terminal)
+ no terminal do mysql digitar : SET PASSWORD FOR root@localhost = PASSWORD('sua senha');
+ aperte CTRL + Z para sair do terminal do mysql
+ para verificar se o phpmyadmin está funcionando corretamente, dê o comando: apachectl start
+ na url digite: /phpmyadmin
+ nos campos de login digite root + a senha que voce inseriu pelo mysql.
+ se tudo deu certo irá abrir o painel do phpmyadmin normalmente.