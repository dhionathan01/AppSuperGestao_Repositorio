### Finalização do projeto Supergestão.
*  Fazendo a listagem de fornecedores:

![Listagem](image.png)

* Método Paginate métodos count(), total(), firstItem() e lastItem()

![Paginate Metodos](image-1.png)

* Recriando o ProdutoController com resources

```
php artisan make:controller --resource ProdutoController --model=Produto
```
![Criando Controller com resource](image-2.png)