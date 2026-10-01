# Subconsultas y Operadores IN, NOT IN, ANY y ALL en SQL

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es una subconsulta en SQL.
- Entender por qué se utilizan las subconsultas.
- Diferenciar los principales tipos de subconsultas:
  - Escalonada.
  - Lista.
  - Correlacionada.
- Comprender el funcionamiento de los operadores:
  - IN
  - NOT IN
  - ANY
  - ALL
- Utilizar estos conceptos para resolver consultas más complejas.
- Interpretar ejemplos reales relacionados con clientes, productos, pedidos y empleados.

---

## Introducción

Hasta ahora hemos realizado consultas directamente sobre una tabla utilizando condiciones simples.

Sin embargo, en muchos casos necesitamos responder preguntas más complejas.

Por ejemplo:

- ¿Qué empleados cobran más que el salario medio?
- ¿Qué productos han sido pedidos por algún cliente?
- ¿Qué clientes nunca han realizado un pedido?

Para responder a este tipo de preguntas, SQL permite utilizar **subconsultas**.

Una subconsulta es una consulta que se ejecuta dentro de otra consulta.

Podemos imaginar una subconsulta como una pregunta auxiliar que se responde primero para ayudar a contestar la pregunta principal.

### ¿Por qué son importantes?

Las bases de datos suelen contener mucha información relacionada entre sí. En muchas ocasiones, la respuesta a una pregunta depende de conocer antes otro dato.

Por ejemplo:

> Para saber qué empleados cobran más que la media, primero necesitamos calcular la media.

Una subconsulta permite dividir el problema en dos pasos:

1. Obtener el dato que necesitamos.
2. Utilizar ese dato para realizar la consulta principal.

---

## Conceptos teóricos

### ¿Qué es una subconsulta?

Una **subconsulta** es una consulta SQL que se encuentra dentro de otra consulta SQL.

La consulta interior genera un resultado que será utilizado por la consulta exterior.

### Estructura general

```sql
SELECT campo
FROM tabla
WHERE columna = (
    SELECT campo
    FROM otra_tabla
);
```

### Explicación

```sql
SELECT campo
```

Selecciona la información que queremos obtener.

```sql
FROM tabla
```

Indica de qué tabla queremos obtener los datos.

```sql
WHERE columna =
```

Aplica una condición.

```sql
(
    SELECT campo
    FROM otra_tabla
)
```

Es la subconsulta. Su resultado será utilizado por la consulta principal.

---

### ¿Para qué sirven las subconsultas?

Las subconsultas permiten:

- Resolver consultas complejas paso a paso.
- Comparar datos con resultados calculados.
- Filtrar información utilizando otras consultas.
- Relacionar datos entre varias tablas.
- Evitar cálculos manuales.

---

## Subconsulta escalonada

### ¿Qué es?

Es una subconsulta cuyo resultado es utilizado por una consulta superior.

Primero se ejecuta la consulta interna y después la consulta principal.

### ¿Cuándo se utiliza?

Cuando necesitamos obtener un valor antes de ejecutar la consulta principal.

### Ejemplo

Queremos obtener los empleados que cobran más que el salario medio de la empresa.

```sql
SELECT Nombre
FROM Empleados
WHERE Salario >
(
    SELECT AVG(Salario)
    FROM Empleados
);
```

### Explicación paso a paso

```sql
SELECT AVG(Salario)
FROM Empleados
```

Calcula el salario medio de todos los empleados.

Supongamos que devuelve:

```text
2500
```

Después SQL ejecuta:

```sql
SELECT Nombre
FROM Empleados
WHERE Salario > 2500;
```

Mostrando únicamente los empleados que ganan más de 2500.

---

## Subconsulta de lista

### ¿Qué es?

Es una subconsulta que devuelve varios valores en lugar de uno solo.

Normalmente se utiliza junto con el operador `IN`.

### ¿Cuándo se utiliza?

Cuando queremos comparar un dato con una lista de resultados.

### Ejemplo

