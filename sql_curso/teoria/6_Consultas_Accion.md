# Subconsultas y Operadores IN, NOT IN, ANY y ALL en SQL

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es una subconsulta en SQL.
- Entender para qué sirven las subconsultas.
- Diferenciar los distintos tipos de subconsultas.
- Utilizar los operadores `IN`, `NOT IN`, `ANY` y `ALL`.
- Resolver consultas más complejas utilizando los resultados de otras consultas.
- Comprender cómo SQL puede responder preguntas que requieren varios pasos.

---

## Introducción

Cuando empezamos a trabajar con SQL, normalmente realizamos consultas sencillas sobre una única tabla. Por ejemplo:

- Ver todos los clientes.
- Ver todos los productos.
- Ver los empleados de un departamento.

Sin embargo, en situaciones reales surgen preguntas más complejas:

- ¿Qué empleados cobran más que la media de la empresa?
- ¿Qué clientes han realizado pedidos?
- ¿Qué productos son más caros que todos los productos de una determinada categoría?

Para responder a este tipo de preguntas, SQL incorpora las **subconsultas**, que permiten utilizar una consulta dentro de otra consulta.

La idea es muy sencilla:

1. Primero se responde una pregunta auxiliar.
2. Después se utiliza esa respuesta para contestar la pregunta principal.

---

# Conceptos teóricos

## ¿Qué es una subconsulta?

Una **subconsulta** es una consulta SQL que se encuentra dentro de otra consulta SQL.

La consulta interna genera un resultado que será utilizado posteriormente por la consulta externa.

### ¿Para qué sirve?

Las subconsultas permiten:

- Dividir problemas complejos en pasos más sencillos.
- Reutilizar resultados de otras consultas.
- Comparar datos con valores calculados.
- Filtrar información utilizando resultados de otras tablas.

### ¿Cuándo se utilizan?

Cuando la consulta principal necesita información que debe calcularse previamente.

### Estructura básica

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
FROM tabla
```

Obtiene información de una tabla.

```sql
WHERE columna = (
```

Indica una condición.

```sql
SELECT campo
FROM otra_tabla
```

Es la subconsulta que produce el valor necesario.

```sql
);
```

Cierra la condición.

---

## Tipos de subconsultas

### Subconsulta escalonada

Una subconsulta escalonada es una subconsulta cuyo resultado es utilizado por una consulta superior.

Primero se ejecuta la subconsulta y después la consulta principal utiliza el resultado.

### ¿Para qué sirve?

Permite obtener un dato calculado y utilizarlo inmediatamente.

### ¿Cuándo se utiliza?

Cuando la consulta interna devuelve un único valor que necesita la consulta externa.

### Ejemplo

Queremos obtener los empleados que cobran más que el salario medio.

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
25000
```

A continuación se ejecuta:

```sql
SELECT Nombre
FROM Empleados
WHERE Salario > 25000;
```

Mostrando únicamente los empleados que superan esa cantidad.

---

### Subconsulta de lista

Una subconsulta de lista devuelve varios valores.

Normalmente se combina con el operador `IN`.

### ¿Para qué sirve?

Permite comparar un valor con un conjunto de resultados.

### ¿Cuándo se utiliza?

Cuando la subconsulta devuelve varias filas.

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

podría devolver:

```text
1
3
5
8
```

La consulta principal buscará los clientes cuyos identificadores sean:

```text
1, 3, 5 y 8
```

y mostrará sus nombres.

---

### Subconsulta correlacionada

Una subconsulta correlacionada depende de los datos de la consulta exterior.

La consulta interna necesita utilizar información de la fila que está procesando la consulta principal.

### ¿Para qué sirve?

Permite realizar comparaciones específicas para cada registro.

### ¿Cuándo se utiliza?

Cuando la respuesta de la subconsulta cambia para cada fila analizada.

### Ejemplo

Mostrar empleados que cobran más que la media de su departamento.

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

SQL toma un empleado.

```sql
E.Departamento
```

Obtiene el departamento de ese empleado.

Después calcula:

```sql
SELECT AVG(Salario)
FROM Empleados
WHERE Departamento = E.Departamento
```

