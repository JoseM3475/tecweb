# Índices en Bases de Datos (Access y MySQL)

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es un índice en una base de datos.
- Entender para qué sirven los índices y por qué mejoran el rendimiento.
- Diferenciar los distintos tipos de índices:
  - Índices de clave primaria.
  - Índices ordinarios.
  - Índices únicos.
  - Índices compuestos.
- Crear índices en Access y MySQL.
- Eliminar índices cuando ya no son necesarios.
- Identificar situaciones en las que conviene utilizar cada tipo de índice.

---

## Introducción

Cuando una base de datos contiene pocos registros, encontrar información suele ser rápido. Sin embargo, cuando la cantidad de datos crece hasta miles o millones de registros, las búsquedas pueden volverse lentas.

Para solucionar este problema existen los **índices**.

Un índice funciona de forma parecida al índice de un libro. En lugar de leer todas las páginas para encontrar un tema concreto, consultamos el índice y vamos directamente a la página adecuada.

En una base de datos ocurre algo similar: un índice ayuda al sistema a localizar información de forma más rápida.

---

# Conceptos teóricos

## ¿Qué es un índice?

Un **índice** es una estructura especial que ayuda a localizar datos más rápidamente dentro de una tabla.

Sin índices, la base de datos tendría que revisar fila por fila hasta encontrar la información buscada.

Con índices, puede acceder directamente a los datos que necesita.

### Sin índice

Imagina una tabla de clientes con 100.000 registros.

Para encontrar al cliente con DNI "12345678A", la base de datos podría tener que revisar muchos registros.

### Con índice

Si existe un índice sobre el campo DNI, el sistema puede localizar al cliente de forma mucho más rápida.

---

## ¿Para qué sirven los índices?

Los índices se utilizan para:

- Acelerar búsquedas.
- Mejorar consultas con filtros.
- Mejorar ordenaciones.
- Mejorar relaciones entre tablas.

Por ejemplo:

```sql
SELECT *
FROM Clientes
WHERE DNI = '12345678A';
```

Explicación:

- `SELECT *` indica que queremos todas las columnas.
- `FROM Clientes` indica la tabla.
- `WHERE DNI = '12345678A'` busca un cliente concreto.

Si el campo `DNI` tiene un índice, la búsqueda será mucho más rápida.

---

## Inconveniente de los índices

Aunque los índices mejoran las consultas, también tienen un coste.

Cada vez que se inserta o modifica un registro, la base de datos debe actualizar los índices asociados.

Por ello:

- Tener algunos índices suele ser beneficioso.
- Tener demasiados índices puede ralentizar las operaciones de inserción y actualización.

La clave está en crear índices únicamente donde aporten valor.

---

## Índice de clave primaria

### ¿Qué es una clave primaria?

La **clave primaria** es un campo que identifica de forma única cada registro de una tabla.

Por ejemplo:

| IdCliente | Nombre |
|------------|---------|
| 1 | Ana |
| 2 | Pedro |
| 3 | Laura |

El campo `IdCliente` es único para cada cliente.

Cuando se crea una clave primaria, la base de datos crea automáticamente un índice asociado.

---

### ¿Para qué sirve?

Permite:

- Identificar cada registro.
- Evitar duplicados.
- Acceder rápidamente a los datos.

---

### Ejemplo en MySQL

```sql
CREATE TABLE Clientes (
    IdCliente INT PRIMARY KEY,
    Nombre VARCHAR(50)
);
```

Explicación:

- `CREATE TABLE` crea una tabla.
- `IdCliente INT` define una columna numérica.
- `PRIMARY KEY` establece la clave primaria.
- MySQL crea automáticamente un índice para esa clave.

---

### Ejemplo en Access

En Access, normalmente se establece la clave primaria desde el diseño de tabla.

También puede hacerse mediante SQL:

```sql
CREATE TABLE Clientes (
    IdCliente INTEGER,
    Nombre TEXT(50),
    CONSTRAINT PK_Clientes PRIMARY KEY (IdCliente)
);
```

Explicación:

- `CONSTRAINT` permite nombrar una restricción.
- `PRIMARY KEY` define la clave primaria.
- Se crea automáticamente un índice asociado.

---

## Índices ordinarios

### ¿Qué son?

Son índices normales utilizados para acelerar búsquedas.

No obligan a que los valores sean únicos.

---

### ¿Cuándo se utilizan?

Cuando buscamos frecuentemente por un campo que puede contener valores repetidos.

Por ejemplo:

- Ciudad.
- Categoría.
- Provincia.

---

### Ejemplo

Tabla Clientes:

