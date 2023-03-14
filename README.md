## Rede Social de livros

Este projeto feito durante o curso técnico em informática para internet tem como objetivo exemplar o que seria uma rede social de livros em pequena escala. Por este site é possível fazer uma postagem sobre algum livro e avaliar postagens. Há dois tipos de usuarios, o administrador e o comum, o comum pode avaliar e postar normalmente, o administrador tem além dessas funcionalidades, a função de aprovar postagem, antes que a mesma apareça no feed.

## Teste Localmente
Para testar localmente é necessário instalar o composer em seu projeto e modificar o .env (como o db_password) conforme seu banco de dados, após isso, gere uma chave para o projeto rodando o seguinte comando no terminal: php artisan key:generate e por último rode: php artisan serve. Ao rodar o último comando um link deve aparecer, click segurando o botão "ctrl" e o navegador com o site será aberto.

Ao acessar, você pode criar uma nova conta ou entrar com o login "usuario" e senha "123". Dessa forma estará logado como um usuário comum. 
Para visualizar sua publicação, logue como administrador. Login: "usuario_admin", senha: 123,. Após isso, entre na aba aprovações e clique em aprovar embaixo da publicação que deseja aprovar.