La media salarial de ese departamento.

Finalmente compara ambos valores.

Si el salario del empleado es mayor, se muestra en el resultado.

---

# Operadores

## Operador IN

### ¿Qué es?

El operador `IN` comprueba si un valor pertenece a una lista de valores.

### ¿Para qué sirve?

Permite escribir consultas más simples y legibles.

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

significa:

> Mostrar los productos cuya categoría esté dentro de esa lista.

---

## Operador NOT IN

### ¿Qué es?

Es el operador contrario de `IN`.

Selecciona los valores que no pertenecen a una lista.

### ¿Para qué sirve?

Permite excluir determinados registros.

### ¿Cuándo se utiliza?

Cuando queremos encontrar elementos ausentes.

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

Primero se obtienen los clientes con pedidos.

```sql
SELECT IdCliente
FROM Pedidos
```

Después `NOT IN` elimina esos clientes.

Finalmente se muestran únicamente los clientes que nunca han comprado.

---

## Operador ANY

### ¿Qué es?

El operador `ANY` compara un valor con varios resultados.

La condición será verdadera si se cumple para al menos uno de ellos.

### Idea sencilla

Podemos leerlo como:

> "Mayor que alguno de ellos"

o

> "Menor que alguno de ellos"

según el operador usado.

### Ejemplo

Mostrar productos cuyo precio sea superior a algún producto de Tecnología.

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

### Explicación paso a paso

Supongamos que la subconsulta devuelve:

```text
100
200
300
```

Si un producto cuesta:

```text
150
```

Las comparaciones serían:

```text
150 > 100  → Verdadero
150 > 200  → Falso
150 > 300  → Falso
```

Existe al menos una comparación verdadera.

Por tanto:

```text
La condición se cumple.
```

---

## Operador ALL

### ¿Qué es?

El operador `ALL` compara un valor con todos los resultados.

La condición solamente será verdadera si se cumple para todos ellos.

### Idea sencilla

Podemos leerlo como:

> "Mayor que todos ellos"

o

> "Menor que todos ellos"

según la comparación utilizada.

### Ejemplo

Mostrar productos más caros que todos los productos de Tecnología.

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

### Explicación paso a paso

Supongamos que la subconsulta devuelve:

```text
100
200
300
```

Si un producto cuesta:

```text
350
```

Las comparaciones serían:

```text
350 > 100 → Verdadero
350 > 200 → Verdadero
350 > 300 → Verdadero
```

Todas son verdaderas.

Por tanto el producto se mostrará.

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

Basta con que una comparación sea verdadera.

---

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

Todas las comparaciones deben ser verdaderas.

---

## Analogía del mundo real

Imagina una biblioteca.

### Subconsulta escalonada

Pregunta:

> ¿Qué libros tienen más páginas que la media de todos los libros?

Primero calculas la media de páginas.

Después buscas los libros que la superan.

---

### Subconsulta de lista

Pregunta:

> ¿Qué usuarios han tomado prestado algún libro?

Primero obtienes la lista de usuarios con préstamos.

Después buscas sus nombres.

---

### Subconsulta correlacionada

Pregunta:

> ¿Qué libros tienen más páginas que la media de su categoría?

No puedes calcular una única media.

Debes calcular una media diferente para cada categoría.

---

### IN

Imagina una lista de invitados.

```text
Ana
Luis
Pedro
María
```

Preguntar si una persona está invitada equivale a utilizar `IN`.

---

### NOT IN

Preguntar quién no está invitado equivale a utilizar `NOT IN`.

---

### ANY

Supongamos varias notas:

```text
5
6
8
```

Ser mayor que `ANY` significa ser mayor que al menos una de ellas.

---

### ALL

Ser mayor que `ALL` significa ser mayor que todas ellas.

---

## Ejemplos prácticos

### Ejemplo 1: Clientes que han realizado pedidos

```sql
SELECT Nombre
FROM Clientes
WHERE IdCliente IN
(
    SELECT IdCliente
    FROM Pedidos
);
```

#### Explicación

