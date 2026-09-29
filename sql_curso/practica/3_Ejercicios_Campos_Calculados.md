# Ejercicios prácticos

Utiliza los siguientes ejercicios para practicar el uso de campos calculados y funciones SQL.

---

# Datos para realizar los ejercicios

## Tabla clientes

| id_cliente | nombre | apellidos | ciudad | fecha_registro |
|------------|----------|------------|---------|----------------|
| 1 | Ana | López | Madrid | 2024-01-15 |
| 2 | Luis | García | Sevilla | 2023-11-20 |
| 3 | Marta | Pérez | Valencia | 2024-03-01 |
| 4 | Pablo | Ruiz | Madrid | 2022-09-10 |
| 5 | Sonia | Martín | Bilbao | 2024-02-20 |
| 6 | Carlos | Navarro | Zaragoza | 2023-06-18 |

## Tabla productos

| id_producto | nombre | precio |
|-------------|---------|---------|
| 1 | Ratón | 15.95 |
| 2 | Monitor | 229.99 |
| 3 | Teclado | 39.50 |
| 4 | Silla Oficina | 189.90 |
| 5 | Lámpara LED | 34.75 |
| 6 | Webcam | 68.40 |

## Tabla empleados

| id_empleado | nombre | apellidos | salario |
|-------------|----------|------------|----------|
| 1 | Laura | Gómez | 1850.50 |
| 2 | Miguel | Torres | 2100.75 |
| 3 | Elena | Ruiz | 1950.25 |
| 4 | David | Martín | 2400.60 |
| 5 | Silvia | López | 1750.40 |

## Tabla alumnos

| id_alumno | nombre | apellidos | fecha_matricula |
|------------|---------|------------|-----------------|
| 1 | Javier | Sánchez | 2024-01-10 |
| 2 | Lucía | Fernández | 2024-02-05 |
| 3 | Daniel | Moreno | 2024-03-15 |
| 4 | Alba | Gil | 2023-09-20 |
| 5 | Sara | Ortega | 2024-04-01 |

## Tabla cursos

| id_curso | nombre_curso | precio |
|-----------|--------------|---------|
| 1 | Excel Básico | 99.99 |
| 2 | SQL Inicial | 149.50 |
| 3 | Power BI | 180.75 |
| 4 | Python Básico | 210.40 |
| 5 | Access | 120.20 |

## Tabla biblioteca

| id_libro | titulo | fecha_publicacion |
|----------|--------|-------------------|
| 1 | Introducción a SQL | 2020-05-10 |
| 2 | Aprender Python | 2019-11-15 |
| 3 | Bases de Datos | 2021-02-20 |
| 4 | Excel Profesional | 2018-09-05 |
| 5 | Power BI Paso a Paso | 2022-06-12 |

---

## Ejercicio 1

Mostrar la fecha y hora actuales utilizando una función SQL.

<details>
<summary>Ver solución</summary>

```sql
SELECT NOW();
```

</details>

---

## Ejercicio 2

Mostrar el nombre de todos los clientes junto con la fecha y hora actuales.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, NOW() AS fecha_actual
FROM clientes;
```

</details>

---

## Ejercicio 3

Mostrar todos los productos junto con un campo calculado que incremente el precio en 10 euros.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, precio, precio + 10 AS nuevo_precio
FROM productos;
```

</details>

---

## Ejercicio 4

Mostrar todos los cursos junto con un campo calculado que aplique un descuento de 20 euros.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre_curso, precio, precio - 20 AS precio_descuento
FROM cursos;
```

</details>

---

## Ejercicio 5

Mostrar el nombre y apellidos de cada cliente en una única columna llamada nombre_completo.

<details>
<summary>Ver solución</summary>

```sql
SELECT CONCAT(nombre, ' ', apellidos) AS nombre_completo
FROM clientes;
```

</details>

---

## Ejercicio 6

Mostrar el nombre completo de todos los empleados.

<details>
<summary>Ver solución</summary>

```sql
SELECT CONCAT(nombre, ' ', apellidos) AS nombre_completo
FROM empleados;
```

</details>

---

## Ejercicio 7

Mostrar todos los productos redondeando el precio a 0 decimales.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, ROUND(precio, 0) AS precio_redondeado
FROM productos;
```

</details>

---

## Ejercicio 8

Mostrar el salario de los empleados redondeado a un decimal.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, ROUND(salario, 1) AS salario_redondeado
FROM empleados;
```

</details>

---

## Ejercicio 9

Mostrar los precios de los cursos truncados a 0 decimales.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre_curso, TRUNCATE(precio, 0) AS precio_truncado
FROM cursos;
```

</details>

---

## Ejercicio 10

Mostrar los precios de los productos truncados a un decimal.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, TRUNCATE(precio, 1) AS precio_truncado
FROM productos;
```

</details>

---

## Ejercicio 11

Mostrar la fecha actual formateada como día/mes/año.

<details>
<summary>Ver solución</summary>

```sql
SELECT DATE_FORMAT(NOW(), '%d/%m/%Y') AS fecha_formateada;
```

</details>

---

## Ejercicio 12

Mostrar la fecha de registro de cada cliente en formato día/mes/año.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre,
       DATE_FORMAT(fecha_registro, '%d/%m/%Y') AS fecha_registro_formateada
FROM clientes;
```

</details>

---

## Ejercicio 13

Mostrar la fecha de matrícula de cada alumno en formato mes-año.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre,
       DATE_FORMAT(fecha_matricula, '%m-%Y') AS matricula
FROM alumnos;
```

</details>

---

## Ejercicio 14

Mostrar cuántos días han pasado desde la fecha de registro de cada cliente hasta hoy.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre,
       DATEDIFF(NOW(), fecha_registro) AS dias_transcurridos
FROM clientes;
```

</details>

---

## Ejercicio 15

Mostrar cuántos días han pasado desde la matrícula de cada alumno hasta hoy.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre,
       DATEDIFF(NOW(), fecha_matricula) AS dias_desde_matricula
FROM alumnos;
```

</details>

---

## Ejercicio 16

Mostrar el título de cada libro junto con los días transcurridos desde su publicación.

<details>
<summary>Ver solución</summary>

```sql
SELECT titulo,
       DATEDIFF(NOW(), fecha_publicacion) AS dias_publicado
FROM biblioteca;
```

</details>

---

## Ejercicio 17

Mostrar todos los clientes concatenando nombre, apellidos y ciudad en una sola columna.

<details>
<summary>Ver solución</summary>

```sql
SELECT CONCAT(nombre, ' ', apellidos, ' - ', ciudad) AS cliente
FROM clientes;
```

</details>

---

## Ejercicio 18

Mostrar cada producto junto con un precio incrementado en un 21% y redondeado a dos decimales.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre,
       ROUND(precio * 1.21, 2) AS precio_con_iva
FROM productos;
```

</details>

---

## Ejercicio 19

Mostrar cada curso junto con un precio rebajado un 15% y truncado a dos decimales.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre_curso,
       TRUNCATE(precio * 0.85, 2) AS precio_rebajado
FROM cursos;
```

</details>

---

## Ejercicio 20

Mostrar para cada empleado una columna con el nombre completo y otra con el salario redondeado a cero decimales.

<details>
<summary>Ver solución</summary>

```sql
SELECT CONCAT(nombre, ' ', apellidos) AS empleado,
       ROUND(salario, 0) AS salario_redondeado
FROM empleados;
```

</details>