Mostrar los clientes que han realizado pedidos.

```sql
SELECT Nombre
FROM Clientes
WHERE IdCliente IN
(
    SELECT IdCliente
    FROM Pedidos
);
```

### Explicación paso a paso

La subconsulta:

```sql
SELECT IdCliente
FROM Pedidos
```

Podría devolver:

```text
1
3
5
7
```

Posteriormente SQL busca:

```sql
SELECT Nombre
FROM Clientes
WHERE IdCliente IN (1,3,5,7);
```

Mostrando únicamente esos clientes.

---

## Subconsulta correlacionada

### ¿Qué es?

Una subconsulta correlacionada es una subconsulta que necesita utilizar información de la consulta principal para ejecutarse.

A diferencia de las anteriores, no puede ejecutarse por sí sola.

### ¿Cuándo se utiliza?

Cuando el resultado depende de cada fila que está siendo analizada.

### Ejemplo

Mostrar empleados cuyo salario sea superior a la media de su departamento.

```sql
SELECT Nombre
FROM Empleados E
WHERE Salario >
(
    SELECT AVG(Salario)
    FROM Empleados
    WHERE Departamento = E.Departamento
);
```

### Explicación paso a paso

Supongamos que estamos evaluando un empleado del departamento Ventas.

La subconsulta se transforma en:

```sql
SELECT AVG(Salario)
FROM Empleados
WHERE Departamento = 'Ventas';
```

Obtiene la media salarial de Ventas.

Después compara el salario del empleado con esa media.

Este proceso se repite para cada empleado.

---

## Operador IN

### ¿Qué es?

El operador `IN` permite comprobar si un valor pertenece a una lista de valores.

### ¿Por qué utilizarlo?

Porque es más sencillo que escribir muchas condiciones con `OR`.

### Ejemplo sin IN

```sql
SELECT *
FROM Productos
WHERE Categoria = 'Informática'
   OR Categoria = 'Telefonía'
   OR Categoria = 'Audio';
```

### Ejemplo con IN

```sql
SELECT *
FROM Productos
WHERE Categoria IN
(
    'Informática',
    'Telefonía',
    'Audio'
);
```

### Explicación

```sql
Categoria IN (...)
```

Significa:

> "La categoría debe estar dentro de esta lista."

---

## Operador NOT IN

### ¿Qué es?

Es el operador contrario de `IN`.

Permite seleccionar valores que no pertenecen a una lista.

### ¿Cuándo se utiliza?

Cuando queremos excluir determinados resultados.

### Ejemplo

Mostrar clientes que nunca han realizado pedidos.

```sql
SELECT Nombre
FROM Clientes
WHERE IdCliente NOT IN
(
    SELECT IdCliente
    FROM Pedidos
);
```

### Explicación paso a paso

Primero se obtiene la lista de clientes con pedidos.

```sql
SELECT IdCliente
FROM Pedidos
```

Supongamos que devuelve:

```text
1
2
3
```

Después SQL busca clientes cuyo identificador no sea:

```text
1
2
3
```

Mostrando únicamente clientes sin pedidos.

---

## Operador ANY

### ¿Qué es?

El operador `ANY` compara un valor con varios valores devueltos por una subconsulta.

La condición será verdadera si se cumple para al menos uno de ellos.

### Forma de pensar

Podemos interpretarlo como:

> "Mayor que cualquiera de los valores."

o

> "Mayor que al menos uno de los valores."

### Ejemplo

Mostrar productos cuyo precio sea mayor que algún producto de la categoría Tecnología.

```sql
SELECT Nombre
FROM Productos
WHERE Precio > ANY
(
    SELECT Precio
    FROM Productos
    WHERE Categoria = 'Tecnología'
);
```

### Ejemplo numérico

La subconsulta devuelve:

```text
100
200
300
```

Si analizamos un producto de precio:

```text
150
```

Comparaciones:

```text
150 > 100  → Verdadero
150 > 200  → Falso
150 > 300  → Falso
```