| IdCliente | Nombre | Ciudad |
|------------|---------|---------|
| 1 | Ana | Madrid |
| 2 | Pedro | Madrid |
| 3 | Laura | Sevilla |

La ciudad "Madrid" aparece varias veces.

Podemos crear un índice sobre `Ciudad`.

---

### MySQL

```sql
CREATE INDEX IDX_Clientes_Ciudad
ON Clientes (Ciudad);
```

Explicación:

- `CREATE INDEX` crea un índice.
- `IDX_Clientes_Ciudad` es el nombre del índice.
- `ON Clientes` indica la tabla.
- `(Ciudad)` especifica el campo indexado.

---

### Access

```sql
CREATE INDEX IDX_Clientes_Ciudad
ON Clientes (Ciudad);
```

Explicación:

La sintaxis es muy similar a la utilizada en MySQL.

---

## Índices únicos

### ¿Qué son?

Un índice único obliga a que no existan valores repetidos.

Cada valor debe aparecer una sola vez.

---

### ¿Cuándo se utilizan?

Cuando un dato debe ser exclusivo.

Por ejemplo:

- DNI.
- Número de pasaporte.
- Correo electrónico.

---

### Ejemplo

Correcto:

| IdCliente | Email |
|------------|--------|
| 1 | ana@empresa.com |
| 2 | pedro@empresa.com |

Incorrecto:

| IdCliente | Email |
|------------|--------|
| 1 | ana@empresa.com |
| 2 | ana@empresa.com |

El segundo registro provocaría un error.

---

### MySQL

```sql
CREATE UNIQUE INDEX IDX_Clientes_Email
ON Clientes (Email);
```

Explicación:

- `UNIQUE` indica que los valores deben ser únicos.
- No permite correos repetidos.
- Ayuda tanto al rendimiento como a la integridad de los datos.

---

### Access

```sql
CREATE UNIQUE INDEX IDX_Clientes_Email
ON Clientes (Email);
```

Explicación:

- `UNIQUE` impide valores duplicados.
- La sintaxis es equivalente.

---

## Índices compuestos

### ¿Qué son?

Un índice compuesto utiliza varios campos al mismo tiempo.

En lugar de indexar una única columna, indexa una combinación de columnas.

---

### ¿Para qué sirven?

Son útiles cuando las consultas utilizan varios campos conjuntamente.

---

### Ejemplo

Tabla Pedidos:

| IdPedido | Ciudad | Fecha |
|-----------|---------|--------|
| 1 | Madrid | 2025-01-10 |
| 2 | Madrid | 2025-02-05 |
| 3 | Sevilla | 2025-01-20 |

Consulta frecuente:

```sql
SELECT *
FROM Pedidos
WHERE Ciudad = 'Madrid'
AND Fecha = '2025-01-10';
```

La búsqueda utiliza dos campos:

- Ciudad.
- Fecha.

Por ello puede ser interesante crear un índice compuesto.

---

### MySQL

```sql
CREATE INDEX IDX_Pedidos_Ciudad_Fecha
ON Pedidos (Ciudad, Fecha);
```

Explicación:

- El índice incluye dos columnas.
- Primero organiza por Ciudad.
- Dentro de cada ciudad organiza por Fecha.
- Mejora consultas que utilicen ambas columnas.

---

### Access

```sql
CREATE INDEX IDX_Pedidos_Ciudad_Fecha
ON Pedidos (Ciudad, Fecha);
```

Explicación:

- Se crean índices sobre la combinación de columnas.
- Resulta útil para consultas que filtran por ambos campos.

---

## Eliminación de índices

### ¿Por qué eliminar un índice?

Puede ser necesario cuando:

- Ya no se utiliza.
- Fue creado por error.
- Está afectando al rendimiento de inserciones o actualizaciones.
- Existe otro índice mejor diseñado.

---

## Eliminar índices en MySQL

### Sintaxis

```sql
DROP INDEX nombre_indice
ON nombre_tabla;
```

---

### Ejemplo

```sql
DROP INDEX IDX_Clientes_Ciudad
ON Clientes;
```

Explicación:

- `DROP INDEX` elimina un índice.
- `IDX_Clientes_Ciudad` es el índice a eliminar.
- `ON Clientes` indica la tabla.

---

## Eliminar índices en Access

### Sintaxis

```sql
DROP INDEX nombre_indice
ON nombre_tabla;
```

---

### Ejemplo

```sql
DROP INDEX IDX_Clientes_Ciudad
ON Clientes;
```

Explicación:

- El índice deja de existir.
- Los datos de la tabla no se eliminan.
- Solo desaparece la estructura auxiliar utilizada para acelerar búsquedas.

---

## Analogía del mundo real

Imagina una biblioteca con miles de libros.

### Sin índice

