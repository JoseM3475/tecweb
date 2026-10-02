# Comandos DDL para la Gestión de Tablas y Tipos de Datos

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué son los comandos DDL.
- Entender para qué sirven las instrucciones `CREATE`, `ALTER`, `DROP` y `TRUNCATE`.
- Conocer los tipos de datos más habituales utilizados en una tabla.
- Comprender qué es un valor predeterminado o valor por defecto.
- Utilizar `SET DEFAULT` y `DROP DEFAULT`.
- Identificar cuándo es necesario crear, modificar o eliminar una tabla.
- Comprender cómo se estructura la información dentro de una base de datos.

---

# Introducción

Hasta ahora hemos visto cómo consultar información almacenada en una base de datos. Pero antes de poder consultar datos, es necesario crear el lugar donde esos datos se van a guardar.

Una base de datos puede compararse con un archivador.

- La base de datos es el archivador completo.
- Las tablas son los cajones del archivador.
- Las filas son las fichas que guardamos dentro.
- Las columnas indican qué información contiene cada ficha.

Los comandos DDL permiten crear y modificar la estructura de esas tablas.

DDL significa **Data Definition Language** o **Lenguaje de Definición de Datos**.

Su función es definir cómo estará organizada la información antes de empezar a trabajar con ella.

---

# Conceptos teóricos

## ¿Qué es DDL?

DDL es un conjunto de comandos SQL utilizados para crear y modificar la estructura de una base de datos.

### ¿Para qué sirve?

Sirve para:

- Crear tablas.
- Modificar tablas existentes.
- Eliminar tablas.
- Vaciar tablas.
- Definir columnas y tipos de datos.

### ¿Cuándo se utiliza?

Se utiliza cuando estamos diseñando o modificando una base de datos.

Por ejemplo:

- Cuando una empresa comienza a utilizar una nueva aplicación.
- Cuando necesitamos añadir una nueva columna.
- Cuando una tabla ya no es necesaria.

---

## CREATE

### ¿Qué es?

`CREATE` es el comando utilizado para crear nuevos objetos en una base de datos.

En esta sesión nos centraremos en la creación de tablas.

### ¿Para qué sirve?

Sirve para:

- Crear una tabla nueva.
- Definir sus columnas.
- Especificar qué tipo de datos almacenará cada columna.

### ¿Cuándo se utiliza?

Cuando la tabla todavía no existe.

---

### Ejemplo sencillo

Queremos crear una tabla para almacenar clientes.

```sql
CREATE TABLE clientes (
    id_cliente INT,
    nombre VARCHAR(50),
    ciudad VARCHAR(50)
);
```

Explicación:

- `CREATE TABLE clientes` crea una tabla llamada clientes.
- `id_cliente INT` crea una columna numérica.
- `nombre VARCHAR(50)` crea una columna de texto de hasta 50 caracteres.
- `ciudad VARCHAR(50)` crea otra columna de texto.

Después de ejecutar la consulta, la tabla queda creada y lista para almacenar información.

---

## Tipos de datos habituales

### ¿Qué son?

Los tipos de datos indican qué clase de información puede almacenarse en una columna.

De la misma forma que en un formulario hay casillas para nombres, fechas o cantidades, en una tabla cada columna debe indicar qué tipo de dato guardará.

---

### INT

Se utiliza para números enteros.

Ejemplos:

- 1
- 25
- 100

```sql
id_cliente INT
```

Explicación:

La columna almacenará números enteros.

---

### VARCHAR

Se utiliza para almacenar texto.

Ejemplos:

- Ana
- Madrid
- Informática

```sql
nombre VARCHAR(50)
```

Explicación:

La columna podrá almacenar texto de hasta 50 caracteres.

---

### DATE

Se utiliza para almacenar fechas.

Ejemplos:

- 2026-01-15
- 2026-09-30

```sql
fecha_pedido DATE
```

Explicación:

La columna almacenará fechas.

---

### DECIMAL

Se utiliza para cantidades con decimales.

Ejemplos:

- 10.50
- 99.95
- 250.75

```sql
precio DECIMAL(10,2)
```

Explicación:

- Puede almacenar números.
- Tendrá dos decimales.

---

### BOOLEAN

Se utiliza para indicar verdadero o falso.

Ejemplos:

- TRUE
- FALSE

```sql
activo BOOLEAN
```

Explicación:

La columna almacena un valor lógico.

---

## ALTER

### ¿Qué es?