Como existe una comparación verdadera, la condición se cumple.

---

## Operador ALL

### ¿Qué es?

El operador `ALL` compara un valor con todos los valores devueltos por la subconsulta.

La condición solamente será verdadera cuando se cumpla para todos ellos.

### Forma de pensar

Podemos interpretarlo como:

> "Mayor que todos los valores."

### Ejemplo

Mostrar productos cuyo precio sea superior a todos los productos de la categoría Tecnología.

```sql
SELECT Nombre
FROM Productos
WHERE Precio > ALL
(
    SELECT Precio
    FROM Productos
    WHERE Categoria = 'Tecnología'
);
```

### Ejemplo numérico

La subconsulta devuelve:

```text
100
200
300
```

Para un producto con precio:

```text
350
```

Las comparaciones serían:

```text
350 > 100 → Verdadero
350 > 200 → Verdadero
350 > 300 → Verdadero
```

Como todas son verdaderas, el producto cumple la condición.

Si el precio fuese:

```text
250
```

La comparación:

```text
250 > 300
```

Sería falsa.

Por tanto, no aparecería en el resultado.

---

## Diferencia entre ANY y ALL

Supongamos que la subconsulta devuelve:

```text
10
20
30
```

### Utilizando ANY

```sql
WHERE valor > ANY (...)
```

Equivale conceptualmente a:

```text
valor > 10
O
valor > 20
O
valor > 30
```

Basta con cumplir una de las comparaciones.

### Utilizando ALL

```sql
WHERE valor > ALL (...)
```

Equivale conceptualmente a:

```text
valor > 10
Y
valor > 20
Y
valor > 30
```

Debe cumplir todas las comparaciones.

### Regla fácil de recordar

- ANY = al menos uno.
- ALL = todos.

---

## Analogía del mundo real

Imaginemos una biblioteca.

### Subconsulta escalonada

Pregunta:

> ¿Qué libros tienen más páginas que la media de todos los libros?

Primero calculamos la media de páginas.

Después buscamos los libros que superan esa media.

---

### Subconsulta de lista

Pregunta:

> ¿Qué usuarios han tomado prestado algún libro?

Primero obtenemos una lista de usuarios con préstamos.

Después utilizamos esa lista para buscar sus nombres.

---

### Subconsulta correlacionada

Pregunta:

> ¿Qué libros tienen más páginas que la media de su categoría?

No existe una única media.

Cada categoría tiene su propia media.

Por tanto, debemos recalcular la media para cada categoría.

---

### Operador IN

Es como consultar una lista de invitados.

Si tu nombre aparece en la lista:

```text
Estás IN
```

---

### Operador NOT IN

Si tu nombre no aparece:

```text
Estás NOT IN
```

---

### Operador ANY

Supongamos que varios amigos obtienen estas notas:

```text
5
6
8
```

Si tu nota es superior a alguna de ellas:

```text
Mayor que ANY
```

---

### Operador ALL

Si tu nota es superior a todas:

```text
Mayor que ALL
```

---

## Ejemplos prácticos

### Ejemplo 1. Clientes que han realizado pedidos

```sql
SELECT Nombre
FROM Clientes
WHERE IdCliente IN
(
    SELECT IdCliente
    FROM Pedidos
);
```

### Explicación

```sql
SELECT Nombre
```

Obtiene el nombre de los clientes.

```sql
FROM Clientes
```

Busca la información en la tabla Clientes.

```sql
WHERE IdCliente IN (...)
```

Solo selecciona clientes cuyos identificadores aparecen en la lista obtenida por la subconsulta.

```sql
SELECT IdCliente
FROM Pedidos
```

Obtiene los identificadores de los clientes que han realizado pedidos.

---

### Ejemplo 2. Clientes que nunca han realizado pedidos

```sql
SELECT Nombre
FROM Clientes
WHERE IdCliente NOT IN
(
    SELECT IdCliente
    FROM Pedidos
);
```

### Explicación

