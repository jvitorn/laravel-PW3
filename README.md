# Repositório para exercicios da aula de PW3

## adicionando mysql
+ Na barra de ferramentas vá em: View > Project Setup.
+ Clique em Change Base Image > Update Docker Configuration
+ Selecione DEFAULT + mysql
+ Clique em "Yes, generate..."
+ Salve as alterações no github
+ Saia do workspace, para-lo e exclui-lo
+ Crie um novo workspace com a URL do repositório onde voce salvou as atualizações.
+ MYSQL está instalado!

## adicionado phpmyadmin
> No meu caso eu criei uma pasta public para poder usar o comando "apachectl start" sem problemas
+ Entre na pasta public pelo comando: cd public
+ Insira o comando no terminal: composer create-project phpmyadmin/phpmyadmin
+ Tome um café enquanto espera.
+ Abra o terminal do mysql (basta digitar mysql no terminal)
+ No terminal do mysql digitar : SET PASSWORD FOR root@localhost = PASSWORD('sua senha');
+ Aperte CTRL + Z para sair do terminal do mysql
+ Para verificar se o phpmyadmin está funcionando corretamente, dê o comando: apachectl start
+ Na url digite: /phpmyadmin
+ Nos campos de login digite root + a senha que voce inseriu pelo mysql.
+ Se tudo deu certo irá abrir o painel do phpmyadmin normalmente.