# Consultas de Referencias Cruzadas: PIVOT, TRANSFORM y GROUP BY

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es una consulta de referencias cruzadas.
- Entender para qué sirven los operadores `PIVOT` y `TRANSFORM`.
- Recordar la importancia de `GROUP BY` en este tipo de consultas.
- Interpretar resultados resumidos organizados en filas y columnas.
- Crear consultas de referencias cruzadas utilizando una o varias tablas.
- Identificar cuándo una consulta de referencias cruzadas resulta más útil que una consulta tradicional.

---

## Introducción

Cuando una base de datos contiene mucha información, puede resultar difícil obtener una visión general de los datos.

Por ejemplo, imagina una tienda que realiza cientos de ventas al mes. Ver cada venta individual puede ser útil en algunas ocasiones, pero si queremos responder preguntas como:

- ¿Cuánto se vendió de cada producto en cada mes?
- ¿Cuántos pedidos realizó cada cliente por año?
- ¿Cuántos libros prestó una biblioteca por categoría y por trimestre?

necesitamos una forma de resumir la información.

Las consultas de referencias cruzadas permiten organizar los datos como si fueran una tabla resumen, colocando una categoría en las filas y otra categoría en las columnas.

El resultado se parece mucho a una hoja de cálculo o a una tabla dinámica de Excel.

---

# Conceptos teóricos

## ¿Qué es una consulta de referencias cruzadas?

Una consulta de referencias cruzadas es una consulta que resume información agrupando datos y mostrando los resultados en una matriz de filas y columnas.

Permite analizar grandes cantidades de información de forma rápida y visual.

### ¿Para qué sirve?

Sirve para:

- Resumir datos.
- Comparar categorías.
- Obtener estadísticas.
- Analizar tendencias.
- Crear informes más fáciles de leer.

### ¿Cuándo se utiliza?

Se utiliza cuando queremos ver un resumen organizado por dos dimensiones diferentes.

Por ejemplo:

| Cliente | Enero | Febrero | Marzo |
|----------|----------|----------|----------|
| Ana | 200 | 150 | 180 |
| Luis | 100 | 250 | 300 |
| Marta | 180 | 220 | 140 |

Aquí:

- Las filas representan clientes.
- Las columnas representan meses.
- Los valores representan ventas.

---

## GROUP BY

### ¿Qué es?

`GROUP BY` es una cláusula que agrupa registros que tienen el mismo valor.

Antes de crear una referencia cruzada es necesario agrupar la información.

### ¿Para qué sirve?

Sirve para:

- Sumar datos.
- Contar registros.
- Calcular medias.
- Obtener máximos y mínimos.

### Ejemplo conceptual

Supongamos la tabla:

| Cliente | Importe |
|----------|----------|
| Ana | 100 |
| Ana | 50 |
| Luis | 200 |

Queremos conocer cuánto ha gastado cada cliente.

Utilizamos una agrupación.

---

### Ejemplo SQL

```sql
SELECT Cliente,
       SUM(Importe) AS TotalGastado
FROM Pedidos
GROUP BY Cliente;
```

Explicación:

- `SELECT Cliente` muestra el nombre del cliente.
- `SUM(Importe)` suma todos los importes.
- `AS TotalGastado` asigna un nombre al resultado.
- `FROM Pedidos` indica la tabla utilizada.
- `GROUP BY Cliente` agrupa todos los pedidos del mismo cliente.

Resultado:

| Cliente | TotalGastado |
|----------|----------|
| Ana | 150 |
| Luis | 200 |

---

## PIVOT

### ¿Qué es?

`PIVOT` es una operación que transforma valores de una columna en columnas nuevas.

Permite girar o reorganizar los datos.

Por eso se llama "pivotar".

### ¿Para qué sirve?

Sirve para:

- Crear tablas resumen.
- Comparar categorías.
- Generar informes fáciles de interpretar.

### ¿Cuándo se utiliza?

Cuando queremos convertir filas en columnas.

---

### Tabla original

| Mes | Ventas |
|------|------|
| Enero | 100 |
| Febrero | 200 |
| Marzo | 150 |

---

### Resultado pivotado

| Enero | Febrero | Marzo |
|---------|---------|---------|
| 100 | 200 | 150 |

---

### Ejemplo SQL