```sql
SELECT IdCliente
FROM Pedidos
```

Obtiene los clientes que han realizado pedidos.

```sql
WHERE IdCliente IN (...)
```

Busca esos mismos clientes en la tabla Clientes.

---

### Ejemplo 2: Clientes sin pedidos

```sql
SELECT Nombre
FROM Clientes
WHERE IdCliente NOT IN
(
    SELECT IdCliente
    FROM Pedidos
);
```

#### Explicación

Muestra únicamente los clientes que no aparecen en la tabla Pedidos.

---

### Ejemplo 3: Empleados con salario superior a la media

```sql
SELECT Nombre
FROM Empleados
WHERE Salario >
(
    SELECT AVG(Salario)
    FROM Empleados
);
```

#### Explicación

Calcula primero la media salarial.

Después muestra los empleados cuyo salario supera dicha media.

---

### Ejemplo 4: Productos más caros que todos los productos de Tecnología

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

#### Explicación

Muestra los productos cuyo precio es superior incluso al producto tecnológico más caro.

---

### Ejemplo 5: Empleados por encima de la media de su departamento

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

#### Explicación

La media se calcula para el departamento concreto del empleado que se está evaluando.

---

## Errores frecuentes

### Olvidar los paréntesis

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

### Utilizar "=" cuando la subconsulta devuelve varios valores

Incorrecto:

```sql
WHERE IdCliente =
(
    SELECT IdCliente
    FROM Pedidos
);
```

Si la subconsulta devuelve varias filas debe utilizarse `IN`.

---

### Confundir ANY y ALL

Recordatorio:

- `ANY` = al menos uno.
- `ALL` = todos.

---

### No comprender cuándo usar una correlacionada

Si la subconsulta necesita conocer el valor de la fila actual de la consulta principal, probablemente sea una subconsulta correlacionada.

---

### Problemas con NOT IN

Si la subconsulta devuelve valores nulos (`NULL`), los resultados pueden no ser los esperados.

Es importante revisar los datos antes de utilizar `NOT IN`.

---

## Resumen

- Una subconsulta es una consulta dentro de otra consulta.
- Las subconsultas permiten resolver problemas complejos en varios pasos.
- La subconsulta se ejecuta antes que la consulta principal.
- Una subconsulta escalonada devuelve normalmente un único valor utilizado por una consulta externa.
- Una subconsulta de lista devuelve varios valores.
- Una subconsulta correlacionada depende de los datos de la consulta principal.
- `IN` permite comprobar si un valor pertenece a una lista.
- `NOT IN` permite comprobar si un valor no pertenece a una lista.
- `ANY` requiere que la condición sea verdadera para al menos uno de los valores.
- `ALL` requiere que la condición sea verdadera para todos los valores.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Subconsulta | Consulta SQL incluida dentro de otra consulta. |
| Consulta principal | Consulta exterior que utiliza el resultado de una subconsulta. |
| Subconsulta escalonada | Subconsulta cuyo resultado es utilizado por una consulta superior. |
| Subconsulta de lista | Subconsulta que devuelve varios valores. |
| Subconsulta correlacionada | Subconsulta que utiliza datos de la consulta exterior. |
| IN | Comprueba si un valor pertenece a una lista. |
| NOT IN | Comprueba si un valor no pertenece a una lista. |
| ANY | La condición debe cumplirse para al menos un valor. |
| ALL | La condición debe cumplirse para todos los valores. |
| Alias | Nombre abreviado utilizado para representar una tabla. |

---

## Ejercicios de reflexión

1. ¿Qué ventaja tiene utilizar una subconsulta frente a realizar el cálculo manualmente?

2. ¿Cuál es la diferencia entre una subconsulta escalonada y una subconsulta correlacionada?

3. ¿Por qué el operador `IN` suele ser más cómodo que utilizar varias condiciones unidas con `OR`?

4. Si una subconsulta devuelve los valores 10, 20 y 30, ¿qué diferencia existe entre utilizar `> ANY` y `> ALL`?

5. ¿Qué operador utilizarías para mostrar los clientes que nunca han realizado pedidos y por qué?