Para encontrar un libro de historia tendrías que recorrer todas las estanterías una por una.

Sería lento y agotador.

### Con índice

Existe un catálogo que indica exactamente dónde está cada libro.

Buscas el libro en el catálogo y vas directamente a la ubicación correcta.

Los índices de bases de datos funcionan de la misma manera:

- El libro equivale al dato.
- La biblioteca equivale a la tabla.
- El catálogo equivale al índice.

Gracias al catálogo, localizar información resulta mucho más rápido.

---

# Ejemplos prácticos

## Ejemplo 1: Índice ordinario

```sql
CREATE INDEX IDX_Productos_Categoria
ON Productos (Categoria);
```

Explicación:

- Se crea un índice llamado `IDX_Productos_Categoria`.
- Se aplica a la columna `Categoria`.
- Facilita búsquedas por categoría.

---

Consulta beneficiada:

```sql
SELECT *
FROM Productos
WHERE Categoria = 'Informática';
```

Explicación:

- Busca productos de informática.
- El índice permite localizarlos rápidamente.

---

## Ejemplo 2: Índice único

```sql
CREATE UNIQUE INDEX IDX_Empleados_DNI
ON Empleados (DNI);
```

Explicación:

- Se crea un índice único.
- No permite DNIs repetidos.
- Garantiza que cada empleado tenga un DNI distinto.

---

## Ejemplo 3: Índice compuesto

```sql
CREATE INDEX IDX_Pedidos_Cliente_Fecha
ON Pedidos (IdCliente, FechaPedido);
```

Explicación:

- Se indexan dos columnas.
- Mejora búsquedas por cliente y fecha.
- Es útil cuando ambas columnas aparecen juntas en las consultas.

---

## Ejemplo 4: Eliminación de índice

```sql
DROP INDEX IDX_Pedidos_Cliente_Fecha
ON Pedidos;
```

Explicación:

- Elimina el índice compuesto.
- Los datos permanecen intactos.
- Solo desaparece la estructura de búsqueda.

---

# Errores frecuentes

## Crear índices en campos que apenas se utilizan

Error:

Crear índices sobre todas las columnas por si acaso.

Problema:

- Consumirá espacio.
- Puede reducir el rendimiento de inserciones y actualizaciones.

---

## Confundir índice único con índice ordinario

Error:

Pensar que todos los índices impiden duplicados.

Realidad:

- Índice ordinario → permite duplicados.
- Índice único → no permite duplicados.

---

## Crear un índice único sobre datos duplicados

Si ya existen registros repetidos:

```sql
CREATE UNIQUE INDEX IDX_Email
ON Clientes (Email);
```

La creación fallará si algún correo está repetido.

---

## Pensar que un índice almacena datos nuevos

Error común:

Creer que el índice contiene una copia completa de la tabla.

Realidad:

El índice solo contiene información que ayuda a localizar registros.

---

## Olvidar eliminar índices innecesarios

Con el tiempo pueden acumularse índices que ya no se usan.

Esto puede afectar negativamente al rendimiento general de la base de datos.

---

# Resumen

- Los índices aceleran las búsquedas en una base de datos.
- Funcionan de forma similar al índice de un libro.
- La clave primaria genera automáticamente un índice.
- Los índices ordinarios permiten valores repetidos.
- Los índices únicos impiden duplicados.
- Los índices compuestos utilizan varias columnas.
- Los índices mejoran las consultas pero tienen un coste de mantenimiento.
- Los índices pueden eliminarse cuando dejan de ser útiles.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Índice | Estructura que acelera la búsqueda de información. |
| Clave primaria | Campo que identifica de forma única cada registro. |
| Índice de clave primaria | Índice creado automáticamente al definir una clave primaria. |
| Índice ordinario | Índice que mejora búsquedas y permite valores repetidos. |
| Índice único | Índice que prohíbe valores duplicados. |
| Índice compuesto | Índice formado por varias columnas. |
| CREATE INDEX | Instrucción para crear índices. |
| CREATE UNIQUE INDEX | Instrucción para crear índices únicos. |
| DROP INDEX | Instrucción para eliminar índices. |
| Rendimiento | Velocidad con la que la base de datos encuentra información. |

---

# Ejercicios de reflexión

1. ¿Por qué una base de datos con millones de registros puede beneficiarse del uso de índices?

2. ¿Qué diferencia existe entre un índice ordinario y un índice único?

3. ¿Por qué una clave primaria genera automáticamente un índice?

4. ¿En qué situación sería útil crear un índice compuesto sobre las columnas `Ciudad` y `Fecha`?

5. ¿Qué ventajas y desventajas puede tener añadir muchos índices a una misma tabla?
