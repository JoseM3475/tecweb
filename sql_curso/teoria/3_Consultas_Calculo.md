# Consultas de Campo Calculado y Funciones SQL

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es un campo calculado.
- Entender para qué sirven las funciones SQL.
- Utilizar funciones para trabajar con fechas y horas.
- Utilizar funciones para trabajar con textos.
- Utilizar funciones para realizar cálculos numéricos.
- Crear consultas que generen información nueva a partir de datos existentes.
- Interpretar correctamente los resultados obtenidos mediante funciones SQL.

---

## Introducción

Cuando almacenamos información en una base de datos, guardamos datos básicos como nombres, fechas, precios o cantidades.

Sin embargo, en muchas ocasiones necesitamos obtener información adicional que no está almacenada directamente.

Por ejemplo:

- Saber cuántos días han pasado desde que un cliente realizó un pedido.
- Mostrar la fecha actual.
- Unir el nombre y los apellidos de una persona en una sola columna.
- Mostrar un precio con un número determinado de decimales.

Para realizar estas tareas utilizamos dos herramientas muy importantes de SQL:

- Los campos calculados.
- Las funciones SQL.

Estas herramientas permiten crear nueva información durante la ejecución de una consulta sin modificar los datos originales almacenados en las tablas.

---

# Conceptos teóricos

## ¿Qué es un campo calculado?

Un campo calculado es una columna que se genera temporalmente mientras se ejecuta una consulta.

No existe físicamente dentro de la tabla.

Su valor se calcula utilizando otros campos o valores.

### ¿Para qué sirve?

Los campos calculados permiten:

- Realizar operaciones matemáticas.
- Crear información adicional.
- Mostrar resultados más útiles para el usuario.
- Evitar almacenar información que puede calcularse automáticamente.

### ¿Cuándo se utiliza?

Se utiliza cuando necesitamos mostrar información derivada de otros datos.

### Ejemplo sencillo

Supongamos una tabla llamada `Productos`.

| Producto | Precio |
|-----------|---------|
| Portátil | 850 |
| Ratón | 25 |

Queremos calcular el IVA del 21%.

```sql
SELECT
    Producto,
    Precio,
    Precio * 0.21 AS IVA
FROM Productos;
```

Explicación:

- `SELECT` indica qué información queremos mostrar.
- `Producto` muestra el nombre del producto.
- `Precio` muestra el precio original.
- `Precio * 0.21` calcula el IVA.
- `AS IVA` asigna un nombre al resultado calculado.
- `FROM Productos` indica la tabla de donde se obtienen los datos.

---

## ¿Qué es una función SQL?

Una función SQL es una operación ya preparada que realiza una tarea específica.

Podemos pensar en una función como una pequeña calculadora especializada.

Recibe uno o varios valores, realiza una operación y devuelve un resultado.

### ¿Para qué sirven?

Las funciones permiten:

- Realizar cálculos.
- Trabajar con fechas.
- Trabajar con textos.
- Formatear datos.
- Transformar información.

### ¿Cuándo se utilizan?

Siempre que necesitemos obtener información nueva a partir de datos existentes.

---

## Funciones de fecha y hora

Las funciones de fecha y hora permiten trabajar con fechas almacenadas en la base de datos.

---

### Función NOW()

#### ¿Qué es?

La función `NOW()` devuelve la fecha y la hora actual del sistema.

#### ¿Para qué sirve?

Permite conocer el momento exacto en el que se ejecuta la consulta.

#### ¿Cuándo se utiliza?

- Para registrar operaciones.
- Para calcular antigüedades.
- Para comparar fechas.

### Ejemplo

```sql
SELECT NOW() AS FechaHoraActual;
```

Explicación:

- `NOW()` obtiene la fecha y hora actuales.
- `AS FechaHoraActual` asigna un nombre al resultado.

Posible resultado:

```text
2026-09-29 10:30:15
```

---

### Función DateDiff()

#### ¿Qué es?

La función `DateDiff()` calcula la diferencia entre dos fechas.

#### ¿Para qué sirve?

Permite saber cuántos días existen entre dos fechas.

#### ¿Cuándo se utiliza?

- Para calcular retrasos.
- Para calcular antigüedades.
- Para calcular el tiempo transcurrido desde una compra o préstamo.

### Ejemplo

Supongamos una tabla llamada `Prestamos`.

| Libro | FechaPrestamo |
|--------|---------------|
| SQL Fácil | 2026-09-10 |

```sql
SELECT
    Libro,
    DateDiff(NOW(), FechaPrestamo) AS DiasTranscurridos
FROM Prestamos;
```

Explicación:

