# Ejercicios prácticos

Los siguientes ejercicios están diseñados para practicar consultas de referencias cruzadas utilizando GROUP BY, PIVOT, TRANSFORM y varias tablas relacionadas.

---

# Datos para realizar los ejercicios

## Tabla clientes

| id_cliente | nombre | ciudad |
|------------|----------|----------|
| 1 | Ana | Madrid |
| 2 | Luis | Sevilla |
| 3 | Marta | Valencia |
| 4 | Pablo | Madrid |
| 5 | Sonia | Sevilla |
| 6 | Carlos | Bilbao |

---

## Tabla productos

| id_producto | producto | categoria |
|------------|------------|------------|
| 1 | Ratón | Informática |
| 2 | Teclado | Informática |
| 3 | Monitor | Informática |
| 4 | Silla | Oficina |
| 5 | Lámpara | Oficina |
| 6 | Archivador | Oficina |

---

## Tabla pedidos

| id_pedido | id_cliente | id_producto | mes | trimestre | importe |
|------------|------------|------------|------------|------------|------------|
| 1 | 1 | 1 | Enero | T1 | 25 |
| 2 | 1 | 3 | Febrero | T1 | 220 |
| 3 | 2 | 2 | Enero | T1 | 40 |
| 4 | 2 | 5 | Marzo | T1 | 35 |
| 5 | 3 | 4 | Abril | T2 | 180 |
| 6 | 4 | 1 | Abril | T2 | 25 |
| 7 | 5 | 6 | Mayo | T2 | 90 |
| 8 | 6 | 3 | Junio | T2 | 220 |
| 9 | 3 | 2 | Junio | T2 | 40 |
| 10 | 1 | 4 | Mayo | T2 | 180 |

---

## Tabla empleados

| id_empleado | nombre | departamento |
|------------|----------|----------|
| 1 | Laura | Ventas |
| 2 | Pedro | Ventas |
| 3 | Elena | Soporte |
| 4 | David | Soporte |
| 5 | Raúl | Administración |

---

## Tabla cursos

| id_curso | curso | categoria |
|------------|------------|------------|
| 1 | SQL Básico | Bases de Datos |
| 2 | Excel | Ofimática |
| 3 | Power BI | Análisis |
| 4 | Access | Bases de Datos |
| 5 | Word | Ofimática |

---

## Tabla alumnos

| id_alumno | nombre | ciudad |
|------------|------------|------------|
| 1 | Sergio | Madrid |
| 2 | Clara | Sevilla |
| 3 | Nuria | Valencia |
| 4 | Diego | Madrid |
| 5 | Iván | Bilbao |

---

## Tabla matriculas

| id_alumno | id_curso | trimestre |
|------------|------------|------------|
| 1 | 1 | T1 |
| 1 | 2 | T2 |
| 2 | 1 | T1 |
| 2 | 3 | T2 |
| 3 | 4 | T1 |
| 4 | 1 | T2 |
| 4 | 5 | T2 |
| 5 | 3 | T1 |

---

# Ejercicio 1

Crear una consulta de referencias cruzadas que muestre el número de pedidos por mes.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(id_pedido)
SELECT trimestre
FROM pedidos
GROUP BY trimestre
PIVOT mes;
```

</details>

---

# Ejercicio 2

Crear una consulta de referencias cruzadas que muestre el importe total por trimestre y mes.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM SUM(importe)
SELECT trimestre
FROM pedidos
GROUP BY trimestre
PIVOT mes;
```

</details>

---

# Ejercicio 3

Mostrar cuántos pedidos existen en cada trimestre para cada cliente.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(id_pedido)
SELECT id_cliente
FROM pedidos
GROUP BY id_cliente
PIVOT trimestre;
```

</details>

---

# Ejercicio 4

Mostrar la suma de importes por cliente y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM SUM(importe)
SELECT id_cliente
FROM pedidos
GROUP BY id_cliente
PIVOT trimestre;
```

</details>

---

# Ejercicio 5

Mostrar cuántos productos se han pedido en cada mes agrupados por cliente.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(id_producto)
SELECT id_cliente
FROM pedidos
GROUP BY id_cliente
PIVOT mes;
```

</details>

---

# Ejercicio 6

Crear una referencia cruzada con el importe total por producto y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM SUM(importe)
SELECT id_producto
FROM pedidos
GROUP BY id_producto
PIVOT trimestre;
```

