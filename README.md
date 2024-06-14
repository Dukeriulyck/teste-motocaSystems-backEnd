# Repositório para o teste Motoca Systems - Desenvolvedor Back-End
Este repositório é referente ao teste para vaga de Desenvolvedor de Software Jr da Motoca Systems. Você pode acessar o teste aqui: https://github.com/WellitonCunha/teste-motoca-systems

## Tecnologias utilizadas nesta solução para o problema proposto:
- PHP + Laravel
- PostgreSQL
- Docker

## Instruções
Para executar a minha solução de CRUD com Laravel + PostgreSQL, siga essas etapas:
- Verifique se você tem Docker e Laravel instalado;
- Verifique se a porta 5432 não está sendo usada em algum processo na sua máquina;
- Feito as verificações anteriores, agora é só baixar/clonar este repositório para sua máquina;
- Depois, dentro do diretório raiz do repositório, execute (para criar o container do nosso banco de dados):
```
docker-compose up -d
```
- Precisamos atualizar as dependências do nosso projeto, utilize o comando:
```
composer update
```
- Agora, ainda na raiz do repositório execute (para realizar as migrações, e criar as tabelas no banco de dados):
```
php artisan migrate
```
- Precisamos colocar nosso servidor Laravel no ar, fazemos isso com:
```
php artisan serve
```
- Neste momento basta copiar o endereço que o Laravel iniciou o servidor (geralmente **http://127.0.0.1:8000**) e colar este endereço no Postman com as devidas rotas solicitadas pelo desafio, para iniciar os testes.
- _Caso você esteja utilizando Windows ou MAC, e tiver instalado o **PHP** e **Composer** pelo **Lavarel Herd**, você pode se deparar com um problema ao usar o comando acima (php artisan serve): "Failed to listen on 127.0.0.1:8000 (reason: ?)". Para contornar isso, você pode inicializar o servidor diretamente com um comando PHP Start (php -S):_
```
php -S localhost:8000 -t public
```