- `Libro` muestra el título del libro.
- `NOW()` obtiene la fecha actual.
- `FechaPrestamo` contiene la fecha de préstamo.
- `DateDiff()` calcula los días transcurridos.
- `AS DiasTranscurridos` asigna un nombre al resultado.

Resultado aproximado:

| Libro | DiasTranscurridos |
|---------|-----------------|
| SQL Fácil | 19 |

---

### Función Date_Format()

#### ¿Qué es?

La función `Date_Format()` permite mostrar una fecha con el formato que deseemos.

#### ¿Para qué sirve?

Las bases de datos suelen almacenar las fechas en formatos técnicos. Esta función permite mostrarlas de forma más amigable.

#### ¿Cuándo se utiliza?

Siempre que queramos presentar fechas de forma más clara para el usuario.

### Ejemplo

```sql
SELECT
    Date_Format(NOW(), '%d/%m/%Y') AS FechaActual;
```

Explicación:

- `NOW()` obtiene la fecha actual.
- `%d` representa el día.
- `%m` representa el mes.
- `%Y` representa el año con cuatro cifras.
- `AS FechaActual` asigna un nombre al resultado.

Resultado:

```text
29/09/2026
```

---

## Funciones de texto

Las funciones de texto permiten trabajar con palabras, nombres y cadenas de caracteres.

---

### Función CONCAT()

#### ¿Qué es?

La función `CONCAT()` une varios textos en uno solo.

#### ¿Para qué sirve?

Permite presentar información de forma más legible.

#### ¿Cuándo se utiliza?

- Para crear nombres completos.
- Para generar direcciones.
- Para construir mensajes informativos.

### Ejemplo

Supongamos una tabla llamada `Empleados`.

| Nombre | Apellidos |
|---------|------------|
| Ana | García |
| Luis | Pérez |

```sql
SELECT
    CONCAT(Nombre, ' ', Apellidos) AS NombreCompleto
FROM Empleados;
```

Explicación:

- `CONCAT()` une textos.
- `Nombre` aporta el nombre.
- `' '` añade un espacio.
- `Apellidos` aporta los apellidos.
- `AS NombreCompleto` asigna un nombre al resultado.

Resultado:

| NombreCompleto |
|----------------|
| Ana García |
| Luis Pérez |

---

## Funciones numéricas

Las funciones numéricas permiten modificar y calcular valores numéricos.

---

### Función ROUND()

#### ¿Qué es?

La función `ROUND()` redondea números.

#### ¿Para qué sirve?

Permite mostrar cantidades con un número determinado de decimales.

#### ¿Cuándo se utiliza?

- En precios.
- En cálculos financieros.
- En informes.

### Ejemplo

```sql
SELECT
    ROUND(12.5678, 2) AS Resultado;
```

Explicación:

- `12.5678` es el número original.
- `2` indica que queremos dos decimales.
- SQL realiza el redondeo automáticamente.

Resultado:

```text
12.57
```

---

### Función TRUNCATE()

#### ¿Qué es?

La función `TRUNCATE()` elimina decimales sin redondear.

#### ¿Para qué sirve?

Permite conservar una cantidad determinada de decimales ignorando los restantes.

#### ¿Cuándo se utiliza?

Cuando no queremos que SQL modifique el valor mediante redondeo.

### Ejemplo

```sql
SELECT
    TRUNCATE(12.5678, 2) AS Resultado;
```

Explicación:

- `12.5678` es el número original.
- `2` indica el número de decimales que se conservarán.
- Los demás decimales se eliminan.

Resultado:

```text
12.56
```

---

## Analogía del mundo real

Imagina una biblioteca.

La biblioteca almacena información básica sobre cada préstamo:

- Título del libro.
- Fecha de préstamo.
- Nombre del lector.

Sin embargo, el bibliotecario necesita conocer información adicional que no está guardada directamente.

Por ejemplo:

- Cuántos días lleva prestado un libro.
- Qué fecha es hoy.
- Mostrar el nombre completo de un lector.
- Mostrar importes con dos decimales.

Los campos calculados y las funciones SQL son como una calculadora inteligente del bibliotecario. Utilizan la información existente para generar nuevos datos cuando son necesarios, sin modificar los registros originales.

---

## Ejemplos prácticos

### Ejemplo 1. Mostrar la fecha y hora actuales

```sql
SELECT NOW() AS FechaHoraActual;
```

Explicación:

- `NOW()` obtiene la fecha y hora actuales.
- `AS FechaHoraActual` asigna un nombre descriptivo.

---

### Ejemplo 2. Calcular días transcurridos desde un pedido

```sql
SELECT
    NumeroPedido,
    DateDiff(NOW(), FechaPedido) AS DiasTranscurridos
FROM Pedidos;
```

Explicación:

