### Comandos usados no tinker
* Instanciando uma classe no tinker:
![alt text](image.png)
* As clases instanciadas pelo eloquent orm, vem do banco de dados herdando como atributo todas as suas colunas:
![alt text](image-1.png)
* Logo podemos definir valores para seus respectivos atributos.
- Definindo um valor para o atributo nome em tempo de execuçãoo com tinker:
![alt text](image-2.png)
* Definindo alguns atributos e utilizando o metodo gettAtributes herdado de model no eloquent:
![alt text](image-3.png)
* Salvando os valores no banco de dados pelo tinker COMANDO:
``` $contato->save();```

![alt text](image-5.png)
![alt text](image-4.png)

![alt text](image-6.png)
![alt text](image-7.png)

#### Simulando erro devido ao nome da tabela:
![alt text](image-8.png) 
* Ajustando o erro sobrepondo o valor de table direto na instancia da orm:
![alt text](image-9.png)
* Sucesso na inserção dos valores:
![alt text](image-10.png)
![alt text](image-11.png)
* Criando registros com metodo estático create, utilizando o atributo fillable:
![alt text](image-12.png)
* Recuperando registros com all();
![alt text](image-13.png)
![alt text](image-14.png)

* Recuperando registros com find();
![alt text](image-15.png)
![alt text](image-16.png)

* Recuperand registros com where();
```
ClasseModel::where('nome_coluna', 'operador_comparacao', 'valor_comparacao');
```
![alt text](image-17.png)
No caso de pesquisas em igual não é necessário utilizar o = :
![alt text](image-18.png)

Utilizando operador like na busca com where:
![alt text](image-19.png)

* Busca com whereIn();
```
 $contatos = SiteContato::whereIn('campo_a_ser_comparado_por_igual', 'conjunto_de_parametros');
```
![alt text](image-20.png)

* Busca com whereNotIn();
```$contatos = SiteContato::whereNotIn('campo_a_ser_comparado_por_diferente', 'conjunto_de_parametros');```
![alt text](image-21.png)

* Buscando com whereBetween();
``` 
$contatos = SiteContato::whereBetween('campo_a_ser_comparado', parametros_de_intervalo);
```
![alt text](image-22.png)
* Buscando com whereNotBetween();
![alt text](image-23.png)
* Busca com where encadeados:
```
$contatos = SiteContato::where('nome', '<>', 'fernando')->whereIn('motivo_contato', [1, 2])->whereBetween('created_at', ['2024-01-01 00:00:00', '2024-02-29 23:59:59'])->get();
![alt text](image-24.png)
```
* Buscando registros com orWhere encadeados.
- OBS: Para concatenar OR conditions na query basta colocar um or antes dos métódos já conhecidos, como orWhereBetween, orWhereIN ...
```
 $contatos = SiteContato::where('nome', '<>', 'Fernando')->orWhereIn('motivo_contato', [1,2])->orWhereBetween('created_at', ['2024-01-01 00:00:00', '2024
-02-29 23:59:59'])->get();
```
![alt text](image-25.png)

* Recuperando valores com whereNull:
```
 $contatos = SiteContato::whereNull('updated_at')->get();
```
![alt text](image-26.png)

* Recuperando valores com whereNotNull:
```
 $contatos = SiteContato::whereNotNull('updated_at')->get();
```
![alt text](image-27.png)

* Recuperar por meio das funções where voltadas para datas:
- whereDate:
```
 $contatos = SiteContato::whereDate('created_at', '2024-02-19')->get()
```
![alt text](image-28.png)
- whereYear:
```
$contatos = SiteContato::whereYear('created_at', '2024')->get();
```
![alt text](image-29.png)
- whereMonth:
```
$contatos = SiteContato::whereMonth('created_at', '2')->get();
``` 
![alt text](image-30.png)
- whereDay:
```
$contatos = SiteContato::whereDay('created_at', '19')->get();
```
- whereTime :
OBS: O operador pode mudar de igual, para maior , menor ou diferente.
```
$contatos = SiteContato::whereTime('created_at', '=', '10:37:41')
```
![alt text](image-32.png)

Recuperando registros com whereColumn:
```
 $contatos = SiteContato::whereColumn('created_at', '>=', 'updated_at')->get()
```
![alt text](image-33.png)

