# Ejercicios prácticos

Los siguientes ejercicios te permitirán practicar las consultas multitabla, los distintos tipos de JOIN y los operadores UNION y UNION ALL.

---

# Datos para realizar los ejercicios

## Tabla clientes

| id_cliente | nombre | ciudad |
|------------|---------|---------|
| 1 | Ana | Madrid |
| 2 | Luis | Sevilla |
| 3 | Marta | Valencia |
| 4 | Pablo | Madrid |
| 5 | Sonia | Bilbao |
| 6 | Carlos | Zaragoza |

## Tabla pedidos

| id_pedido | id_cliente | fecha |
|------------|------------|------------|
| 101 | 1 | 2025-01-10 |
| 102 | 1 | 2025-01-15 |
| 103 | 2 | 2025-01-18 |
| 104 | 3 | 2025-01-20 |
| 105 | 5 | 2025-01-25 |

## Tabla productos

| id_producto | nombre | categoria |
|------------|------------|------------|
| 1 | Ratón | Informática |
| 2 | Teclado | Informática |
| 3 | Monitor | Informática |
| 4 | Silla | Oficina |
| 5 | Lámpara | Oficina |

## Tabla detalle_pedido

| id_pedido | id_producto | cantidad |
|------------|------------|------------|
| 101 | 1 | 2 |
| 101 | 2 | 1 |
| 102 | 3 | 1 |
| 103 | 4 | 2 |
| 104 | 1 | 1 |
| 104 | 5 | 3 |
| 105 | 2 | 2 |

## Tabla empleados

| id_empleado | nombre | ciudad |
|------------|------------|------------|
| 1 | Laura | Madrid |
| 2 | Sergio | Valencia |
| 3 | Elena | Sevilla |
| 4 | David | Bilbao |
| 5 | Marta | Zaragoza |

## Tabla alumnos

| id_alumno | nombre |
|------------|------------|
| 1 | Pedro |
| 2 | Lucía |
| 3 | Javier |
| 4 | Carmen |
| 5 | Andrés |

## Tabla cursos

| id_curso | nombre_curso |
|------------|------------|
| 1 | SQL Básico |
| 2 | Excel |
| 3 | Power BI |

## Tabla matriculas

| id_alumno | id_curso |
|------------|------------|
| 1 | 1 |
| 1 | 2 |
| 2 | 1 |
| 3 | 3 |
| 4 | 1 |
| 4 | 3 |
| 5 | 2 |

---

## Ejercicio 1

Mostrar el nombre de todos los clientes y el identificador de sus pedidos.

<details>
<summary>Ver solución</summary>

```sql
SELECT clientes.nombre, pedidos.id_pedido
FROM clientes
INNER JOIN pedidos
ON clientes.id_cliente = pedidos.id_cliente;
```

</details>

---

## Ejercicio 2

Mostrar el nombre de todos los clientes, aunque no hayan realizado pedidos.

<details>
<summary>Ver solución</summary>

```sql
SELECT clientes.nombre, pedidos.id_pedido
FROM clientes
LEFT JOIN pedidos
ON clientes.id_cliente = pedidos.id_cliente;
```

</details>

---

## Ejercicio 3

Mostrar todos los pedidos junto con el nombre del cliente que los realizó.

<details>
<summary>Ver solución</summary>

```sql
SELECT pedidos.id_pedido, clientes.nombre
FROM pedidos
INNER JOIN clientes
ON pedidos.id_cliente = clientes.id_cliente;
```

</details>

---

## Ejercicio 4

Mostrar todos los pedidos utilizando un RIGHT JOIN.

<details>
<summary>Ver solución</summary>

```sql
SELECT clientes.nombre, pedidos.id_pedido
FROM clientes
RIGHT JOIN pedidos
ON clientes.id_cliente = pedidos.id_cliente;
```

</details>

---

## Ejercicio 5

Mostrar cada pedido junto con los productos incluidos en él.

<details>
<summary>Ver solución</summary>

```sql
SELECT detalle_pedido.id_pedido, productos.nombre
FROM detalle_pedido
INNER JOIN productos
ON detalle_pedido.id_producto = productos.id_producto;
```

</details>

---

## Ejercicio 6

Mostrar el nombre de los clientes y los productos que han comprado.

<details>
<summary>Ver solución</summary>

```sql
SELECT clientes.nombre, productos.nombre
FROM clientes
INNER JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente
INNER JOIN detalle_pedido ON pedidos.id_pedido = detalle_pedido.id_pedido
INNER JOIN productos ON detalle_pedido.id_producto = productos.id_producto;
```

</details>

---

## Ejercicio 7

Mostrar el identificador del pedido y la cantidad comprada de cada producto.

<details>
<summary>Ver solución</summary>

```sql
SELECT detalle_pedido.id_pedido, detalle_pedido.cantidad
FROM detalle_pedido;
```

