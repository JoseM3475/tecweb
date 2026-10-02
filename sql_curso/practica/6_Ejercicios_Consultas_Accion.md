# Ejercicios prácticos

Los siguientes ejercicios permiten practicar la creación de tablas, inserción de datos, actualización de registros, eliminación de datos, creación de tablas mediante consultas y uso de las cláusulas DISTINCT y DISTINCT ROW.

---

# Datos para realizar los ejercicios

## Tabla clientes

### Estructura

- id_cliente
- nombre
- ciudad
- categoria

| id_cliente | nombre | ciudad | categoria |
|------------|---------|---------|------------|
| 1 | Ana | Madrid | Premium |
| 2 | Luis | Sevilla | Normal |
| 3 | Marta | Valencia | Premium |
| 4 | Pablo | Madrid | Normal |
| 5 | Sonia | Bilbao | Premium |
| 6 | Carlos | Sevilla | Normal |

---

## Tabla productos

### Estructura

- id_producto
- nombre
- precio
- categoria

| id_producto | nombre | precio | categoria |
|-------------|---------|---------|------------|
| 1 | Ratón | 15 | Informática |
| 2 | Monitor | 220 | Informática |
| 3 | Teclado | 40 | Informática |
| 4 | Silla | 180 | Oficina |
| 5 | Lámpara | 35 | Oficina |
| 6 | Impresora | 150 | Informática |

---

## Tabla empleados

### Estructura

- id_empleado
- nombre
- departamento
- salario

| id_empleado | nombre | departamento | salario |
|-------------|---------|--------------|----------|
| 1 | Laura | Ventas | 1800 |
| 2 | Pedro | Ventas | 2200 |
| 3 | Elena | RRHH | 2400 |
| 4 | Jorge | RRHH | 1900 |
| 5 | Silvia | IT | 3200 |
| 6 | Mario | IT | 2800 |

---

## Tabla libros

### Estructura

- id_libro
- titulo
- categoria

| id_libro | titulo | categoria |
|-----------|---------|------------|
| 1 | SQL Fácil | Bases de Datos |
| 2 | SQL Fácil | Bases de Datos |
| 3 | Excel Básico | Ofimática |
| 4 | Redes para Todos | Redes |
| 5 | Excel Básico | Ofimática |
| 6 | Python Inicial | Programación |

---

## Tabla cursos

### Estructura

- id_curso
- nombre_curso
- ciudad

| id_curso | nombre_curso | ciudad |
|-----------|--------------|---------|
| 1 | SQL Básico | Madrid |
| 2 | Excel | Sevilla |
| 3 | Power BI | Madrid |
| 4 | Python | Valencia |
| 5 | Access | Sevilla |

---

## Ejercicio 1

Crear una tabla llamada `alumnos` con las columnas `id_alumno`, `nombre` y `ciudad`.

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE alumnos (
    id_alumno INT,
    nombre VARCHAR(50),
    ciudad VARCHAR(50)
);
```

</details>

---

## Ejercicio 2

Crear una tabla llamada `bibliotecas` con las columnas `id_biblioteca`, `nombre` y `ciudad`.

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE bibliotecas (
    id_biblioteca INT,
    nombre VARCHAR(50),
    ciudad VARCHAR(50)
);
```

</details>

---

## Ejercicio 3