* Recuperando registros aplicando precedência em operacoes lógica ou seja  subGrupos , no caso colocando parentenses na query...
```
$contatos = SiteContato::where(function ($query){$query->where('nome', 'like', '%dhionathan%')->orWhere('nome', 'like', '%helena%');})->where(function ($query){$quer
y->whereIn('motivo_contato', [1,2]);})->orWhereBetween('id', [4,6])->get();
```
![alt text](image-34.png)

* Recuperando registros e ordenando com orderBy:
```
$contatos = SiteContato::orderBy('nome', 'desc')->get();
```
![alt text](image-35.png)

* Combinando orderBy com condições where:
```
$contatos = SiteContato::whereBetween('id', [2,6])->orderBy('nome', 'desc')->get();

```
![alt text](image-36.png)

#### Estudando collections
* Instrução para recuperar o primeiro objeto de uma collection, uma collection é um array de objetos
```$contatos->first();```
![alt text](image-37.png)
* Instrução para recuperar o último objeto da collection:
```$contatos->last();```
![alt text](image-38.png)
* Reverter a ordem dos objetos:
 ```$contatos->reverse();```
![alt text](image-39.png)

* Convertendo o collection para array:
``` SiteContato::all()->toArray(); ```
![alt text](image-40.png)

* Convertendo para Json:
 SiteContato::all()->toJson();
![alt text](image-41.png)

* Método pluck:
- Ele criar um colection contendo somente o indice passado.
- E possível utilizar a funções nativas das collections sobre o retorno do pluck
- E possível já passar um parametro para que se torne um array associativo cmo pode ver na última opção

```SiteContato::all()->pluck('email');```
![alt text](image-42.png)

* Atualizando Registro com save
```  $fornecedor->save();```
![alt text](image-43.png)

* Atualizando registros com fill
OBS: vale ressaltar que para utilizar o metro fill, os atributos tem que de ser permitidos pelo atributo protect fillable na model:
![alt text](image-45.png)
```$fornecedor2->fill(['nome' => 'Fornecedor 789', 'site' => 'www.fornecedor789.com.br', 'email'=> 'contato@fornecedor789.com.br']); ```
![alt text](image-44.png)

* Atualizando fornecedores com update:
``` $fornecedor2 = Fornecedor::whereIn('id', [1,2])->update(['nome' => 'Fornecedor Teste Update', 'site' => 'Fornecedor Site Update']); ```
![alt text](image-46.png)

* Deletando registros com delete:
```$contato->delete();Site```
![alt text](image-47.png)
OBS: o comando destroy, pode ser passando tanto um array de ids ou collection de ids.
![alt text](image-48.png)

* Implementando softdelete na migration e executando:
![alt text](image-50.png)
![alt text](image-49.png)
OBS: O softdelete ele mantem o registro no banco, apenas preenche a coluna delete_at quando feito algum delete.
![alt text](image-51.png)
![alt text](image-52.png)
* Force delete remove defintivamente o dado da tabela, mesmo com o softDelete ativo:
![alt text](image-53.png)
![alt text](image-54.png)

* Recuperando todos os registros incluindo que foram deletados com o softdelete
```$fornecedor = Fornecedor::withTrashed()->get();```
![alt text](image-56.png)

* Recuperando apenas os que foram deletados com softdelete:
``` $fornecedor = Fornecedor::onlyTrashed()->get();```
![alt text](image-57.png)
* Restaurando registros com restore.
```$fornecedores[0]->restore(); ```
![alt text](image-58.png)

#### Iniciando Seeders
* Limpando o banco de dados
``` php artisan migrate:fresh ```
![alt text](image-59.png)
* Criando a seeder
```php artisan make:seeder FornecedoreSeeder```
* Executando as seeders:
``` $ php artisan db:seed ```
![alt text](image-60.png)

* Criando a seeder SiteContato:
``` php artisan make:seeder SiteContatoSeeder ```
* Executando a chamada de uma seeder específica:
```$ php artisan db:seed --class=SiteContatoSeeder```
![alt text](image-61.png)
* Criando uma factory:
```php artisan make:factory SiteContatoFactory --model=SiteContato ```
![alt text](image-62.png)
* Executando a factory na seeder:
```$ php artisan  db:seed --class=SiteContatoSeeder ```
![alt text](image-63.png)
* Visualização do factory no banco:
![alt text](image-64.png)