## O que é o projeto 4Ttodo?
O projeto se trata de um crud onde o desenvolvedor(estagiário) fará uma tela de cadastro de tarefas, Visualizar tarefas, editar tarefas e exclui-las.

## Funcionalidades do sistema:

### CADASTRO: <p>
O usuário poderá cadastrar no banco de dados quantas tarefas ele achar necessário. Após digitar a tarefa e clicar no botão de salvar, uma mensagem de tarefa cadastrada com sucesso será exibida na tela na cor verde, mas caso o usuário queira salvar com o campo de mensagens em branco, uma mensagem de campo obrigatório será exibida em vermelho na tela.

Após cadastrar todas as tarefas, o usuário poderá ver suas tarefas clicando no link listar, que irá direciona-lo para a tela de listagem.

### LISTAGEM:<p> 
Na tela de listagem, o usuário verá suas tarefas listadas uma abaixo da outra na ordem que foi cadastrada e ao lada de cada tarefa, terá links com as opções de atualizar, excluir e visualizar. Logo acima da lista, terá um link de novo registro, que redirecionará o usuário caso queira adicionar uma nova tarefa.

### ATUALIZAR:<p>
Caso o usuário deseje alterar uma tarefa, basta que ele clique no link de atualizar e ele redirecionará para a tela de atualização de tarefa. Nessa tela o usuário terá que preenher o campo com a nova tarefa e clicar no botão de atualizar, ao atualizar, ele será redirecionado de volta a lista de tarefas com a tarefa ja atualizada. Caso o usuário queira salvar a tarefa com o campo vazio, será exbidia uma mensagem de campo obrigatório na cor vermelho na tela.

### EXCLUIR:<p>
Caso o usuário queira excluir uma tarefa, basta que ele clique no link de excluir e ele redirecionará para a tela de exclusão de tarefa. Nessa tela o usuário tem a opção de excluir a tarefa selecionada pelo link ou a opção de cancelar caso tenha clicado no link por engano. Ao excluir, o usuário será redirecionado a tela de listagem de tarefas e uma mensagem de tarefa excluída com sucesso será exibida em verde na tela.

### VISUALIZAR:<p> 
Caso o usuário queira visualizar uma tarefa em específica, basta que ele clique no link de visualizar e ele redirecionará para a tela de visualização de tarefa. Nesta tela o usuário poderá ver somente a tarefa selecionada e seu ID, abaixo dela terá o botão de voltar que redirecionará para a tela de listar.


## Sobre o framework Laravel
<img src="https://i.ytimg.com/vi/CMwhGe12nxw/maxresdefault.jpg">
<p align="center">

Laravel é um dos frameworks para PHP mais utilizados no mercado. É um framework de aplicação web com sintaxe expressiva e elegante. O Laravel agiliza o processo de desenvolvimento flexibilizando tarefas comuns em seus projetos, como rotas, models, controllers, todos com uma estrutura já pré definida.<p> A versão utilizada neste projeto foi o Laravel 11.



## Como criar o projeto laravel
```bash
### Primeiramente é preciso baixar o PHP com o comando:<p> 
- sudo dnf install php

### Para verificar a versão do PHP:<p>
-  php -v

### Em seguida, é preciso instalar o composer na máquina com o comando: <p>
- php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

### Após isso, rode o comando:<p>
- php -r "if (hash_file('sha384', 'composer-setup.php') 'dac665fdd8ec78b9800061b4150413ff2e3b6f88543c6f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

### Para finalizar, rode os seguinte comandos:<p>
- php composer-setup.php
- php -r "unlink('composer-setup.php');"

### Depois do PHP e Composer instalados, já é é possível criar um projeto laravel, através do comando Create project comando:
- composer create-project laravel/laravel:^10.0 example-app

## Instalando e fazendo conexão com o BD:<p>
### Para armazenar as tarefas no banco de dados, use o Sqlite com o dbeaver.
### Instalando Sqlite:
- $ sudo dnf install sqlite

### OBS: 
- O Dbeaver pode ser baixado e  instalado direto do DBeaver Community, clicando no instalador Linux RPM Package(installer)




### Em seguida, inicie o servidor de desenvolvimento local do Laravel, Artisan serve:
- php artisan serve
```