`ALTER` permite modificar la estructura de una tabla existente.

### ¿Para qué sirve?

Sirve para:

- Añadir columnas.
- Modificar columnas.
- Cambiar configuraciones.

### ¿Cuándo se utiliza?

Cuando la tabla ya existe pero necesitamos realizar cambios.

---

### Ejemplo: añadir una columna

Supongamos que queremos guardar el teléfono de los clientes.

```sql
ALTER TABLE clientes
ADD telefono VARCHAR(20);
```

Explicación:

- `ALTER TABLE clientes` indica la tabla a modificar.
- `ADD` añade un nuevo elemento.
- `telefono VARCHAR(20)` crea una nueva columna de texto.

---

### Resultado

Antes:

| id_cliente | nombre | ciudad |
|------------|---------|---------|
| 1 | Ana | Madrid |

Después:

| id_cliente | nombre | ciudad | telefono |
|------------|---------|---------|----------|
| 1 | Ana | Madrid |  |

---

## SET DEFAULT

### ¿Qué es?

Un valor por defecto es un valor que SQL asignará automáticamente cuando no indiquemos ninguno.

### ¿Para qué sirve?

Sirve para evitar dejar ciertos campos vacíos.

### ¿Cuándo se utiliza?

Cuando un valor suele repetirse con frecuencia.

---

### Ejemplo

Supongamos que la mayoría de los nuevos clientes pertenecen a la categoría "Normal".

```sql
ALTER TABLE clientes
ALTER COLUMN categoria
SET DEFAULT 'Normal';
```

Explicación:

- Se modifica la columna categoria.
- Se establece un valor por defecto.
- Si no se indica otro valor, SQL utilizará "Normal".

---

### Resultado conceptual

Si insertamos un cliente sin indicar categoría:

```sql
INSERT INTO clientes (id_cliente, nombre)
VALUES (10, 'Carlos');
```

La categoría se guardará automáticamente como:

```text
Normal
```

---

## DROP DEFAULT

### ¿Qué es?

Permite eliminar el valor por defecto asociado a una columna.

### ¿Para qué sirve?

Sirve para que SQL deje de rellenar automáticamente ese campo.

### ¿Cuándo se utiliza?

Cuando la regla anterior ya no es necesaria.

---

### Ejemplo

```sql
ALTER TABLE clientes
ALTER COLUMN categoria
DROP DEFAULT;
```

Explicación:

- Se elimina el valor por defecto.
- A partir de ese momento SQL ya no asignará automáticamente "Normal".

---

## TRUNCATE

### ¿Qué es?

`TRUNCATE` elimina todos los registros de una tabla.

### ¿Para qué sirve?

Sirve para vaciar rápidamente una tabla.

### ¿Cuándo se utiliza?

Cuando queremos conservar la estructura de la tabla pero eliminar todos los datos.

---

### Ejemplo

```sql
TRUNCATE TABLE clientes;
```

Explicación:

- `TRUNCATE TABLE` indica que la tabla será vaciada.
- `clientes` es la tabla afectada.
- La estructura permanece.
- Los registros desaparecen.

---

### Resultado conceptual

Antes:

| id_cliente | nombre |
|------------|---------|
| 1 | Ana |
| 2 | Luis |
| 3 | Marta |

Después:

| id_cliente | nombre |
|------------|---------|

La tabla sigue existiendo, pero está vacía.

---

## DROP

### ¿Qué es?

`DROP` elimina completamente una tabla.

### ¿Para qué sirve?

Sirve para borrar una tabla que ya no necesitamos.

### ¿Cuándo se utiliza?

Cuando estamos seguros de que la tabla no volverá a utilizarse.

---

### Ejemplo

```sql
DROP TABLE clientes;
```

Explicación:

- `DROP TABLE` elimina una tabla.
- `clientes` es la tabla que se eliminará.

---

### Diferencia entre DROP y TRUNCATE

`TRUNCATE`

- Conserva la tabla.
- Elimina únicamente los datos.

`DROP`

- Elimina los datos.
- Elimina la estructura.
- Elimina completamente la tabla.

---

# Analogía del mundo real

Imagina una biblioteca.

- Crear una estantería nueva equivale a utilizar `CREATE`.
- Añadir una balda nueva a una estantería equivale a utilizar `ALTER`.
- Establecer que los libros nuevos vayan por defecto a una sección equivale a `SET DEFAULT`.
- Eliminar esa regla automática equivale a `DROP DEFAULT`.
- Vaciar todos los libros de una estantería pero conservarla equivale a `TRUNCATE`.
- Tirar toda la estantería a la basura equivale a `DROP`.

