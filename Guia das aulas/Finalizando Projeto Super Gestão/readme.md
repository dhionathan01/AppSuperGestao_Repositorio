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

* Lista de rotas com a criação do resources:

```php artisan route:list ```

![alt text](image-3.png)

* Criando modelo unidade:

``` php artisan make:model Unidade ``` 
![alt text](image-4.png)

* Inserindo Produtos e Unidade pelo Tinker:
```
> use App\Unidade;
> Unidade::create(['unidade'=> 'UN', 'descricao' => 'Unidade']);
```
```
> use App\Produto;
> Produto::create(['nome'=> 'Geladeira', 'descricao'=> 'Geladeira/Refrigerador Frost Free 375 litros', 'peso'=> '60', 'unidade_id'=> '1']);
```
![terminal tinker- inserindo registros](image-5.png)

* Criando model Produto Detalhe.

```$ php artisan make:model ProdutoDetalhe```

![alt text](image-6.png)

* Criando controller ProdutoDetalhe.

```php artisan make:controller --resource ProdutoDetalheControlle```
![alt text](image-7.png)

* Ajuste na tabela produtoDetalhe - Criei errado durante o curso, reparando pelo migrate

```$ php artisan make:migration alter_table_produto_detalhes```

![alt text](image-8.png)
![alt text](image-9.png)

#### Fazendo relacionamento com hasOne e belongsTo para nomes não padronizados:

* Criando os models Item e ItemDetalhe, para substituir pelo produto e produtoDetalhe

```$ php artisan make:model Item ```
```$ php artisan make:model ItemDetalhe ```
![alt text](image-10.png)

* Criando migration para fazer relacionaemnto de produtos a fornecedores:

```php artisan make:migration alter_produtos_relacionamento_fornecedores```

![alt text](image-11.png)

