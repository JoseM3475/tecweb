# Ejercicios prácticos

Estos ejercicios sirven para practicar las consultas y filtros básicos vistos en la sesión.

---

# Datos para realizar los ejercicios

## Tabla clientes

| id_cliente | nombre | ciudad | edad | categoria |
|------------|---------|---------|------|------------|
| 1 | Ana | Madrid | 35 | Premium |
| 2 | Luis | Sevilla | 25 | Normal |
| 3 | Marta | Valencia | 42 | Premium |
| 4 | Pablo | Madrid | 19 | Normal |
| 5 | Sonia | Sevilla | 31 | Premium |
| 6 | Carlos | Bilbao | 28 | Normal |
| 7 | Elena | Valencia | 22 | Premium |

## Tabla productos

| id_producto | nombre | precio | categoria |
|-------------|---------|---------|------------|
| 1 | Ratón | 15 | Informática |
| 2 | Monitor | 220 | Informática |
| 3 | Teclado | 40 | Informática |
| 4 | Silla | 180 | Oficina |
| 5 | Lámpara | 35 | Oficina |
| 6 | Impresora | 140 | Informática |
| 7 | Escritorio | 320 | Oficina |

## Tabla empleados

| id_empleado | nombre | departamento | salario |
|-------------|---------|--------------|----------|
| 1 | Laura | Ventas | 2200 |
| 2 | Jorge | Ventas | 1800 |
| 3 | Beatriz | Marketing | 2500 |
| 4 | David | Recursos Humanos | 2100 |
| 5 | Pedro | Ventas | 3200 |
| 6 | Sara | Marketing | 1900 |
| 7 | Miguel | Recursos Humanos | 2800 |

---

## Ejercicio 1

Mostrar todas las columnas de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes;
```

</details>

---

## Ejercicio 2

Mostrar todas las columnas de la tabla `productos`.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos;
```

</details>

---

## Ejercicio 3

Mostrar únicamente la columna `nombre` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre
FROM clientes;
```

</details>

---

## Ejercicio 4

Mostrar el nombre y la ciudad de todos los clientes.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, ciudad
FROM clientes;
```

</details>

---

## Ejercicio 5

Mostrar el nombre y el salario de todos los empleados.

<details>
<summary>Ver solución</summary>

```sql
SELECT nombre, salario
FROM empleados;
```

</details>

---

## Ejercicio 6

Mostrar los clientes que viven en Madrid.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid';
```

</details>

---

## Ejercicio 7

Mostrar los empleados con salario superior a 2500.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE salario > 2500;
```

</details>

---

## Ejercicio 8

Mostrar los productos cuyo precio sea menor que 100.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
WHERE precio < 100;
```

</details>

---

## Ejercicio 9

Mostrar los clientes con edad mayor o igual a 30 años.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE edad >= 30;
```

</details>

---

## Ejercicio 10

Mostrar los empleados cuyo departamento sea distinto de Ventas.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE departamento <> 'Ventas';
```

</details>

---

## Ejercicio 11

Mostrar los productos cuyo precio esté entre 100 y 250.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
WHERE precio BETWEEN 100 AND 250;
```

</details>

---

## Ejercicio 12

Mostrar los clientes de Madrid que tengan más de 20 años.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid'
AND edad > 20;
```

</details>

---

## Ejercicio 13

Mostrar los empleados de Ventas con salario mayor o igual a 2000.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE departamento = 'Ventas'
AND salario >= 2000;
```

</details>

---

## Ejercicio 14

Mostrar los productos de la categoría Informática cuyo precio sea superior a 100.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
WHERE categoria = 'Informática'
AND precio > 100;
```

</details>

---

## Ejercicio 15

Mostrar los clientes de categoría Premium cuya edad esté entre 30 y 45 años.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE categoria = 'Premium'
AND edad BETWEEN 30 AND 45;
```

</details>

---

## Ejercicio 16

Mostrar los clientes que vivan en Madrid o en Valencia.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE ciudad = 'Madrid'
OR ciudad = 'Valencia';
```

</details>

---

## Ejercicio 17

Mostrar los empleados del departamento Marketing o con salario superior a 3000.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE departamento = 'Marketing'
OR salario > 3000;
```

</details>

---

## Ejercicio 18

Mostrar los productos que no pertenezcan a la categoría Oficina.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
WHERE NOT categoria = 'Oficina';
```

</details>

---

## Ejercicio 19

Mostrar los clientes que no vivan en Sevilla y tengan más de 25 años.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
WHERE NOT ciudad = 'Sevilla'
AND edad > 25;
```

</details>

---

## Ejercicio 20

Mostrar los empleados que pertenezcan a Ventas o Marketing y tengan un salario entre 1800 y 3000 euros.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
WHERE (departamento = 'Ventas'
OR departamento = 'Marketing')
AND salario BETWEEN 1800 AND 3000