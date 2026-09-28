# Introducción a SQL: Consultas básicas y filtros

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es SQL y para qué sirve.
- Conocer los principales grupos de comandos SQL.
- Entender qué son las cláusulas y los operadores.
- Consultar información de una tabla utilizando `SELECT` y `FROM`.
- Filtrar datos mediante la cláusula `WHERE`.
- Utilizar operadores de comparación para buscar información específica.
- Combinar condiciones mediante operadores lógicos (`AND`, `OR`, `NOT`).
- Aplicar filtros utilizando varias columnas al mismo tiempo.

---

## Introducción

En la actualidad, la mayoría de las aplicaciones almacenan información en bases de datos. Por ejemplo:

- Una tienda guarda información sobre sus productos.
- Un banco almacena datos de sus clientes.
- Una biblioteca registra préstamos de libros.
- Una universidad mantiene información de sus estudiantes.

Para trabajar con toda esa información se utiliza SQL.

**SQL** (Structured Query Language o Lenguaje de Consulta Estructurada) es un lenguaje diseñado para comunicarse con bases de datos relacionales. Gracias a SQL podemos consultar información, añadir nuevos datos, modificarlos o eliminarlos.

Antes de aprender comandos complejos, es importante conocer cómo obtener información de una base de datos y cómo filtrar únicamente los datos que nos interesan.

---

## Conceptos teóricos

### ¿Qué es una base de datos?

Una base de datos es un sistema organizado para almacenar información.

Por ejemplo, una tienda puede tener una base de datos con información sobre:

- Clientes
- Productos
- Pedidos
- Empleados

---

### ¿Qué es una tabla?

Una tabla es una estructura que organiza la información en filas y columnas.

Ejemplo de tabla **clientes**:

| id | nombre | ciudad |
|----|---------|---------|
| 1 | Ana | Madrid |
| 2 | Luis | Sevilla |
| 3 | Marta | Valencia |

Cada fila representa un registro.

Cada columna representa una característica del registro.

---

### ¿Qué es SQL?

SQL es el lenguaje que permite comunicarse con una base de datos.

Con SQL podemos:

- Consultar información.
- Insertar nuevos datos.
- Modificar información existente.
- Eliminar registros.
- Crear tablas.
- Gestionar permisos.

---

### Grupos de comandos SQL

Los comandos SQL suelen clasificarse en varios grupos según su finalidad.

---

### DDL (Data Definition Language)

Son comandos utilizados para definir la estructura de la base de datos.

Se utilizan para:

- Crear tablas.
- Modificar tablas.
- Eliminar tablas.

Ejemplos:

```sql
CREATE TABLE clientes (...);
ALTER TABLE clientes ...;
DROP TABLE clientes;
```

---

### DML (Data Manipulation Language)

Permiten trabajar con los datos almacenados.

Se utilizan para:

- Consultar datos.
- Insertar registros.
- Actualizar información.
- Eliminar registros.

Ejemplos:

```sql
SELECT * FROM clientes;
INSERT INTO clientes ...;
UPDATE clientes ...;
DELETE FROM clientes ...;
```

---

### DCL (Data Control Language)

Se utilizan para controlar permisos y accesos.

Ejemplos:

```sql
GRANT SELECT ON clientes TO usuario1;
REVOKE SELECT ON clientes FROM usuario1;
```

---

### TCL (Transaction Control Language)

Permiten controlar transacciones.

Una transacción es un conjunto de operaciones que deben realizarse como una única unidad de trabajo.

Ejemplos:

```sql
COMMIT;
ROLLBACK;
```

---

### ¿Qué son las cláusulas?

Las cláusulas son palabras reservadas que forman parte de una consulta SQL.

Algunas de las más utilizadas son:

- `SELECT`
- `FROM`
- `WHERE`

Cada una tiene una función específica dentro de la consulta.

---

### ¿Qué son los operadores?

Los operadores permiten realizar comparaciones o combinar condiciones.

Por ejemplo:

```sql
precio > 100
```

Pregunta:

¿El precio es mayor que 100?

El resultado será verdadero o falso.

---

## SELECT y FROM

### ¿Para qué sirven?

La consulta más básica en SQL se utiliza para obtener información.

La cláusula:

- `SELECT` indica qué columnas queremos ver.
- `FROM` indica de qué tabla queremos obtener los datos.

---

### Sintaxis general

