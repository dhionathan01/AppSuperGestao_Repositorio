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

