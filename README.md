# Repositório para o teste Motoca Systems - Desenvolvedor Back-End
Este repositório é referente ao teste para vaga de Desenvolvedor de Software Jr da Motoca Systems. Você pode acessar o teste aqui: https://github.com/WellitonCunha/teste-motoca-systems

## Tecnologias utilizadas nesta solução para o problema proposto:
PHP + Laravel
PostgreSQL
Docker

## Instruções
Para executar a minha solução de CRUD com Laravel + PostgreSQL, siga essas etapas:
- Verifique se você tem Docker e Laravel instalado;
- Verifique se a porta 5432 não está sendo usada em algum processo na sua máquina;
- Feito as verificações anteriores, agora é só baixar/clonar este repositório para sua máquina;
- Depois, dentro do diretório raiz do repositório, execute (para criar o container do nosso banco de dados):
```
docker-compose up -d
```
- Agora, ainda na raiz do repositório execute (para realizar as migrações, e criar as tabelas no banco de dados):
```
php artisan migrate
```
- Agora vamos colocar nossa API Laravel no ar com:
```
php artisan serve
```
- Agora basta copiar o endereço que o Laravel iniciou o servidor (geralmente **http://127.0.0.1:8000**) e colar este endereço no Postman com as devidas rotas inseridas (solicitadas no desafio), para iniciar os testes.