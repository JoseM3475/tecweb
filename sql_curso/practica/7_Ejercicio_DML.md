# Ejercicios prácticos

Los siguientes ejercicios permiten practicar la creación, modificación y eliminación de tablas utilizando los comandos DDL vistos en la sesión.

---

# Datos para realizar los ejercicios

## Tabla clientes

| id_cliente | nombre | ciudad | categoria |
|------------|----------|----------|-----------|
| 1 | Ana | Madrid | Premium |
| 2 | Luis | Sevilla | Normal |
| 3 | Marta | Valencia | Premium |
| 4 | Pablo | Madrid | Normal |
| 5 | Sonia | Sevilla | Premium |
| 6 | Carlos | Bilbao | Normal |

---

## Tabla productos

| id_producto | nombre | precio | categoria |
|------------|----------|----------|-----------|
| 1 | Ratón | 15.99 | Informática |
| 2 | Teclado | 39.90 | Informática |
| 3 | Monitor | 219.50 | Informática |
| 4 | Silla | 180.00 | Oficina |
| 5 | Lámpara | 35.20 | Oficina |
| 6 | Archivador | 89.90 | Oficina |

---

## Tabla empleados

| id_empleado | nombre | departamento |
|------------|----------|---------------|
| 1 | Laura | Ventas |
| 2 | Pedro | Ventas |
| 3 | Elena | Soporte |
| 4 | David | Soporte |
| 5 | Raúl | Administración |
| 6 | Irene | Marketing |

---

## Tabla alumnos

| id_alumno | nombre | ciudad |
|------------|----------|----------|
| 1 | Sergio | Madrid |
| 2 | Clara | Sevilla |
| 3 | Nuria | Valencia |
| 4 | Diego | Madrid |
| 5 | Iván | Bilbao |
| 6 | Lucía | Sevilla |

---

## Tabla cursos

| id_curso | nombre_curso | categoria |
|------------|---------------|------------|
| 1 | SQL Básico | Bases de Datos |
| 2 | Access | Bases de Datos |
| 3 | Excel | Ofimática |
| 4 | Word | Ofimática |
| 5 | Power BI | Análisis |
| 6 | PowerPoint | Ofimática |

---

## Tabla libros

| id_libro | titulo | categoria |
|-----------|----------|------------|
| 1 | SQL para Todos | Tecnología |
| 2 | Historia de Roma | Historia |
| 3 | Física Fácil | Ciencia |
| 4 | Don Quijote | Literatura |
| 5 | El Principito | Literatura |
| 6 | Bases de Datos | Tecnología |

---

## Ejercicio 1

Crear una tabla llamada `proveedores` con las columnas:

- id_proveedor (entero)
- nombre (texto de 50 caracteres)

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE proveedores (
    id_proveedor INT,
    nombre VARCHAR(50)
);
```

</details>

---

## Ejercicio 2

Crear una tabla llamada `editoriales` con las columnas:

- id_editorial (entero)
- nombre (texto de 100 caracteres)
- ciudad (texto de 50 caracteres)

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE editoriales (
    id_editorial INT,
    nombre VARCHAR(100),
    ciudad VARCHAR(50)
);
```

</details>

---

## Ejercicio 3

Crear una tabla llamada `prestamos` con las columnas:

- id_prestamo (entero)
- fecha_prestamo (fecha)
- id_libro (entero)

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE prestamos (
    id_prestamo INT,
    fecha_prestamo DATE,
    id_libro INT
);
```

</details>

---

## Ejercicio 4

Crear una tabla llamada `pedidos` con las columnas:

- id_pedido (entero)
- fecha_pedido (fecha)
- importe (decimal con dos decimales)

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE pedidos (
    id_pedido INT,
    fecha_pedido DATE,
    importe DECIMAL(10,2)
);
```

</details>

---

## Ejercicio 5

Crear una tabla llamada `matriculas` con las columnas:

- id_matricula (entero)
- id_alumno (entero)
- fecha_matricula (fecha)

<details>
<summary>Ver solución</summary>

```sql
CREATE TABLE matriculas (
    id_matricula INT,
    id_alumno INT,
    fecha_matricula DATE
);
```

</details>

---

## Ejercicio 6

Añadir una columna llamada `telefono` de tipo texto de 20 caracteres a la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE clientes
ADD telefono VARCHAR(20);
```

</details>

---

## Ejercicio 7

Añadir una columna llamada `email` de tipo texto de 100 caracteres a la tabla `empleados`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE empleados
ADD email VARCHAR(100);
```

</details>

---

## Ejercicio 8

Añadir una columna llamada `stock` de tipo entero a la tabla `productos`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE productos
ADD stock INT;
```

</details>

---

## Ejercicio 9

Añadir una columna llamada `duracion_horas` de tipo entero a la tabla `cursos`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE cursos
ADD duracion_horas INT;
```

</details>

---

## Ejercicio 10

Añadir una columna llamada `activo` de tipo BOOLEAN a la tabla `alumnos`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE alumnos
ADD activo BOOLEAN;
```

</details>

---

## Ejercicio 11

Configurar el valor por defecto `'Normal'` para la columna `categoria` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE clientes
ALTER COLUMN categoria
SET DEFAULT 'Normal';
```

</details>

---

## Ejercicio 12

Configurar el valor por defecto `'Oficina'` para la columna `categoria` de la tabla `productos`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE productos
ALTER COLUMN categoria
SET DEFAULT 'Oficina';
```

</details>

---

## Ejercicio 13

Configurar el valor por defecto `TRUE` para la columna `activo` de la tabla `alumnos`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE alumnos
ALTER COLUMN activo
SET DEFAULT TRUE;
```

</details>

---

## Ejercicio 14

Configurar el valor por defecto `'Ventas'` para la columna `departamento` de la tabla `empleados`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE empleados
ALTER COLUMN departamento
SET DEFAULT 'Ventas';
```

</details>

---

## Ejercicio 15

Configurar el valor por defecto `'Tecnología'` para la columna `categoria` de la tabla `libros`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE libros
ALTER COLUMN categoria
SET DEFAULT 'Tecnología';
```

</details>

---

## Ejercicio 16

Eliminar el valor por defecto de la columna `categoria` de la tabla `clientes`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE clientes
ALTER COLUMN categoria
DROP DEFAULT;
```

</details>

---

## Ejercicio 17

Eliminar el valor por defecto de la columna `departamento` de la tabla `empleados`.

<details>
<summary>Ver solución</summary>

```sql
ALTER TABLE empleados
ALTER COLUMN departamento
DROP DEFAULT;
```

</details>

---
## Ejercicio 18

Vaciar completamente la tabla `clientes` conservando su estructura.

<details>
<summary>Ver solución</summary>

```sql
TRUNCATE TABLE clientes;
```

</details>

---

## Ejercicio 19

Vaciar completamente la tabla `productos` conservando todas sus columnas.

<details>
<summary>Ver solución</summary>

```sql
TRUNCATE TABLE productos;
```

</details>

---

## Ejercicio 20

Eliminar completamente la tabla `prestamos`.

<details>
<summary>Ver solución</summary>

```sql
DROP TABLE prestamos;
```

</details>
