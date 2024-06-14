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
- Atualize as dependências do projeto no seu ambiente local com o comando:
```
composer update
```
- Agora, ainda na raiz do repositório execute (para realizar as migrações, criar as tabelas e injetar alguns valores no banco de dados):
```
php artisan migrate:fresh --seed
```
- Precisamos colocar nosso servidor Laravel no ar, fazemos isso com:
```
php artisan serve
```
- Neste momento já pode-se iniciar os teste no Postman:
- Para testar o CRUD de Categorias: [<img src="https://run.pstmn.io/button.svg" alt="Run In Postman" style="width: 128px; height: 32px;">](https://app.getpostman.com/run-collection/25152432-f27986ed-cda1-4bb1-a920-34d17c7dcddb?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D25152432-f27986ed-cda1-4bb1-a920-34d17c7dcddb%26entityType%3Dcollection%26workspaceId%3D2e130b77-f16e-4748-87e5-7b29c357e85e)
- Para testar o CRUD de Produtos: [<img src="https://run.pstmn.io/button.svg" alt="Run In Postman" style="width: 128px; height: 32px;">](https://app.getpostman.com/run-collection/25152432-c720f63f-5434-4f38-96e7-dd8a4475f1c1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D25152432-c720f63f-5434-4f38-96e7-dd8a4475f1c1%26entityType%3Dcollection%26workspaceId%3D2e130b77-f16e-4748-87e5-7b29c357e85e)
- _Caso você esteja utilizando Windows ou MAC, e tiver instalado o **PHP** e **Composer** pelo **Lavarel Herd**, você pode se deparar com um problema ao usar o comando acima (php artisan serve): "Failed to listen on 127.0.0.1:8000 (reason: ?)". Para contornar isso, você pode inicializar o servidor diretamente com um comando PHP Start (php -S):_
```
php -S 127.0.0.1:8000 -t public
```
### Dicas
É preciso criar primeiro uma **Categoria** para depois criar um **Produto**. Motivo: para você criar um produto, você precisa **obrigatoriamente** de um **id** de uma categoria. Este CRUD valida esta regra, logo, ao tentar criar um produto sem id de categoria, você receberá um erro.