Esta diferencia es importante porque vaciar una estantería no es lo mismo que eliminarla completamente.

---

# Ejemplos prácticos

## Ejemplo 1: Crear una tabla de productos

```sql
CREATE TABLE productos (
    id_producto INT,
    nombre VARCHAR(50),
    precio DECIMAL(10,2)
);
```

Explicación:

- Se crea una tabla llamada productos.
- Se define una columna para el identificador.
- Se define una columna para el nombre.
- Se define una columna para el precio.

---

## Ejemplo 2: Añadir una columna

```sql
ALTER TABLE productos
ADD categoria VARCHAR(30);
```

Explicación:

- Se modifica la tabla productos.
- Se añade una columna llamada categoria.
- Almacenará texto.

---

## Ejemplo 3: Establecer un valor por defecto

```sql
ALTER TABLE productos
ALTER COLUMN categoria
SET DEFAULT 'General';
```

Explicación:

- Se modifica la columna categoria.
- Si no se indica categoría, se asignará General.

---

## Ejemplo 4: Eliminar el valor por defecto

```sql
ALTER TABLE productos
ALTER COLUMN categoria
DROP DEFAULT;
```

Explicación:

- Se elimina la regla automática.
- SQL dejará de asignar el valor General.

---

## Ejemplo 5: Vaciar una tabla

```sql
TRUNCATE TABLE productos;
```

Explicación:

- Se eliminan todos los registros.
- La tabla sigue existiendo.

---

## Ejemplo 6: Eliminar una tabla

```sql
DROP TABLE productos;
```

Explicación:

- Se elimina la tabla completa.
- También desaparecen sus datos.

---

# Errores frecuentes

## Confundir DROP con TRUNCATE

Error:

Usar `DROP` cuando únicamente se quería borrar los datos.

Consecuencia:

La tabla desaparece completamente.

---

## Elegir un tipo de dato incorrecto

Ejemplo:

Guardar un precio utilizando `VARCHAR`.

Problema:

Los precios deberían almacenarse como números.

---

## Intentar modificar una tabla que no existe

Ejemplo:

```sql
ALTER TABLE clientes
ADD telefono VARCHAR(20);
```

Problema:

La tabla debe existir previamente.

---

## Eliminar un valor por defecto por error

Si se utiliza `DROP DEFAULT`, los nuevos registros ya no recibirán automáticamente el valor establecido anteriormente.

---

## Crear columnas demasiado pequeñas

Ejemplo:

```sql
nombre VARCHAR(5)
```

Problema:

Muchos nombres no cabrán en la columna.

---

# Resumen

- Los comandos DDL sirven para definir la estructura de una base de datos.
- `CREATE` crea tablas.
- `ALTER` modifica tablas existentes.
- `DROP` elimina completamente una tabla.
- `TRUNCATE` elimina todos los registros manteniendo la tabla.
- Los tipos de datos indican qué información puede almacenarse en una columna.
- Entre los tipos más habituales están `INT`, `VARCHAR`, `DATE`, `DECIMAL` y `BOOLEAN`.
- `SET DEFAULT` establece un valor automático.
- `DROP DEFAULT` elimina dicho valor automático.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| DDL | Conjunto de comandos que definen la estructura de la base de datos. |
| CREATE | Crea una tabla nueva. |
| ALTER | Modifica una tabla existente. |
| DROP | Elimina una tabla completamente. |
| TRUNCATE | Vacía una tabla sin eliminarla. |
| Tipo de dato | Define qué información puede almacenarse en una columna. |
| INT | Tipo de dato para números enteros. |
| VARCHAR | Tipo de dato para texto. |
| DATE | Tipo de dato para fechas. |
| DECIMAL | Tipo de dato para números con decimales. |
| SET DEFAULT | Establece un valor automático para una columna. |
| DROP DEFAULT | Elimina el valor automático de una columna. |

---

# Ejercicios de reflexión

1. ¿En qué situación utilizarías `CREATE TABLE`?

2. ¿Qué diferencia existe entre `TRUNCATE` y `DROP`?

3. ¿Por qué es importante elegir correctamente el tipo de dato de una columna?

4. ¿Qué ocurre cuando una columna tiene definido un valor mediante `SET DEFAULT`?

5. Si una tabla ya existe y necesitas añadir una nueva columna, ¿qué comando utilizarías?
