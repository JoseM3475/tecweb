# Ejercicios prácticos

Estos ejercicios te permitirán practicar la ordenación, agrupación y cálculo de datos utilizando SQL.

---

# Datos para realizar los ejercicios

## Tabla clientes

| id_cliente | nombre | ciudad | categoria |
|------------|---------|---------|------------|
| 1 | Ana | Madrid | Premium |
| 2 | Luis | Sevilla | Normal |
| 3 | Marta | Valencia | Premium |
| 4 | Pedro | Madrid | Normal |
| 5 | Sonia | Sevilla | Premium |
| 6 | Carlos | Bilbao | Normal |
| 7 | Elena | Valencia | Premium |

## Tabla productos

| id_producto | nombre | precio | categoria |
|-------------|---------|---------|------------|
| 1 | Ratón | 15 | Informática |
| 2 | Monitor | 220 | Informática |
| 3 | Teclado | 40 | Informática |
| 4 | Silla | 180 | Oficina |
| 5 | Lámpara | 35 | Oficina |
| 6 | Mesa | 250 | Oficina |
| 7 | Impresora | 120 | Informática |

## Tabla pedidos

| id_pedido | id_cliente | importe |
|------------|------------|----------|
| 1 | 1 | 120 |
| 2 | 1 | 80 |
| 3 | 2 | 40 |
| 4 | 3 | 200 |
| 5 | 3 | 150 |
| 6 | 3 | 90 |
| 7 | 4 | 60 |
| 8 | 5 | 300 |
| 9 | 5 | 120 |
| 10 | 7 | 180 |

## Tabla empleados

| id_empleado | nombre | departamento | salario |
|-------------|---------|--------------|----------|
| 1 | Laura | Ventas | 2200 |
| 2 | Javier | Ventas | 2400 |
| 3 | Pablo | Marketing | 2100 |
| 4 | Carmen | Marketing | 2300 |
| 5 | Raúl | Informática | 2800 |
| 6 | Silvia | Informática | 3100 |

---

## Ejercicio 1

Mostrar todos los clientes ordenados por nombre de forma ascendente.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
ORDER BY nombre ASC;
```

</details>

---

## Ejercicio 2

Mostrar todos los clientes ordenados por nombre de forma descendente.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
ORDER BY nombre DESC;
```

</details>

---

## Ejercicio 3

Mostrar todos los productos ordenados por precio de menor a mayor.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
ORDER BY precio ASC;
```

</details>

---

## Ejercicio 4

Mostrar todos los productos ordenados por precio de mayor a menor.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
ORDER BY precio DESC;
```

</details>

---

## Ejercicio 5

Mostrar los empleados ordenados por salario de mayor a menor.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM empleados
ORDER BY salario DESC;
```

</details>

---

## Ejercicio 6

Mostrar los clientes ordenados primero por ciudad y después por nombre.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM clientes
ORDER BY ciudad ASC, nombre ASC;
```

</details>

---

## Ejercicio 7

Mostrar los productos ordenados primero por categoría y después por precio.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
FROM productos
ORDER BY categoria ASC, precio ASC;
```

</details>

---

## Ejercicio 8

Contar cuántos clientes existen en la tabla.

<details>
<summary>Ver solución</summary>

```sql
SELECT COUNT(*) AS total_clientes
FROM clientes;
```

</details>

---

## Ejercicio 9

Contar cuántos productos existen en la tabla.

<details>
<summary>Ver solución</summary>

```sql
SELECT COUNT(*) AS total_productos
FROM productos;
```

</details>

---

## Ejercicio 10

Calcular el importe total de todos los pedidos.

<details>
<summary>Ver solución</summary>

```sql
SELECT SUM(importe) AS total_pedidos
FROM pedidos;
```

</details>

---

## Ejercicio 11

Calcular el precio medio de todos los productos.

<details>
<summary>Ver solución</summary>

```sql
SELECT AVG(precio) AS precio_medio
FROM productos;
```

</details>

---

## Ejercicio 12

Obtener el producto más caro.

<details>
<summary>Ver solución</summary>

```sql
SELECT MAX(precio) AS precio_maximo
FROM productos;
```

</details>

---

## Ejercicio 13

Obtener el producto más barato.

<details>
<summary>Ver solución</summary>

```sql
SELECT MIN(precio) AS precio_minimo
FROM productos;
```

></details>

---

## Ejercicio 14

Mostrar cuántos clientes hay en cada ciudad.

<details>
<summary>Ver solución</summary>

```sql
SELECT ciudad, COUNT(*) AS total_clientes
FROM clientes
GROUP BY ciudad;
```

</details>

---

## Ejercicio 15

Mostrar cuántos productos hay en cada categoría.

<details>
<summary>Ver solución</summary>

```sql
SELECT categoria, COUNT(*) AS total_productos
FROM producto*
GROUP BY categoria;
```

</detail*>

---

## Ejercicio 16

Calcular *l precio medio de los productos po* categoría.

<details>
<summary>Ve* solución</summary>

```sql
SELECT*categoria, AVG(precio) AS precio_m*dio
FROM productos
GROUP BY catego*ia;
```

</details>

---

## Ejerc*cio 17

Calcular el importe total *e pedidos realizado por cada clien*e.

<details>
<summary>Ver solució*</summary>

```sql
SELECT id_clien*e, SUM(importe) AS total_gastado
F*OM pedidos
GROUP BY id_cliente;
``*

</details>

---

## Ejercicio 18*
Mostrar cuántos pedidos ha realiz*do cada cliente.

<details>
<summa*y>Ver solución</summary>

```sql
S*LECT id_cliente, COUNT(*) AS total*pedidos
FROM pedidos
GROUP BY id_c*iente;
```

</details>

---

## Ej*rcicio 19

Mostrar únicamente las *iudades que tengan más de dos clie*tes.

<details>
*summary**er solución</summary>

```sql*SELECT ciudad, COUNT(*) AS total_clientes
FROM clientes
GROUP BY ciudad
HAVING COUNT(*) > 2;
```

</details>

---

## Ej*rcicio 20

Mostrar únicamente los clientes que hayan realizado más de un pedido.

<details>
<summary>Ver solución</summary>

```sql
SELECT id_cliente, COUNT(*) AS total_pedidos
FROM pedidos
GROUP BY id_cliente
HAVING COUNT(*) > 1;
```

</details>