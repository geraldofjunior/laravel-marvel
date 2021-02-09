# Laravel-marvel

Este projeto é uma implementação de parte da API da Marvel, escrito em Laravel.
d
## Instalação
### Pré-requisitos
Verifique se os seguintes itens estão instalados em seu sistema:
 - PHP (este projeto foi feito no PHP 8)
 - MySQL ou MariaDB
 - Composer

Caso não esteja, providencie a instalação. No Linux geralmente é só uma questão de usar o seu gerenciador de pacotes (apt, yum, pacman, etc), enquanto no Windows pode ser resolvido baixando o XAMPP (ou pacotes semelhantes, sendo que instalar separadamente cada programa do pacote também funciona) e o Composer.

### Instalação local

Clone esse repositório. Depois acesse a pasta **api** e execute:

    composer install
Isso vai instalar o Laravel e suas dependências.

Agora acesse o banco de dados e crie o banco da aplicação, o usuário e dê permissões do banco para ele. Isso pode ser feito interagindo usando comandos SQL via console ou através de algum gerenciador (MySQL Workbench, por exemplo).

Renomeie o arquivo **.env.example** para **.env**. Depois edite esse arquivo e coloque nele as configurações do banco de dados.

Depois disso, rode:

    php artisan migrate:fresh —seed

Isso vai criar todas as tabelas e gerar os dados da aplicação.

### Uso
Depois de instalado, basta entrar na pasta api e executar:

    php artisan serve