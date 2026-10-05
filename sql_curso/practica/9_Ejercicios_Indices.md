# Ejercicios prácticos

Los siguientes ejercicios te permitirán practicar la creación y eliminación de índices en Access y MySQL.

---

# Datos para realizar los ejercicios

## Tabla clientes

| id_cliente | nombre | ciudad | email |
|------------|---------|---------|---------|
| 1 | Ana | Madrid | ana@email.com |
| 2 | Luis | Sevilla | luis@email.com |
| 3 | Marta | Valencia | marta@email.com |
| 4 | Pablo | Madrid | pablo@email.com |
| 5 | Sonia | Zaragoza | sonia@email.com |
| 6 | Carlos | Sevilla | carlos@email.com |
| 7 | Laura | Bilbao | laura@email.com |

## Tabla productos

| id_producto | nombre | categoria | precio |
|-------------|----------|-------------|---------|
| 1 | Ratón | Informática | 15 |
| 2 | Teclado | Informática | 40 |
| 3 | Monitor | Informática | 220 |
| 4 | Silla | Oficina | 180 |
| 5 | Lámpara | Oficina | 35 |
| 6 | Mesa | Oficina | 250 |

## Tabla pedidos

| id_pedido | id_cliente | fecha_pedido | ciudad_envio |
|------------|------------|--------------|---------------|
| 1 | 1 | 2025-01-10 | Madrid |
| 2 | 2 | 2025-01-11 | Sevilla |
| 3 | 1 | 2025-01-15 | Madrid |
| 4 | 3 | 2025-02-01 | Valencia |
| 5 | 4 | 2025-02-03 | Madrid |
| 6 | 5 | 2025-02-10 | Zaragoza |

## Tabla empleados

| id_empleado | nombre | dni | departamento |
|-------------|---------|---------|---------------|
| 1 | Pedro | 11111111A | Ventas |
| 2 | Lucía | 22222222B | Marketing |
| 3 | Juan | 33333333C | Ventas |
| 4 | Elena | 44444444D | RRHH |
| 5 | Marcos | 55555555E | Finanzas |

---

## Ejercicio 1

Crea un índice ordinario sobre la columna `ciudad` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Clientes_Ciudad
ON Clientes (ciudad);
```

</details>

---

## Ejercicio 2

Crea un índice ordinario sobre la columna `categoria` de la tabla `productos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Productos_Categoria
ON Productos (categoria);
```

</details>

---

## Ejercicio 3

Crea un índice ordinario sobre la columna `departamento` de la tabla `empleados`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Empleados_Departamento
ON Empleados (departamento);
```

</details>

---

## Ejercicio 4

Crea un índice ordinario sobre la columna `ciudad_envio` de la tabla `pedidos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Pedidos_CiudadEnvio
ON Pedidos (ciudad_envio);
```

</details>

---

## Ejercicio 5

Crea un índice ordinario sobre la columna `fecha_pedido` de la tabla `pedidos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Pedidos_FechaPedido
ON Pedidos (fecha_pedido);
```

</details>

---

## Ejercicio 6

Crea un índice único sobre la columna `email` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
CREATE UNIQUE INDEX IDX_Clientes_Email
ON Clientes (email);
```

</details>

---

## Ejercicio 7

Crea un índice único sobre la columna `dni` de la tabla `empleados`.

<details>
<summary>Ver solución</summary>

```sql
CREATE UNIQUE INDEX IDX_Empleados_DNI
ON Empleados (dni);
```

</details>

---

## Ejercicio 8

Crea un índice ordinario sobre la columna `nombre` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Clientes_Nombre
ON Clientes (nombre);
```

</details>

---

## Ejercicio 9

Crea un índice ordinario sobre la columna `nombre` de la tabla `productos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Productos_Nombre
ON Productos (nombre);
```

</details>

---

## Ejercicio 10

Crea un índice ordinario sobre la columna `id_cliente` de la tabla `pedidos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Pedidos_IdCliente
ON Pedidos (id_cliente);
```

</details>

---

## Ejercicio 11

Crea un índice compuesto sobre las columnas `ciudad` y `nombre` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Clientes_Ciudad_Nombre
ON Clientes (ciudad, nombre);
```

</details>

---

## Ejercicio 12

Crea un índice compuesto sobre las columnas `categoria` y `nombre` de la tabla `productos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Productos_Categoria_Nombre
ON Productos (categoria, nombre);
```

</details>

---

## Ejercicio 13

Crea un índice compuesto sobre las columnas `id_cliente` y `fecha_pedido` de la tabla `pedidos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Pedidos_Cliente_Fecha
ON Pedidos (id_cliente, fecha_pedido);
```

</details>

---

## Ejercicio 14

Crea un índice compuesto sobre las columnas `ciudad_envio` y `fecha_pedido` de la tabla `pedidos`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Pedidos_Ciudad_Fecha
ON Pedidos (ciudad_envio, fecha_pedido);
```

</details>

---

## Ejercicio 15

Crea un índice compuesto sobre las columnas `departamento` y `nombre` de la tabla `empleados`.

<details>
<summary>Ver solución</summary>

```sql
CREATE INDEX IDX_Empleados_Departamento_Nombre
ON Empleados (departamento, nombre);
```

</details>

---

## Ejercicio 16

Elimina el índice `IDX_Clientes_Ciudad` de la tabla `Clientes`.

<details>
<summary>Ver solución</summary>

```sql
DROP INDEX IDX_Clientes_Ciudad ON Clientes;
```

</details>

---

## Ejercicio 17

Elimina el índice `IDX_Productos_Categoria` de la tabla `Productos`.

<details>
<summary>Ver solución</summary>

```sql
DROP INDEX IDX_Productos_Categoria ON Productos;
```

</details>

---

## Ejercicio 18

Elimina el índice `IDX_Empleados_DNI` de la tabla `Empleados`.

<details>
<summary>Ver solución</summary>

```sql
DROP INDEX IDX_Empleados_DNI ON Empleados;
```

</details>

---

## Ejercicio 19

Elimina el índice `IDX_Pedidos_Cliente_Fecha` de la tabla `Pedidos`.

<details>
<summary>Ver solución</summary>

```sql
DROP INDEX IDX_Pedidos_Cliente_Fecha ON Pedidos;
```

</details>

---

## Ejercicio 20

Elimina el índice `IDX_Clientes_Ciudad_Nombre` de la tabla `Clientes`.

<details>
<summary>Ver solución</summary>

```sql
DROP INDEX IDX_Clientes_Ciudad_Nombre ON Clientes;
```

</details>