</details>

---

## Ejercicio 8

Mostrar los alumnos y los cursos en los que están matriculados.

<details>
<summary>Ver solución</summary>

```sql
SELECT alumnos.nombre, cursos.nombre_curso
FROM alumnos
INNER JOIN matriculas ON alumnos.id_alumno = matriculas.id_alumno
INNER JOIN cursos ON matriculas.id_curso = cursos.id_curso;
```

</details>

---

## Ejercicio 9

Mostrar todos los alumnos aunque no estuvieran matriculados en ningún curso.

<details>
<summary>Ver solución</summary>

```sql
SELECT alumnos.nombre, cursos.nombre_curso
FROM alumnos
LEFT JOIN matriculas ON alumnos.id_alumno = matriculas.id_alumno
LEFT JOIN cursos ON matriculas.id_curso = cursos.id_curso;
```

</details>

---

## Ejercicio 10

Mostrar todos los cursos y los alumnos matriculados utilizando RIGHT JOIN.

<details>
<summary>Ver solución</summary>

```sql
SELECT alumnos.nombre, cursos.nombre_curso
FROM alumnos
RIGHT JOIN matriculas ON alumnos.id_alumno = matriculas.id_alumno
RIGHT JOIN cursos ON matriculas.id_curso = cursos.id_curso;
```

</details>

---

## Ejercicio 11

Unir en una sola lista los nombres de clientes y empleados eliminando duplicados.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes
UNION
SELECT nombre
FROM empleados;
```

</details>

---

## Ejercicio 12

Unir en una sola lista los nombres de clientes y empleados conservando duplicados.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes
UNION ALL
SELECT nombre
FROM empleados;
```

</details>

---

## Ejercicio 13

Mostrar los nombres de clientes y empleados que viven en Madrid utilizando UNION.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes
WHERE ciudad = 'Madrid'
UNION
SELECT nombre
FROM empleados
WHERE ciudad = 'Madrid';
```

</details>

---

## Ejercicio 14

Mostrar los nombres de clientes y empleados que viven en Sevilla utilizando UNION ALL.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes
WHERE ciudad = 'Sevilla'
UNION ALL
SELECT nombre
FROM empleados
WHERE ciudad = 'Sevilla';
```

</details>

---

## Ejercicio 15

Mostrar todos los clientes junto con los pedidos que hayan realizado.

<details>
<summary>Ver solución</summary>

```sql
SELECT clientes.nombre, pedidos.id_pedido
FROM clientes
LEFT JOIN pedidos
ON clientes.id_cliente = pedidos.id_cliente;
```

</details>

---

## Ejercicio 16

Mostrar los pedidos y los productos asociados a cada pedido.

<details>
<summary>Ver solución</summary>

```sql
SELECT pedidos.id_pedido, productos.nombre
FROM pedidos
INNER JOIN detalle_pedido ON pedidos.id_pedido = detalle_pedido.id_pedido
INNER JOIN productos ON detalle_pedido.id_producto = productos.id_producto;
```

</details>

---

## Ejercicio 17

Mostrar los nombres de los alumnos matriculados en el curso "SQL Básico".

<details>
<summary>Ver solución</summary>

```sql
SELECT alumnos.nombre
FROM alumnos
INNER JOIN matriculas ON alumnos.id_alumno = matriculas.id_alumno
INNER JOIN cursos ON matriculas.id_curso = cursos.id_curso
WHERE cursos.nombre_curso = 'SQL Básico';
```

</details>

---

## Ejercicio 18

Mostrar los nombres de los cursos en los que está matriculado Pedro.

<details>
<summary>Ver solución</summary>

```sql
SELECT cursos.nombre_curso
FROM cursos
INNER JOIN matriculas ON cursos.id_curso = matriculas.id_curso
INNER JOIN alumnos ON matriculas.id_alumno = alumnos.id_alumno
WHERE alumnos.nombre = 'Pedro';
```

</details>

---

## Ejercicio 19

Mostrar todos los clientes y los pedidos realizados después del 15 de enero de 2025.

<details>
<summary>Ver solución</summary>

```sql
SELECT clientes.nombre, pedidos.id_pedido
FROM clientes
INNER JOIN pedidos
ON clientes.id_cliente = pedidos.id_cliente
WHERE pedidos.fecha > '2025-01-15';
```

</details>

---

## Ejercicio 20

Mostrar el nombre de cada cliente y los productos que aparecen en sus pedidos.

<details>
<summary>Ver solución</summary>

```sql
SELECT clientes.nombre, productos.nombre
FROM clientes
INNER JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente
INNER JOIN detalle_pedido ON pedidos.id_pedido = detalle_pedido.id_pedido
INNER JOIN productos ON detalle_pedido.id_producto = productos.id_producto;
```

</details>
