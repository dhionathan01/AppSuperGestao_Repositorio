## Arquivo para salvar os comandos executados nas aulas:

* Criando controllers principal, sobrenos e contato:
```
php artisan make:controller PrincipalController
```
```
php artisan make:controller SobreNosController
```
```
php artisan make:controller ContatoController
```
```
php artisan route:list
```
![Alt text](image.png)

* Agrupando as rotas:
![Alt text](image-1.png)

* Criando controller com artisan:
```
php artisan make:controller TesteController
```
* Criando controller para o fornecedor:
```
php artisan make:controller FornecedorController
```
* Criando um model com migration :
* OBS: O "-m" especificado no final do comando é para informar que junto com a criação desse modelo é para executar uma migration
pois esse modelo vai ter executar operações de banco de dados
![Alt text](image-2.png)
```
 php artisan make:model SiteContato -m
```
* Criando as migrações:
* ```php artisan migrate```
* OBS erro :  could not find driver (SQL: PRAGMA foreign_keys = ON;) - Ao executar o migrate no sqlite
![Alt text](image-3.png)
* Sera necessário ir até o arquivo php.ini e remover o ; da instrução  sqlite_pdo
* ![Alt text](image-4.png)
* Sera necessário ir até o arquivo php.ini e remover o ; da instrução  pdo_mysql
![Alt text](image-5.png)
![Alt text](image-6.png)
* migration para alterar tabela existente:
![Alt text](image-7.png)
* Executando migrate:
![Alt text](image-8.png)
resultado:
![Alt text](image-9.png)
* Executando rollback, voltando para estrutura anterior a último migrate:
![Alt text](image-10.png)
resultado:
![Alt text](image-11.png)

* Rollback de passo duplo:
![Alt text](image-12.png)
![Alt text](image-13.png)

* Criando migration para tabela de produtos
![Alt text](image-14.png)

* Criando valores default e permitindo que outros possam ser nulos;
![Alt text](image-15.png)

* Criando tabela produto detalhes e definindo uma chave estrangeira 1 para 1 nela
![alt text](image-16.png)

* Visualizando as migrations existentes:
```php artisan migrate:status```
![alt text](image-17.png)

* Resetando o banco para o estado inicial com comando reset da migration:
- OBS: Esse comando executa todos o métodos down da migration de forma decremental até seu estaduo inicial, como se executasse um rollback para cada migration já criada.
``` php artisan migrate:reset```
![alt text](image-18.png)

* Refresh, esse comando executa um reset e logo em seguida um migrate , ele serve para zerar o banco e recriar:
```php artisan migrate:refresh```
![alt text](image-19.png)
* Fresh, drop todos os elementos do banco e dps executa o migrate para recriar os objetos
```php artisan:fresh```
![alt text](image-20.png)