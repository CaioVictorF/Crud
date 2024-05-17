# *O que é o projeto 4Ttodo?*
O projeto se trata de um crud onde o desenvolvedor(estagiário) fará uma tela de cadastro de tarefas, Visualizar tarefas, editar tarefas e exclui-las.

# *Tecnologias utilizadas:*
### Para backend<p>
1. PHP<p>
2. Banco de dados SQLite<p>
3. DBeaver<p>
4. Framework Laravel (Versão 11)<p>
### Para frontend<p>
1. HTML<p>
2. CSS<p>

# *Funcionalidades do sistema:*

### CADASTRO: <p>
O usuário poderá cadastrar no banco de dados quantas tarefas ele achar necessário. 
<p align="center"> <img alt="create" title="create" src="storage/img/prints/create.png" width="100px"></p>

Após digitar a tarefa e clicar no botão de salvar, uma mensagem de tarefa cadastrada com sucesso será exibida na tela na cor verde.

<p align="center"> <img alt="create-successmessage" title="create-successmessage" src="storage/img/prints/create-successmessage.png" width="100px"></p>

mas caso o usuário queira salvar com o campo de mensagens em branco, uma mensagem de campo obrigatório será exibida em vermelho.

<p align="center"> <img alt="create-errormessage" title="create-errormessage" src="storage/img/prints/create-errormessage.png" width="100px"></p>

**Após cadastrar todas as tarefas, o usuário poderá ver suas tarefas clicando no link listar, que irá direciona-lo para a tela de listagem.**

### LISTAGEM:<p> 
Na tela de listagem, o usuário verá suas tarefas listadas uma abaixo da outra na ordem que foi cadastrada e ao lada de cada tarefa, terá links com as opções de atualizar, excluir e visualizar. Logo acima da lista, terá um link de novo registro, que redirecionará o usuário caso queira adicionar uma nova tarefa.

<p align="center"> <img alt="listagem" title="listagem" src="storage/img/prints/listagem.png" width="100px"></p>

### ATUALIZAR:<p>
Caso o usuário deseje alterar uma tarefa, basta que ele clique no link de atualizar e ele redirecionará para a tela de atualização de tarefa. Nessa tela o usuário terá que preenher o campo com a nova tarefa e clicar no botão de atualizar e será redirecionado de volta a lista de tarefas com a tarefa ja atualizada. Na tela de listagem, mostrará a tarefa atualizada e uma mensagem de tarefa atualizada com sucesso.

<p align="center"> <img alt="update" title="update" src="storage/img/prints/update.png" width="100px"></p>


<p align="center"> <img alt="update2successmessage" title="update2successmessage" src="storage/img/prints/update2successmessage.png" width="100px"></p>

Caso o usuário queira salvar a tarefa com o campo vazio, será exbidia uma mensagem de campo obrigatório na cor vermelho na tela.

<p align="center"> <img alt="updatevoiderrormessage" title="updatevoiderrormessage" src="storage/img/prints/updatevoiderrormessage.png" width="100px"></p>


### EXCLUIR:<p>
Caso o usuário queira excluir uma tarefa, basta que ele clique no link de excluir e ele redirecionará para a tela de exclusão de tarefa. Nessa tela o usuário tem a opção de excluir a tarefa selecionada pelo link ou a opção de cancelar caso tenha clicado no link por engano. 

<p align="center"> <img alt="delete" title="delete" src="storage/img/prints/delete.png" width="100px"></p>

Ao excluir, o usuário será redirecionado a tela de listagem de tarefas e uma mensagem de tarefa excluída com sucesso será exibida em verde na tela.

<p align="center"> <img alt="delete-successmessage" title="delete-successmessage" src="storage/img/prints/delete-successmessage.png" width="100px"></p>

### VISUALIZAR:<p> 
Caso o usuário queira visualizar uma tarefa em específica, basta que ele clique no link de visualizar e ele redirecionará para a tela de visualização de tarefa. Nesta tela o usuário poderá ver somente a tarefa selecionada e seu ID, abaixo dela terá o botão de voltar que redirecionará para a tela de listar.