La subconsulta obtiene clientes con pedidos.

`NOT IN` elimina esos clientes del resultado.

Se muestran únicamente clientes sin compras.

---

### Ejemplo 3. Empleados que cobran más que la media

```sql
SELECT Nombre
FROM Empleados
WHERE Salario >
(
    SELECT AVG(Salario)
    FROM Empleados
);
```

### Explicación

```sql
AVG(Salario)
```

Calcula el salario medio.

Después SQL compara cada salario con dicho valor.

Solo aparecen los empleados por encima de la media.

---

### Ejemplo 4. Productos más caros que todos los de Tecnología

```sql
SELECT Nombre
FROM Productos
WHERE Precio > ALL
(
    SELECT Precio
    FROM Productos
    WHERE Categoria = 'Tecnología'
);
```

### Explicación

Primero se obtienen todos los precios de Tecnología.

Después se muestran únicamente los productos cuyo precio es superior a todos ellos.

---

### Ejemplo 5. Empleados que superan la media de su departamento

```sql
SELECT Nombre
FROM Empleados E
WHERE Salario >
(
    SELECT AVG(Salario)
    FROM Empleados
    WHERE Departamento = E.Departamento
);
```

### Explicación

```sql
E
```

Es un alias para la tabla Empleados.

```sql
E.Departamento
```

Se refiere al departamento del empleado que está siendo evaluado.

La subconsulta calcula la media de ese departamento.

Finalmente se compara el salario del empleado con dicha media.

---

## Errores frecuentes

### Olvidar los paréntesis de la subconsulta

Incorrecto:

```sql
WHERE IdCliente IN
SELECT IdCliente FROM Pedidos;
```

Correcto:

```sql
WHERE IdCliente IN
(
    SELECT IdCliente FROM Pedidos
);
```

---

### Utilizar "=" cuando la subconsulta devuelve varios registros

Incorrecto:

```sql
WHERE IdCliente =
(
    SELECT IdCliente
    FROM Pedidos
);
```

Si la subconsulta devuelve varios valores debemos utilizar:

```sql
IN
```

---

### Confundir ANY y ALL

Muchos principiantes interpretan ambos operadores como equivalentes.

Recordatorio:

- ANY = al menos uno.
- ALL = todos.

---

### No comprender las subconsultas correlacionadas

Una subconsulta correlacionada depende de la fila actual de la consulta principal.

Por ello se ejecuta repetidamente.

---

### Problemas con NOT IN y valores NULL

Si la subconsulta devuelve valores NULL, los resultados pueden no ser los esperados.

Es importante revisar los datos antes de utilizar `NOT IN`.

---

## Resumen

- Una subconsulta es una consulta dentro de otra consulta.
- Las subconsultas permiten resolver problemas complejos paso a paso.
- Las subconsultas escalonadas proporcionan información a una consulta superior.
- Las subconsultas de lista devuelven varios valores.
- Las subconsultas correlacionadas dependen de la consulta exterior.
- El operador `IN` comprueba si un valor pertenece a una lista.
- El operador `NOT IN` comprueba si un valor no pertenece a una lista.
- El operador `ANY` requiere que la condición se cumpla para al menos un valor.
- El operador `ALL` requiere que la condición se cumpla para todos los valores.
- Comprender la diferencia entre `ANY` y `ALL` es fundamental para construir consultas correctas.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Subconsulta | Consulta SQL incluida dentro de otra consulta. |
| Consulta principal | Consulta exterior que utiliza el resultado de una subconsulta. |
| Subconsulta escalonada | Subconsulta cuyo resultado es utilizado por otra consulta. |
| Subconsulta de lista | Subconsulta que devuelve varios valores. |
| Subconsulta correlacionada | Subconsulta que utiliza datos de la consulta exterior. |
| IN | Comprueba si un valor pertenece a una lista. |
| NOT IN | Comprueba si un valor no pertenece a una lista. |
| ANY | La condición debe cumplirse para al menos uno de los valores devueltos. |
| ALL |
