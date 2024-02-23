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

* Criando registros com metodo estático create, utilizando o atributo fillable:
![alt text](image-12.png)
* Recuperando registros com all();
![alt text](image-13.png)
![alt text](image-14.png)

* Recuperando registros com find();
![alt text](image-15.png)
![alt text](image-16.png)

* Recuperand registros com where();
```ClasseModel::where('nome_coluna', 'operador_comparacao', 'valor_comparacao');```
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
#### Simulando erro devido ao nome da tabela:
![alt text](image-8.png) 
* Ajustando o erro sobrepondo o valor de table direto na instancia da orm:
![alt text](image-9.png)
* Sucesso na inserção dos valores:
![alt text](image-10.png)
![alt text](image-11.png)