```sql
SELECT columnas
FROM tabla;
```

---

### Ejemplo

```sql
SELECT nombre, ciudad
FROM clientes;
```

Explicación:

- `SELECT nombre, ciudad` indica las columnas que queremos mostrar.
- `FROM clientes` indica la tabla donde se encuentran los datos.

Resultado posible:

| nombre | ciudad |
|----------|----------|
| Ana | Madrid |
| Luis | Sevilla |
| Marta | Valencia |

---

### Mostrar todas las columnas

Podemos utilizar el símbolo `*`.

```sql
SELECT *
FROM clientes;
```

Explicación:

- `*` significa "todas las columnas".
- Se mostrarán todos los datos de cada cliente.

---

## SELECT, FROM y WHERE

### ¿Para qué sirve WHERE?

Muchas veces no queremos ver todos los registros.

Queremos filtrar la información.

Para ello utilizamos la cláusula `WHERE`.

---

### Sintaxis

```sql
SELECT columnas
FROM tabla
WHERE condicion;
```

---

### Ejemplo

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid';
```

Explicación:

- Se buscan registros en la tabla `clientes`.
- Solo se mostrarán aquellos cuya ciudad sea Madrid.

---

## Operadores de comparación

Los operadores de comparación permiten comparar valores.

---

### Igual (=)

```sql
SELECT *
FROM productos
WHERE precio = 50;
```

Explicación:

Muestra únicamente los productos cuyo precio sea exactamente 50.

---

### Mayor que (>)

```sql
SELECT *
FROM productos
WHERE precio > 100;
```

Explicación:

Muestra productos con precio superior a 100.

---

### Menor que (<)

```sql
SELECT *
FROM productos
WHERE precio < 100;
```

Explicación:

Muestra productos con precio inferior a 100.

---

### Mayor o igual (>=)

```sql
SELECT *
FROM productos
WHERE precio >= 100;
```

Explicación:

Muestra productos con precio igual o superior a 100.

---

### Menor o igual (<=)

```sql
SELECT *
FROM productos
WHERE precio <= 100;
```

Explicación:

Muestra productos con precio igual o inferior a 100.

---

### Distinto (<>) 

```sql
SELECT *
FROM clientes
WHERE ciudad <> 'Madrid';
```

Explicación:

Muestra todos los clientes cuya ciudad no sea Madrid.

---

### BETWEEN

Permite buscar valores comprendidos dentro de un rango.

```sql
SELECT *
FROM productos
WHERE precio BETWEEN 50 AND 100;
```

Explicación:

Muestra productos con precios entre 50 y 100.

---

## Operadores lógicos

Los operadores lógicos permiten combinar varias condiciones.

---

### AND

Todas las condiciones deben cumplirse.

```sql
SELECT *
FROM empleados
WHERE departamento = 'Ventas'
AND salario > 2000;
```

Explicación:

Solo aparecerán empleados que:

- Trabajan en Ventas.
- Tienen salario superior a 2000.

Ambas condiciones deben ser ciertas.

---

### OR

Basta con que se cumpla una condición.

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid'
OR ciudad = 'Sevilla';
```

Explicación:

Se mostrarán clientes de Madrid o de Sevilla.

---

### NOT

Niega una condición.

```sql
SELECT *
FROM productos
WHERE NOT precio > 100;
```

Explicación:

Muestra productos cuyo precio no sea superior a 100.

---

## Filtros con varias columnas

En muchas ocasiones es necesario filtrar utilizando más de una columna.