<p align="center"> <img alt="view" title="view" src="storage/img/prints/view.png" width="100px"></p>


# *Sobre o framework Laravel*
<p align="center"> <img alt="laravel" title="laravel" src="storage/img/prints/laravel.jpg" width="100px"></p>

Laravel é um dos frameworks para PHP mais utilizados no mercado. É um framework de aplicação web com sintaxe expressiva e elegante. O Laravel agiliza o processo de desenvolvimento flexibilizando tarefas comuns em seus projetos, como rotas, models, controllers, todos com uma estrutura já pré definida.<p> A versão utilizada neste projeto foi o Laravel 11.

---
# Como criar o projeto laravel
### 1. instale o PHP com o comando:<p> 
---
    sudo dnf install php
---
### 1.2 Para verificar a versão do PHP:<p>
---
    php -v
---
### 2. instale o composer com o comando: <p>
---
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
---
### 2.2 Após isso, rode o comando:<p>
---
    php -r "if (hash_file('sha384', 'composer-setup.php') 'dac665fdd8ec78b9800061b4150413ff2e3b6f88543c6f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
---
### 3. Para finalizar, rode os seguinte comandos:<p>
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

### 3.2 Depois do PHP e Composer instalados, já é é possível criar um projeto laravel, através do comando Create project comando:

    composer create-project laravel/laravel:^10.0 example-app

# Instalando e fazendo conexão com o BD:<p>
Para armazenar as tarefas no banco de dados, use o Sqlite com o dbeaver.
### Instalando Sqlite:
    sudo dnf install sqlite
---
### Obs: O Dbeaver pode ser baixado e  instalado direto do DBeaver Community, clicando no instalador Linux RPM Package(installer)

## Fazendo conexão com o banco:
    Ao abrir o DBeaver, no canto superior esquerdo você clicará na opção de arquivos.
    Ao clicar em arquivos, ele abrirá uma janela que mostrará a opção "novo".
    Ao clicar em novo, ele abrirá outra janela e mostrará algumas opções do DBeaver, incluindo a opção de conexão de banco de dados.
    Depois de clicar na conexão de banco, clique em avançar, selecione o bando SQLite e avance novamente.

### Obs: Após avançar, ele irá abrir uma nova janela solicitando o caminho para conexão do banco de dados com seu projeto. Você vai selecionar a opção de criar e irá ser redirecionado para a janela de arquivos. Nela você vai escolher o projeto no qual deseja conectar com o banco de dados.
=======
    composer create-project laravel/laravel example-app

# *Instalando e fazendo conexão com o BD:*<p>
**Para armazenar as tarefas no banco de dados, use o Sqlite com o dbeaver.**
### Instalando Sqlite:
    sudo dnf install sqlite

**Obs: O Dbeaver pode ser baixado e  instalado direto do DBeaver Community, clicando no instalador Linux RPM Package(installer)**

## Fazendo conexão com o banco:
    Ao abrir o DBeaver, no canto superior esquerdo você clicará na opção de arquivos.
    Ao clicar em arquivos, ele abrirá uma janela que mostrará a opção "novo".
    Ao clicar em novo, ele abrirá outra janela e mostrará algumas opções do DBeaver, incluindo a opção de conexão de banco de dados.
    Depois de clicar na conexão de banco, clique em avançar, selecione o bando SQLite e avance novamente.


### Obs: Após avançar, ele irá abrir uma nova janela solicitando o caminho para conexão do banco de dados com seu projeto. Você vai selecionar a opção de criar e irá ser redirecionado para a janela de arquivos. Nela você vai escolher o projeto no qual deseja conectar com o banco de dados.

# *Iniciando o servidor no terminal*:
    php artisan serve



## Em seguida, inicie o servidor de desenvolvimento local do Laravel, Artisan serve:
    php artisan serve

**Depois de iniciar o servidor de desenvolvimento Artisan, seu aplicativo estará acessível no seu navegador da Web em http://localhost:8000.**