```sql
SELECT *
FROM Ventas
PIVOT (
    SUM(Importe)
    FOR Mes IN (Enero, Febrero, Marzo)
);
```

Explicación:

- `SUM(Importe)` suma las ventas.
- `FOR Mes` indica la columna cuyos valores se convertirán en columnas.
- `IN (...)` especifica qué columnas se crearán.

El resultado mostrará una columna para cada mes.

---

## TRANSFORM

### ¿Qué es?

`TRANSFORM` es el comando utilizado en Microsoft Access para crear consultas de referencias cruzadas.

Mientras que otros sistemas utilizan `PIVOT`, Access utiliza `TRANSFORM`.

Ambos persiguen el mismo objetivo: convertir datos agrupados en una tabla cruzada.

### ¿Para qué sirve?

Sirve para:

- Crear tablas resumen.
- Organizar información por filas y columnas.
- Obtener informes estadísticos.

---

### Ejemplo SQL en Access

```sql
TRANSFORM SUM(Importe)
SELECT Cliente
FROM Pedidos
GROUP BY Cliente
PIVOT Mes;
```

Explicación:

- `TRANSFORM SUM(Importe)` calcula la suma de importes.
- `SELECT Cliente` genera las filas.
- `FROM Pedidos` indica la tabla origen.
- `GROUP BY Cliente` agrupa por cliente.
- `PIVOT Mes` crea una columna por cada mes.

Resultado:

| Cliente | Enero | Febrero | Marzo |
|----------|----------|----------|----------|
| Ana | 100 | 50 | 75 |
| Luis | 80 | 120 | 60 |

---

## Consulta de referencias cruzadas utilizando varias tablas

### ¿Por qué utilizar varias tablas?

En bases de datos reales la información suele estar repartida.

Por ejemplo:

Tabla Clientes:

| IdCliente | Nombre |
|------------|------------|
| 1 | Ana |
| 2 | Luis |

Tabla Pedidos:

| IdPedido | IdCliente | Mes | Importe |
|------------|------------|------------|------------|
| 1 | 1 | Enero | 100 |
| 2 | 1 | Febrero | 50 |
| 3 | 2 | Enero | 80 |

Si queremos mostrar el nombre del cliente y no solamente su identificador, debemos combinar ambas tablas.

---

### Uso de JOIN

Un `JOIN` permite relacionar tablas mediante un campo común.

En este caso:

- Clientes.IdCliente
- Pedidos.IdCliente

---

### Ejemplo SQL en Access

```sql
TRANSFORM SUM(Pedidos.Importe)
SELECT Clientes.Nombre
FROM Clientes
INNER JOIN Pedidos
ON Clientes.IdCliente = Pedidos.IdCliente
GROUP BY Clientes.Nombre
PIVOT Pedidos.Mes;
```

Explicación:

- `TRANSFORM SUM(Pedidos.Importe)` calcula las ventas.
- `SELECT Clientes.Nombre` muestra el nombre del cliente.
- `INNER JOIN` une ambas tablas.
- `ON` indica la relación entre ellas.
- `GROUP BY Clientes.Nombre` agrupa por cliente.
- `PIVOT Pedidos.Mes` crea una columna por mes.

Resultado:

| Nombre | Enero | Febrero |
|----------|----------|----------|
| Ana | 100 | 50 |
| Luis | 80 | 0 |

---

## Analogía del mundo real

Imagina una biblioteca.

Cada vez que un lector toma prestado un libro se registra:

- Nombre del lector.
- Categoría del libro.
- Fecha.

Si observamos todos los préstamos uno por uno, tendremos una lista enorme.

Una consulta de referencias cruzadas sería como pedir al bibliotecario:

"Muéstrame cuántos libros ha tomado prestados cada lector de cada categoría."

Entonces obtendríamos algo parecido a:

| Lector | Novela | Historia | Ciencia |
|----------|----------|----------|----------|
| Ana | 5 | 2 | 1 |
| Luis | 1 | 4 | 3 |

La información es la misma, pero mucho más fácil de analizar.

---

# Ejemplos prácticos

## Ejemplo 1: Ventas por cliente

```sql
SELECT Cliente,
       SUM(Importe) AS TotalVentas
FROM Pedidos
GROUP BY Cliente;
```

Explicación:

