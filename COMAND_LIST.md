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