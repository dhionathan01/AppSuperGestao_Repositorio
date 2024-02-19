### Comandos usados no tinker
* Instanciando uma classe no tinker:
![alt text](image.png)
* As clases instanciadas pelo eloquent orm, vem do banco de dados herdando como atributo todas as suas colunas:
![alt text](image-1.png)
* Logo podemos definir valores para seus respectivos atributos.
- Definindo um valor para o atributo nome em tempo de execução com tinker:
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