- Se selecciona el cliente.
- Se suman todos sus pedidos.
- Los pedidos se agrupan por cliente.
- Se obtiene el total vendido a cada uno.

---

## Ejemplo 2: Referencia cruzada en Access

```sql
TRANSFORM SUM(Importe)
SELECT Cliente
FROM Pedidos
GROUP BY Cliente
PIVOT Mes;
```

Explicación:

- Se suman las ventas.
- Cada cliente aparece una sola vez.
- Cada mes se convierte en una columna.
- Se muestran las ventas por cliente y mes.

---

## Ejemplo 3: Número de pedidos por empleado y año

```sql
TRANSFORM COUNT(IdPedido)
SELECT Empleado
FROM Pedidos
GROUP BY Empleado
PIVOT Año;
```

Explicación:

- `COUNT(IdPedido)` cuenta pedidos.
- Cada empleado aparece en una fila.
- Cada año aparece como una columna.
- El resultado muestra cuántos pedidos gestionó cada empleado por año.

---

## Ejemplo 4: Varias tablas

```sql
TRANSFORM SUM(Pedidos.Importe)
SELECT Clientes.Nombre
FROM Clientes
INNER JOIN Pedidos
ON Clientes.IdCliente = Pedidos.IdCliente
GROUP BY Clientes.Nombre
PIVOT Pedidos.Mes;
```

Explicación:

- Se unen las tablas Clientes y Pedidos.
- Se obtiene el nombre del cliente.
- Se calculan las ventas.
- Los meses se convierten en columnas.
- Se genera un resumen fácil de leer.

---

# Errores frecuentes

## Olvidar GROUP BY

Error:

```sql
SELECT Cliente,
       SUM(Importe)
FROM Pedidos;
```

Problema:

- SQL no sabe cómo agrupar los datos.

Solución:

```sql
GROUP BY Cliente
```

---

## Utilizar campos incorrectos para agrupar

Agrupar por un campo equivocado puede producir resultados confusos o demasiado detallados.

Siempre debemos preguntarnos:

"¿Qué quiero que aparezca una sola vez en el resultado?"

---

## Intentar pivotar datos sin resumirlos

Las consultas de referencias cruzadas normalmente utilizan:

- SUM
- COUNT
- AVG
- MAX
- MIN

Sin una función de agregado, la información suele ser ambigua.

---

## No relacionar correctamente las tablas

Si el `JOIN` es incorrecto:

- Aparecerán resultados duplicados.
- Faltarán datos.
- Los totales serán erróneos.

---

# Resumen

- Una consulta de referencias cruzadas resume información.
- Permite mostrar datos organizados por filas y columnas.
- `GROUP BY` agrupa registros similares.
- `PIVOT` transforma valores de filas en columnas.
- `TRANSFORM` es la sintaxis utilizada por Microsoft Access para crear referencias cruzadas.
- Las consultas de referencias cruzadas facilitan el análisis de datos.
- Es posible crear referencias cruzadas utilizando varias tablas mediante `JOIN`.
- Estas consultas son muy útiles para informes y estadísticas.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Consulta de referencias cruzadas | Consulta que organiza datos en filas y columnas para facilitar su análisis. |
| GROUP BY | Agrupa registros que tienen el mismo valor. |
| SUM | Suma valores numéricos. |
| COUNT | Cuenta registros. |
| Función de agregado | Función que resume un conjunto de datos. |
| PIVOT | Convierte valores de una columna en nuevas columnas. |
| TRANSFORM | Sintaxis de Access para crear consultas de referencias cruzadas. |
| JOIN | Relaciona datos procedentes de varias tablas. |
| INNER JOIN | Une registros coincidentes entre dos tablas. |
| Tabla resumen | Resultado compacto que muestra información agregada. |

---

# Ejercicios de reflexión

1. ¿Qué problema intentan resolver las consultas de referencias cruzadas?

2. ¿Por qué suele utilizarse `GROUP BY` antes de generar una referencia cruzada?

3. ¿Cuál es la diferencia principal entre una consulta tradicional y una consulta de referencias cruzadas?

4. ¿Para qué sirve `PIVOT` y qué transformación realiza sobre los datos?

5. Si la información está repartida entre las tablas Clientes y Pedidos, ¿por qué necesitamos utilizar un `JOIN` antes de crear la referencia cruzada?
