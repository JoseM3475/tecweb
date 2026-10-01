# Ejercicios prácticos

Los siguientes ejercicios te permitirán practicar el uso de subconsultas y de los operadores IN, NOT IN, ANY y ALL.

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
| 6 | Carlos | Sevilla |

### Estructura

- id_cliente
- nombre
- ciudad

---

## Tabla productos

| id_producto | nombre | precio | categoria |
|------------|---------|---------|------------|
| 1 | Ratón | 15 | Informática |
| 2 | Teclado | 40 | Informática |
| 3 | Monitor | 220 | Informática |
| 4 | Silla | 180 | Oficina |
| 5 | Lámpara | 35 | Oficina |
| 6 | Impresora | 150 | Informática |

### Estructura

- id_producto
- nombre
- precio
- categoria

---

## Tabla pedidos

| id_pedido | id_cliente | id_producto |
|------------|------------|------------|
| 1 | 1 | 2 |
| 2 | 1 | 3 |
| 3 | 2 | 1 |
| 4 | 3 | 3 |
| 5 | 3 | 6 |
| 6 | 5 | 4 |

### Estructura

- id_pedido
- id_cliente
- id_producto

---

## Tabla empleados

| id_empleado | nombre | departamento | salario |
|------------|---------|--------------|----------|
| 1 | Laura | Ventas | 1800 |
| 2 | Pedro | Ventas | 2200 |
| 3 | Elena | Ventas | 2500 |
| 4 | Jorge | RRHH | 1900 |
| 5 | Silvia | RRHH | 2400 |
| 6 | Mario | IT | 3000 |
| 7 | Carla | IT | 3500 |

### Estructura

- id_empleado
- nombre
- departamento
- salario

---

## Tabla alumnos

| id_alumno | nombre |
|-----------|---------|
| 1 | Adrián |
| 2 | Lucía |
| 3 | Sergio |
| 4 | Paula |
| 5 | Daniel |

### Estructura

- id_alumno
- nombre

---

## Tabla cursos

| id_curso | nombre_curso |
|-----------|--------------|
| 1 | SQL Básico |
| 2 | Excel |
| 3 | Power BI |

### Estructura

- id_curso
- nombre_curso

---

## Tabla matriculas

| id_alumno | id_curso |
|-----------|----------|
| 1 | 1 |
| 2 | 1 |
| 2 | 2 |
| 3 | 3 |
| 5 | 1 |

### Estructura

- id_alumno
- id_curso

---

## Tabla libros

| id_libro | titulo | paginas |
|-----------|---------|----------|
| 1 | SQL para Todos | 250 |
| 2 | Aprende Bases de Datos | 320 |
| 3 | Introducción a Python | 180 |
| 4 | Redes Básicas | 400 |
| 5 | Ofimática Fácil | 210 |

### Estructura

- id_libro
- titulo
- paginas

---

## Ejercicio 1

Mostrar los nombres de los clientes que han realizado algún pedido.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes
WHERE id_cliente IN (
    SELECT id_cliente
    FROM pedidos
);
```

</details>

---

## Ejercicio 2

Mostrar los nombres de los clientes que no han realizado ningún pedido.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes
WHERE id_cliente NOT IN (
    SELECT id_cliente
    FROM pedidos
);
```

</details>

---

## Ejercicio 3

Mostrar los productos que han sido pedidos al menos una vez.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM productos
WHERE id_producto IN (
    SELECT id_producto
    FROM pedidos
);
```

</details>

---

## Ejercicio 4

Mostrar los productos que nunca han sido pedidos.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM productos
WHERE id_producto NOT IN (
    SELECT id_producto
    FROM pedidos
);
```

</details>

---

## Ejercicio 5

Mostrar los alumnos que están matriculados en algún curso.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM alumnos
WHERE id_alumno IN (
    SELECT id_alumno
    FROM matriculas
);
```

</details>

---

## Ejercicio 6

Mostrar los alumnos que no están matriculados en ningún curso.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM alumnos
WHERE id_alumno NOT IN (
    SELECT id_alumno
    FROM matriculas
);
```

</details>

---

## Ejercicio 7

Mostrar los empleados cuyo salario es superior al salario medio de todos los empleados.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM empleados
WHERE salario > (
    SELECT AVG(salario)
    FROM empleados
);
```

</details>

---

## Ejercicio 8

Mostrar los empleados cuyo salario es inferior al salario medio de todos los empleados.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM empleados
WHERE salario < (
    SELECT AVG(salario)
    FROM empleados
);
```

</details>

---

## Ejercicio 9

Mostrar los libros que tienen más páginas que la media de páginas de todos los libros.

<details>
<summary>Ver solución</summary>

```sql
SELECT titulo
FROM libros
WHERE paginas > (
    SELECT AVG(paginas)
    FROM libros
);
```

</details>

---

## Ejercicio 10

Mostrar los productos cuyo precio es superior al precio medio de todos los productos.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM productos
WHERE precio > (
    SELECT AVG(precio)
    FROM productos
);
```

</details>

---

## Ejercicio 11

Mostrar los empleados cuyo salario es mayor que alguno de los salarios del departamento RRHH.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM empleados
WHERE salario > ANY (
    SELECT salario
    FROM empleados
    WHERE departamento = 'RRHH'
);
```

</details>

---

## Ejercicio 12

Mostrar los empleados cuyo salario es mayor que todos los salarios del departamento RRHH.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM empleados
WHERE salario > ALL (
    SELECT salario
    FROM empleados
    WHERE departamento = 'RRHH'
);
```

</details>

---

## Ejercicio 13

Mostrar los productos cuyo precio es mayor que algún producto de la categoría Oficina.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM productos
WHERE precio > ANY (
    SELECT precio
    FROM productos
    WHERE categoria = 'Oficina'
);
```

</details>

---

## Ejercicio 14

Mostrar los productos cuyo precio es mayor que todos los productos de la categoría Oficina.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM productos
WHERE precio > ALL (
    SELECT precio
    FROM productos
    WHERE categoria = 'Oficina'
);
```

</details>

---

## Ejercicio 15

Mostrar los empleados que cobran más que la media salarial de su departamento.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM empleados e
WHERE salario > (
    SELECT AVG(salario)
    FROM empleados
    WHERE departamento = e.departamento
);
```

</details>

---

## Ejercicio 16

Mostrar los empleados que cobran menos que la media salarial de su departamento.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM empleados e
WHERE salario < (
    SELECT AVG(salario)
    FROM empleados
    WHERE departamento = e.departamento
);
```

</details>

---

## Ejercicio 17

Mostrar los productos cuyo precio es mayor que el precio medio de los productos de la categoría Informática.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM productos
WHERE precio > (
    SELECT AVG(precio)
    FROM productos
    WHERE categoria = 'Informática'
);
```

</details>

---

## Ejercicio 18

Mostrar los clientes que han pedido el producto con id_producto igual a 3.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes
WHERE id_cliente IN (
    SELECT id_cliente
    FROM pedidos
    WHERE id_producto = 3
);
```

</details>

---

## Ejercicio 19

Mostrar los alumnos matriculados en el curso SQL Básico (id_curso = 1).

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM alumnos
WHERE id_alumno IN (
    SELECT id_alumno
    FROM matriculas
    WHERE id_curso = 1
);
```

</details>

---

## Ejercicio 20

Mostrar los empleados cuyo salario es superior a todos los salarios del departamento Ventas.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM empleados
WHERE salario > ALL (
    SELECT salario
    FROM empleados