</details>

---

# Ejercicio 7

Mostrar el número de ventas realizadas por producto y mes.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(id_pedido)
SELECT id_producto
FROM pedidos
GROUP BY id_producto
PIVOT mes;
```

</details>

---

# Ejercicio 8

Mostrar el importe máximo vendido por producto y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM MAX(importe)
SELECT id_producto
FROM pedidos
GROUP BY id_producto
PIVOT trimestre;
```

</details>

---

# Ejercicio 9

Mostrar el importe mínimo vendido por producto y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM MIN(importe)
SELECT id_producto
FROM pedidos
GROUP BY id_producto
PIVOT trimestre;
```

</details>

---

# Ejercicio 10

Mostrar el importe medio por cliente y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM AVG(importe)
SELECT id_cliente
FROM pedidos
GROUP BY id_cliente
PIVOT trimestre;
```

</details>

---

# Ejercicio 11

Crear una referencia cruzada utilizando clientes y pedidos para mostrar el número de pedidos por ciudad y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(p.id_pedido)
SELECT c.ciudad
FROM clientes AS c
INNER JOIN pedidos AS p
ON c.id_cliente = p.id_cliente
GROUP BY c.ciudad
PIVOT p.trimestre;
```

</details>

---

# Ejercicio 12

Mostrar el importe total vendido por ciudad y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM SUM(p.importe)
SELECT c.ciudad
FROM clientes AS c
INNER JOIN pedidos AS p
ON c.id_cliente = p.id_cliente
GROUP BY c.ciudad
PIVOT p.trimestre;
```

</details>

---

# Ejercicio 13

Mostrar el número de pedidos por ciudad y mes.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(p.id_pedido)
SELECT c.ciudad
FROM clientes AS c
INNER JOIN pedidos AS p
ON c.id_cliente = p.id_cliente
GROUP BY c.ciudad
PIVOT p.mes;
```

</details>

---

# Ejercicio 14

Mostrar el número de ventas por categoría de producto y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(pe.id_pedido)
SELECT pr.categoria
FROM productos AS pr
INNER JOIN pedidos AS pe
ON pr.id_producto = pe.id_producto
GROUP BY pr.categoria
PIVOT pe.trimestre;
```

</details>

---

# Ejercicio 15

Mostrar el importe total vendido por categoría de producto y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM SUM(pe.importe)
SELECT pr.categoria
FROM productos AS pr
INNER JOIN pedidos AS pe
ON pr.id_producto = pe.id_producto
GROUP BY pr.categoria
PIVOT pe.trimestre;
```

</details>

---

# Ejercicio 16

Mostrar cuántos alumnos están matriculados en cada trimestre para cada curso.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(id_alumno)
SELECT id_curso
FROM matriculas
GROUP BY id_curso
PIVOT trimestre;
```

</details>

---

# Ejercicio 17

Mostrar el número de matrículas por categoría de curso y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(m.id_alumno)
SELECT c.categoria
FROM cursos AS c
INNER JOIN matriculas AS m
ON c.id_curso = m.id_curso
GROUP BY c.categoria
PIVOT m.trimestre;
```

</details>

---

# Ejercicio 18

Mostrar el número de alumnos matriculados por ciudad y trimestre.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(m.id_alumno)
SELECT a.ciudad
FROM alumnos AS a
INNER JOIN matriculas AS m
ON a.id_alumno = m.id_alumno
GROUP BY a.ciudad
PIVOT m.trimestre;
```

</details>

---

# Ejercicio 19

Mostrar el número de matrículas por curso y trimestre utilizando varias tablas.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(m.id_alumno)
SELECT c.curso
FROM cursos AS c
INNER JOIN matriculas AS m
ON c.id_curso = m.id_curso
GROUP BY c.curso
PIVOT m.trimestre;
```

</details>

---

# Ejercicio 20

Mostrar el número de pedidos por categoría de producto y mes utilizando varias tablas relacionadas.

<details>
<summary>Ver solución</summary>

```sql
TRANSFORM COUNT(pe.id_pedido)
SELECT pr.categoria
FROM productos AS pr
INNER JOIN pedidos AS pe
ON pr.id_producto = pe.id_producto
GROUP BY pr.categoria
PIVOT pe.mes;
```

</details>