Crear una tabla llamada `pedidos` con las columnas `id_pedido`, `id_cliente` e `id_producto`.

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE pedidos (
    id_pedido INT,
    id_cliente INT,
    id_producto INT
);
```

</details>

---

## Ejercicio 4

Insertar un nuevo cliente llamado Alberto que vive en Málaga y tiene categoría Premium.

<details>
<summary>Ver solución</summary>

```sql
INSERT INTO clientes (id_cliente, nombre, ciudad, categoria)
VALUES (7, 'Alberto', 'Malaga', 'Premium');
```

</details>

---

## Ejercicio 5

Insertar un nuevo producto llamado Webcam con precio 60 y categoría Informática.

<details>
<summary>Ver solución</summary>

```sql
INSERT INTO productos (id_producto, nombre, precio, categoria)
VALUES (7, 'Webcam', 60, 'Informática');
```

</details>

---

## Ejercicio 6

Insertar un nuevo empleado llamado Raquel en el departamento Ventas con salario 2100.

<details>
<summary>Ver solución</summary>

```sql
INSERT INTO empleados (id_empleado, nombre, departamento, salario)
VALUES (7, 'Raquel', 'Ventas', 2100);
```

</details>

---

## Ejercicio 7

Insertar un nuevo curso llamado Access Avanzado en Zaragoza.

<details>
<summary>Ver solución</summary>

```sql
INSERT INTO cursos (id_curso, nombre_curso, ciudad)
VALUES (6, 'Access Avanzado', 'Zaragoza');
```

</details>

---

## Ejercicio 8

Actualizar la ciudad del cliente Luis para que pase a ser Málaga.

<details>
<summary>Ver solución</summary>

```sql
UPDATE clientes
SET ciudad = 'Malaga'
WHERE nombre = 'Luis';
```

</details>

---

## Ejercicio 9

Actualizar el precio de la Impresora a 170.

<details>
<summary>Ver solución</summary>

```sql
UPDATE productos
SET precio = 170
WHERE nombre = 'Impresora';
```

</details>

---

## Ejercicio 10

Actualizar el salario de Jorge a 2100.

<details>
<summary>Ver solución</summary>

```sql
UPDATE empleados
SET salario = 2100
WHERE nombre = 'Jorge';
```

</details>

---

## Ejercicio 11

Actualizar la ciudad del curso Power BI para que pase a impartirse en Bilbao.

<details>
<summary>Ver solución</summary>

```sql
UPDATE cursos
SET ciudad = 'Bilbao'
WHERE nombre_curso = 'Power BI';
```

</details>

---

## Ejercicio 12

Eliminar el cliente llamado Pablo.

<details>
<summary>Ver solución</summary>

```sql
DELETE FROM clientes
WHERE nombre = 'Pablo';
```

</details>

---

## Ejercicio 13

Eliminar el producto llamado Lámpara.

<details>
<summary>Ver solución</summary>

```sql
DELETE FROM productos
WHERE nombre = 'Lámpara';
```

</details>

---

## Ejercicio 14

Eliminar el empleado llamado Laura.

<details>
<summary>Ver solución</summary>

```sql
DELETE FROM empleados
WHERE nombre = 'Laura';
```

</details>

---

## Ejercicio 15

Mostrar las ciudades de los clientes sin repetir valores.

<details>
<summary>Ver solución</summary>

```sql
SELECT DISTINCT ciudad
FROM clientes;
```

</details>

---

## Ejercicio 16

Mostrar las categorías de productos sin repetir.

<details>
<summary>Ver solución</summary>

```sql
SELECT DISTINCT categoria
FROM productos;
```

</details>

---

## Ejercicio 17

Mostrar los títulos de libros sin repetir.

<details>
<summary>Ver solución</summary>

```sql
SELECT DISTINCT titulo
FROM libros;
```

</details>

---

## Ejercicio 18

Crear una nueva tabla llamada `clientes_madrid` con los clientes que viven en Madrid.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
INTO clientes_madrid
FROM clientes
WHERE ciudad = 'Madrid';
```

</details>

---

## Ejercicio 19

Crear una nueva tabla llamada `productos_informatica` con los productos de la categoría Informática.

<details>
<summary>Ver solución</summary>

```sql
SELECT *
INTO productos_informatica
FROM productos
WHERE categoria = 'Informática';
```

</details>

---

## Ejercicio 20

Mostrar las combinaciones únicas de título y categoría de la tabla libros utilizando DISTINCT ROW.

<details>
<summary>Ver solución</summary>

```sql
SELECT DISTINCT ROW titulo, categoria
FROM libros;
```

</details>
