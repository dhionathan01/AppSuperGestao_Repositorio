### Anotações sobre estudo de middlewares.
* Criando primeiro middleware
``` 
 php artisan make:middleware LogAcessoMiddleware
```
![Criando middleware](image.png)
* Criando um middleware na pagina principal interceptadno a requisição e a travando dentro do prório middleware
![interceptação middleware](image-1.png)
* Criandoa  migration e a model LogAcesso
```
php artisan make:model LogAcesso -m 

```
![alt text](image-2.png)
![alt text](image-3.png)
* Exceutando migrate:
```
php artisan migrate
```
![alt text](image-4.png)
![alt text](image-5.png)
* Registrando passagem pelo middleware no banco:
![alt text](image-6.png)
#### OBS: utilizar o dd ao depurar request no middleware pois ele retornar uma objeto response, se usar print_r não ira funcionar.
* Visão geral do dd da $request:
![alt text](image-7.png)
* Salvando Log de Acesso:
![alt text](image-9.png)