Ejemplo:

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid'
AND edad >= 18;
```

Explicación:

- La ciudad debe ser Madrid.
- La edad debe ser igual o superior a 18 años.

Solo se mostrarán los registros que cumplan ambas condiciones.

---

### Ejemplo más completo

```sql
SELECT nombre, ciudad
FROM clientes
WHERE ciudad = 'Madrid'
AND categoria = 'Premium';
```

Explicación:

- Se muestran únicamente las columnas `nombre` y `ciudad`.
- Se buscan clientes de Madrid.
- Además deben pertenecer a la categoría Premium.

---

## Analogía del mundo real

Imagina una biblioteca con miles de libros.

La biblioteca es la base de datos.

Cada estantería sería una tabla.

Cada libro sería un registro.

Si preguntas al bibliotecario:

> Muéstrame todos los libros de historia.

Estás realizando una consulta con `SELECT`.

Si además dices:

> Muéstrame solo los libros de historia publicados después de 2020.

Estás utilizando filtros equivalentes a una cláusula `WHERE`.

Si añades:

> Y que además estén disponibles para préstamo.

Estás utilizando una condición adicional similar a un operador `AND`.

---

## Ejemplos prácticos

### Ejemplo 1: Mostrar todos los clientes

```sql
SELECT *
FROM clientes;
```

Explicación:

- `SELECT *` selecciona todas las columnas.
- `FROM clientes` indica la tabla que contiene los datos.

---

### Ejemplo 2: Mostrar solo nombre y ciudad

```sql
SELECT nombre, ciudad
FROM clientes;
```

Explicación:

- Se muestran únicamente las columnas solicitadas.
- No aparecen el resto de columnas.

---

### Ejemplo 3: Buscar clientes de Madrid

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid';
```

Explicación:

- Se recorren los registros de la tabla.
- Solo se muestran aquellos cuya ciudad sea Madrid.

---

### Ejemplo 4: Productos entre dos precios

```sql
SELECT *
FROM productos
WHERE precio BETWEEN 10 AND 50;
```

Explicación:

- Se seleccionan productos.
- El precio debe estar dentro del rango indicado.

---

### Ejemplo 5: Filtro con varias condiciones

```sql
SELECT *
FROM empleados
WHERE departamento = 'Ventas'
AND salario >= 2000;
```

Explicación:

- Debe pertenecer al departamento Ventas.
- Debe cobrar al menos 2000.
- Ambas condiciones son obligatorias.

---

## Errores frecuentes

### Olvidar las comillas en los textos

Incorrecto:

```sql
WHERE ciudad = Madrid
```

Correcto:

```sql
WHERE ciudad = 'Madrid'
```

---

### Utilizar una columna que no existe

Incorrecto:

```sql
SELECT apellido
FROM clientes;
```

Si la columna `apellido` no existe, la consulta producirá un error.

---

### Confundir AND y OR

```sql
AND
```

Exige que todas las condiciones sean ciertas.

```sql
OR
```

Basta con que una condición sea cierta.

---

### Escribir mal el nombre de la tabla

```sql
SELECT *
FROM cliente;
```

Si la tabla se llama `clientes`, la consulta fallará.

---

### Utilizar mal BETWEEN

Incorrecto:

```sql
WHERE precio BETWEEN 100 AND 50
```

El valor inicial debe ser menor o igual que el valor final.

---

## Resumen

- SQL permite trabajar con bases de datos.
- Una tabla almacena información organizada en filas y columnas.
- DDL define estructuras.
- DML manipula datos.
- DCL controla permisos.
- TCL gestiona transacciones.
- `SELECT` permite consultar información.
- `FROM` indica la tabla que se consulta.
- `WHERE` permite filtrar registros.
- Los operadores de comparación ayudan a buscar valores concretos.
- Los operadores lógicos combinan condiciones.
- Es posible filtrar utilizando varias columnas simultáneamente.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| SQL | Lenguaje utilizado para trabajar con bases de datos. |
| Base de datos | Conjunto organizado de información. |
| Tabla | Estructura formada por filas y columnas. |
| SELECT | Cláusula utilizada para consultar datos. |
| FROM | Indica la tabla sobre la que se realiza la consulta. |
| WHERE | Permite filtrar registros. |
| Operador de comparación | Compara valores para obtener verdadero o falso. |
| AND | Todas las condiciones deben cumplirse. |
| OR | Basta con que una condición se cumpla. |
| NOT | Niega una condición. |
| BETWEEN | Comprueba si un valor está dentro de un rango. |
| DDL | Comandos que definen estructuras. |
| DML | Comandos que manipulan datos. |
| DCL | Comandos de control de permisos. |
| TCL | Comandos de control de transacciones. |

---

## Ejercicios de reflexión

1. ¿Cuál es la diferencia entre una base de datos y una tabla?

2. ¿Qué función realiza la cláusula `FROM` dentro de una consulta SQL?

3. ¿Qué registros devolvería la siguiente consulta?

```sql
SELECT *
FROM productos
WHERE precio > 100;
```

4. ¿Cuál es la diferencia entre utilizar `AND` y utilizar `OR`?

5. Escribe una consulta que muestre todos los clientes cuya ciudad sea Sevilla.