- `NumeroPedido` identifica el pedido.
- `NOW()` obtiene la fecha actual.
- `FechaPedido` contiene la fecha original del pedido.
- `DateDiff()` calcula los días transcurridos.
- `AS DiasTranscurridos` asigna nombre al campo calculado.

---

### Ejemplo 3. Mostrar la fecha con formato español

```sql
SELECT
    Date_Format(NOW(), '%d/%m/%Y') AS FechaFormateada;
```

Explicación:

- `NOW()` obtiene la fecha actual.
- `Date_Format()` cambia la forma de mostrarla.
- `%d/%m/%Y` genera el formato día/mes/año.

---

### Ejemplo 4. Mostrar el nombre completo de un cliente

```sql
SELECT
    CONCAT(Nombre, ' ', Apellidos) AS Cliente
FROM Clientes;
```

Explicación:

- `CONCAT()` une varios textos.
- `' '` añade un espacio entre ellos.
- Se crea la columna calculada `Cliente`.

---

### Ejemplo 5. Mostrar precios redondeados

```sql
SELECT
    Producto,
    ROUND(Precio, 2) AS PrecioRedondeado
FROM Productos;
```

Explicación:

- `Producto` muestra el nombre.
- `Precio` contiene el valor original.
- `ROUND()` redondea a dos decimales.
- Se crea una nueva columna llamada `PrecioRedondeado`.

---

### Ejemplo 6. Mostrar precios truncados

```sql
SELECT
    Producto,
    TRUNCATE(Precio, 2) AS PrecioTruncado
FROM Productos;
```

Explicación:

- `Producto` muestra el producto.
- `Precio` contiene el valor original.
- `TRUNCATE()` elimina los decimales sobrantes.
- Se crea la columna `PrecioTruncado`.

---

## Errores frecuentes

### Confundir un campo calculado con un dato almacenado

Un campo calculado no se guarda en la tabla.

Solo existe mientras se ejecuta la consulta.

---

### Olvidar utilizar un alias

La consulta puede funcionar, pero el nombre de la columna será poco descriptivo.

Menos recomendable:

```sql
SELECT Precio * 0.21
FROM Productos;
```

Más recomendable:

```sql
SELECT Precio * 0.21 AS IVA
FROM Productos;
```

---

### Confundir ROUND() con TRUNCATE()

Ejemplo:

```text
Número original: 12.567
```

```text
ROUND(12.567, 2) = 12.57
```

```text
TRUNCATE(12.567, 2) = 12.56
```

---

### Escribir incorrectamente los paréntesis

Correcto:

```sql
SELECT NOW();
```

Incorrecto:

```sql
SELECT NOW;
```

---

### Utilizar formatos incorrectos en Date_Format()

Correcto:

```sql
SELECT Date_Format(NOW(), '%d/%m/%Y');
```

Incorrecto:

```sql
SELECT Date_Format(NOW(), 'dd/mm/yyyy');
```

Los símbolos de formato deben utilizar el formato específico definido por SQL.

---

## Resumen

- Un campo calculado genera información nueva durante una consulta.
- Los campos calculados no se almacenan físicamente en las tablas.
- Las funciones SQL permiten realizar operaciones ya preparadas.
- `NOW()` devuelve la fecha y hora actuales.
- `DateDiff()` calcula la diferencia entre dos fechas.
- `Date_Format()` permite mostrar fechas con distintos formatos.
- `CONCAT()` une varios textos.
- `ROUND()` redondea números.
- `TRUNCATE()` elimina decimales sin redondear.
- Las funciones ayudan a presentar información de forma más útil y comprensible.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Campo calculado | Columna temporal cuyo valor se obtiene mediante un cálculo durante una consulta. |
| Función SQL | Herramienta integrada que realiza una operación específica sobre uno o varios datos. |
| NOW() | Devuelve la fecha y hora actuales. |
| DateDiff() | Calcula la diferencia entre dos fechas. |
| Date_Format() | Permite mostrar una fecha utilizando un formato determinado. |
| CONCAT() | Une varios textos en uno solo. |
| ROUND() | Redondea números a un número determinado de decimales. |
| TRUNCATE() | Elimina decimales sin redondear. |
| Alias | Nombre asignado a una columna mediante la palabra clave `AS`. |

---

## Ejercicios de reflexión

1. ¿Qué diferencia existe entre un dato almacenado en una tabla y un campo calculado?

2. ¿Por qué puede ser útil utilizar un campo calculado en lugar de almacenar el resultado directamente en la tabla?

3. ¿Qué información devuelve la función `NOW()`?

4. ¿Qué función utilizarías para conocer cuántos días han pasado desde que se realizó un pedido?

5. ¿Qué diferencia existe entre `ROUND()` y `TRUNCATE()` cuando trabajan con números decimales?
