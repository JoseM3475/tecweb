# Ordenación, Agrupación y Cálculos de Datos en SQL

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Ordenar resultados utilizando diferentes criterios.
- Comprender la diferencia entre orden ascendente y descendente.
- Ordenar datos utilizando varios campos simultáneamente.
- Entender qué son las consultas de agrupación o totales.
- Utilizar funciones de agregado para obtener información resumida.
- Asignar nombres más descriptivos a las columnas mediante alias.
- Filtrar grupos de datos utilizando la cláusula `HAVING`.
- Interpretar consultas SQL orientadas al análisis de información.

---

## Introducción

Cuando trabajamos con una base de datos solemos almacenar una gran cantidad de información. Sin embargo, disponer de los datos no siempre es suficiente. También necesitamos organizarlos y resumirlos para responder preguntas de negocio.

Por ejemplo:

- ¿Cuál es el producto más caro?
- ¿Cuántos pedidos ha realizado cada cliente?
- ¿Cuál es el importe total vendido?
- ¿Qué categorías de productos tienen más artículos?

SQL nos proporciona varias herramientas para responder estas preguntas. En esta sesión aprenderemos a ordenar datos, agrupar información similar y realizar cálculos sobre conjuntos de registros.

Antes de aprender la sintaxis, es importante entender el objetivo:

- **ORDER BY** sirve para organizar la información.
- **GROUP BY** sirve para agrupar información similar.
- Las **funciones de agregado** sirven para realizar cálculos sobre grupos de datos.
- **HAVING** sirve para filtrar los grupos obtenidos.

---

## Conceptos teóricos

### ¿Qué es ORDER BY?

`ORDER BY` es una cláusula de SQL que permite ordenar los resultados obtenidos en una consulta.

### ¿Para qué sirve?

Sirve para presentar la información de una forma más clara y fácil de analizar.

Por ejemplo:

- Mostrar clientes ordenados por nombre.
- Mostrar productos ordenados por precio.
- Mostrar empleados ordenados por fecha de contratación.

### ¿Cuándo se utiliza?

Cuando el orden en que aparecen los datos es importante para la interpretación de los resultados.

---

### Orden ascendente (ASC)

La palabra `ASC` significa **Ascending** (ascendente).

Ordena los datos:

- De menor a mayor para números.
- De la A a la Z para textos.
- De la fecha más antigua a la más reciente.

Es el orden predeterminado en SQL.

#### Ejemplo

```sql
SELECT Nombre
FROM Clientes
ORDER BY Nombre ASC;
```

Explicación:

- `SELECT Nombre` indica que queremos mostrar la columna Nombre.
- `FROM Clientes` indica la tabla de la que se obtienen los datos.
- `ORDER BY Nombre ASC` ordena los nombres alfabéticamente de la A a la Z.

---

### Orden descendente (DESC)

La palabra `DESC` significa **Descending** (descendente).

Ordena los datos:

- De mayor a menor para números.
- De la Z a la A para textos.
- De la fecha más reciente a la más antigua.

#### Ejemplo

```sql
SELECT Nombre, Precio
FROM Productos
ORDER BY Precio DESC;
```

Explicación:

- `SELECT Nombre, Precio` muestra el nombre y el precio de cada producto.
- `FROM Productos` obtiene los datos de la tabla Productos.
- `ORDER BY Precio DESC` muestra primero los productos más caros.

---

### Ordenación por varios campos

En muchas ocasiones un único campo no es suficiente para ordenar los resultados.

SQL permite indicar varios criterios de ordenación.

### ¿Para qué sirve?

Permite organizar los datos de una forma más precisa.

### ¿Cómo funciona?

SQL aplica la ordenación siguiendo el orden de los campos especificados:

1. Ordena por el primer campo.
2. Si existen valores iguales, utiliza el segundo campo.
3. Si continúan existiendo empates, utiliza el tercero, y así sucesivamente.

#### Ejemplo

```sql
SELECT Nombre, Apellido
FROM Empleados
ORDER BY Apellido ASC, Nombre ASC;
```

Explicación:

- Primero se ordenan los empleados por apellido.
- Cuando dos empleados tienen el mismo apellido, se ordenan por nombre.

---

## Consultas de agrupación o totales

Hasta ahora cada fila de una tabla aparecía de forma individual.

Las consultas de agrupación permiten resumir información agrupando registros que tienen algo en común.

### ¿Para qué sirven?

Sirven para responder preguntas como:

- ¿Cuántos clientes hay en cada ciudad?
- ¿Cuántos pedidos ha realizado cada cliente?
- ¿Cuánto dinero ha gastado cada cliente?
- ¿Cuál es el precio medio de cada categoría?

---

### Campo de agrupación

El campo de agrupación es la columna que se utiliza para formar grupos.

#### Ejemplo

Supongamos la siguiente información:

| Cliente | Ciudad |
|----------|----------|
| Ana | Madrid |
| Luis | Madrid |
| Marta | Sevilla |
| Pedro | Sevilla |
| Elena | Valencia |

Si agrupamos por ciudad, obtendremos tres grupos:

- Madrid
- Sevilla
- Valencia

En este caso, **Ciudad** es el campo de agrupación.

---

### Campo de cálculo

Es la columna sobre la que realizamos alguna operación matemática.

Por ejemplo:

- Sumar importes.
- Calcular precios medios.
- Buscar valores máximos.
- Buscar valores mínimos.

---

### GROUP BY

La cláusula `GROUP BY` permite crear grupos de registros que tienen el mismo valor en una determinada columna.

#### Ejemplo

```sql
SELECT Ciudad
FROM Clientes
GROUP BY Ciudad;
```

Explicación:

- La tabla Clientes puede contener muchos registros.
- `GROUP BY Ciudad` agrupa todos los clientes de la misma ciudad.
- Cada ciudad aparece una única vez en el resultado.

---

## Funciones de agregado

Las funciones de agregado permiten realizar cálculos sobre varios registros al mismo tiempo.

Son especialmente útiles cuando se utilizan junto con `GROUP BY`.

---

### COUNT

#### ¿Qué hace?

Cuenta registros.

#### ¿Cuándo se utiliza?

Cuando queremos saber cuántos elementos existen.

#### Ejemplo

```sql
SELECT COUNT(*) AS TotalClientes
FROM Clientes;
*``

Explicación:

- `*OUNT(*)` cuenta todas las filas de*la tabla.
- `AS TotalClientes`*asigna un nombre más descript*vo al resultado.

---

### SUM

##*# ¿Qué hace?

Suma*valores numéricos.

#### ¿*uándo se utiliza?

Cuando necesita*os obtener un total.

#### Ej*mplo

```sql*SELECT SUM(Importe) AS TotalVentas*FROM Pedidos;
```

Explicación:

-*`*UM(Import*)` suma todos los importes de los *edidos.
- `AS TotalVentas` muestra*un nombre más claro para*el resultado.

---

### AVG

#### *Qué hace?

Calcula la media o prom*dio.

#### ¿Cuándo se utiliza?

Cu*ndo queremos conocer el*valor medio de un conjunto de dato*.

#### Ejemplo

```sql*SELECT AVG(Precio) AS PrecioMedio
*ROM Productos;
```

*xplicación:

- `*VG(Precio)` calcula el precio medi* de los productos.
- `AS*PrecioMedio` muestra un nombre com*r*nsible en el resultado.

---

### *AX

#### ¿Qué hace?

Obtiene*el valor más alto.

#### ¿Cuándo s* utiliza?

Cuando queremos conocer*el máximo valor almacen*do.

#### Ejemplo

```sql*SELECT*MAX(Precio) AS ProductoMasCaro
FRO* Productos;
```

Explicación:

- `*AX(Precio)` busca el precio más el*vado*de la tabla.

---

### MIN

#### ¿*ué hace?

Obtiene el valor más baj*.

#### ¿Cuándo se utiliza?

Cuand* queremos localizar el mínimo valo* existente.

#### Ej*mplo

```sql*SELECT MIN(Precio) AS ProductoMasB*rato
FROM Productos;
```

Explicac*ón:

- `MIN(Precio*` busca el precio más bajo de la t*bla.

---

## Alias (AS)

### ¿*ué es un alias?

*n alias*es un nombre alternativo que asign*mos a una columna o al resultado d* un cálculo.

### ¿*ara qué sirve?

Permite*que los resultados sean más fácile* de entender.

### Ejemplo

```sql*SELECT AVG(Precio) AS PrecioMedio
*ROM Productos;
```

Explicación:

* SQL calcula la media del precio.
* Gracias a `AS Precio*edio`, el resultado tendrá*una cabecera clara y descriptiva.
*---

## Combinando GROUP BY y func*ones de agregado

Lo más habitual *s utilizar ambas herramientas conj*ntamente.

#### Ejemplo

```sql
SE*ECT ClienteID, COUNT(*) AS TotalPe*idos
FROM Pedidos
GROUP BY Cliente*D;
```

Explicación:

- `GROUP BY*ClienteID` crea un grupo para cada*cliente.
- `COUNT(*)` cuenta cuánt*s pedidos tiene cada grupo.
- El r*sultado muestra un*resumen de pedidos por cliente.

-*-

## HAVING

### ¿Qué es HAVING?
*`HAVING` es una cláusula que permi*e filtrar grupos una vez que ya ha* sido creados.

### ¿Para qué sirv*?

Permite quedarnos únicamente co* aquellos grupos que cumplen una d*terminada condición.

### ¿Cuándo *e utiliza?

Después de utilizar `G*OUP BY`.

---

### Diferencia entr* WHERE y HAVING

#### WHERE

Filtr* registros individuales antes de c*ear los grupos.

#### HAVING

Filt*a grupos completos después de crea* los grupos.

---

#### Ejemplo

`*`sql
SELECT ClienteID, COUNT(*) AS*TotalPedidos
FROM Pedidos
GROUP BY*ClienteID
HAVING COUNT(*) > 2;
```*
Explicación:

- Se agrupan los pe*idos por cliente.
- Se cuentan los*pedidos de cada cliente.
- Solo se*muestran los clientes que tienen m*s de dos pedidos.

---

## Analogí* del mundo real

Imagina una bibli*teca.

Cada libro contiene informa*ión como:

- Título.
- Autor.
- Ca*egoría.
- Número de páginas.

### *RDER BY

Es como ordenar los libro* en una estantería:

- Por título.*- Por autor.
- Por número de págin*s.

---

### GROUP BY

Es como col*car los libros en distintas estant*rías según su categoría:

- Novela*
- Historia.
- Ciencia.
- Informát*ca.

---

### Funciones de agregad*

Una vez agrupados los libros, po*emos responder preguntas como:

- *Cuántos libros hay en cada categor*a? (`COUNT`)
- ¿Cuántas páginas su*an todos los libros de una categor*a? (`SUM`)
- ¿Cuál es el libro con*más páginas? (`MAX`)
- ¿Cuál es el*libro con menos páginas? (`MIN`)
-*¿Cuál es el promedio de páginas po* categoría? (`AVG`)

---

### HAVI*G

Sería equivalente a decir:

> M*éstr*me únicamente las categorías que t*enen más de 10 libros.

---

## Ej*mplos prácticos

### Ejemplo *: Listar productos del más caro al*más barato

```sql
SELECT Nombre, *recio
FROM Productos
ORDER BY Prec*o DESC;
```

Explicación:

- Se*muestran los nombres y precios de *os productos.
- Los*resultados se ordenan desde el pre*io más alto hasta el más bajo.

--*

### Ejemplo 2: Ordenar clientes *or ciudad y nombre

```sql
SELECT *ombre, Ciudad
FROM Clientes
ORDER *Y Ciudad ASC, Nombre ASC;
```

Exp*icación:

- Primero se ordena por *iudad.
- Dentro de cada ciudad se *rdena por nombre.

---

*## Ejemplo 3: Contar pedidos por c*iente

```sql
SELECT ClienteID, CO*NT(*) AS TotalPedidos
FROM Pedidos*GROUP BY ClienteID;
```

Explicaci*n:

- Se crea un grupo para cada c*iente.
- Se cuentan los pedidos de*cada grupo.
- Se obtiene un resume* por cliente.

---

*## Ejemplo 4: Calcular el importe *otal gastado por cliente

```sql
*ELECT ClienteID, SUM(Importe) AS T*talGastado
FROM Pedidos
GROUP BY C*ienteID;
```

Explicación:

-*Los pedidos se agrupan por cliente*
- Se suman los importes de*cada grupo.
- Se*obtiene el gasto total de cada cli*nte.

---

### Ejemplo 5: Mostrar *lientes con más de tres pedidos

`*`sql
SELECT ClienteID, COUNT(*) AS TotalPedidos
FROM Pedidos
GROUP BY ClienteID
HAVING COUNT(*) > 3;
```

Explicación:

- Se cre*n grupos por cliente.
-*Se cuentan*los pedidos de cada grupo.
- Solo *parecen los clientes con más de tr*s pedidos.

---

### Ejemplo 6: Pr*cio medio de los productos por cat*goría

```sql
SELECT Categoria, AV*(Precio) AS PrecioMedio
FROM Produ*tos
GROUP BY Categoria;
```

Expli*ación:

- Los productos se agrupan*por categoría.
- Se calcula el pre*io medio de cada grupo.
- Se muest*a un resumen por categoría.

---

*## Ejemplo 7:*Categorías con más de cinco produc*os

```sql
SELECT Categoria, COUNT**) AS TotalProductos
FROM Producto*
GROUP BY Categoria
HAVING COUNT(** > 5;
```

Explicación:

- Se agru*an los productos por categoría.
- *e cuentan los productos de cada gr*po.
- Solo aparecen las categorías*que tienen más de cinco productos.*
---

## Errores frecuentes

### O*vidar que ASC*es el valor predeterminado

Estas *os consultas producen el mismo res*ltado:

```sql
SELECT Nombre
FROM *lientes
ORDER BY Nombre;
```

*``sql
SELECT Nombre
*ROM Clientes
ORDER BY Nombre ASC;
*``

Aunque*ambas son correctas, indicar*`ASC` mejora la claridad.

---

*## Confundir WHERE con HAVING

Inc*rrecto:

```sql
SELECT ClienteID, *OUNT(*)
FROM Pedidos
WHERE COUNT(** > 2
GROUP BY ClienteID;
```

Prob*ema:

- `*HERE` no puede utilizar directamen*e funciones de agregado porque los*grupos todavía no existen.

---

*orrecto:

```sql
SELECT ClienteID,*COUNT(*)
FROM Pedidos
GROUP BY Cli*nteID
HAVING COUNT(*) > 2;
```

*--

### Olvidar GROUP BY al*utilizar columnas*y agreg*dos

Incorrecto:

```sql*SELECT ClienteID, COUNT(*)
FROM Pe*idos;
```

Problema:

- SQL*no sabe cómo relacionar el resulta*o del conteo con cada cliente.

--*

Correcto:

```sql
SELECT ClienteID, COUNT(*)
FROM Pedidos
GROUP BY ClienteID;
```

---

### Utilizar HAVING cuando debería utilizarse WHERE*
Si queremos filtrar registros antes de agrupar, debemos utilizar `WHERE`.

```sql
SELECT ClienteID, COUNT(*)
FROM Pedidos
WHERE Importe > 100
GROUP BY ClienteID;
```

Explicación:

- Primero se seleccionan únicamente los pedidos superiores a 100.
- Después se crean los grupos.

---

## Resumen

- `ORDER BY` organiza los resultados de una consulta.
- `ASC` ordena de menor a mayor o de la A a la Z.
- `DESC` ordena de mayor a menor o de la Z a la A.
- Es posible ordenar por varias columnas simultáneamente.
- `GROUP BY` agrupa registros con valores iguales.
- Un campo de agrupación define cómo se crean los grupos.
- Un campo de cálculo es el utilizado para realizar operaciones matemáticas.
- `COUNT` cuenta registros.
- `SUM` suma valores numéricos.
- `AVG` calcula promedios.
- `MAX` obtiene el valor más alto.
- `MIN` obtiene el valor más bajo.
- `AS` permite asignar nombres alternativos más descriptivos.
- `HAVING` filtra grupos después de realizar la agrupación.
- Las funciones de agregado suelen utilizarse junto a `GROUP BY`.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| ORDER BY | Permite ordenar los resultados de una consulta. |
| ASC | Orden ascendente. |
| DESC | Orden descendente. |
| Ordenación múltiple | Ordenación utilizando varias columnas. |
| GROUP BY | Agrupa registros con valores iguales. |
| Campo de agrupación | Columna utilizada para crear grupos. |
| Campo de cálculo | Columna sobre la que se realiza una operación matemática. |
| COUNT | Cuenta registros. |
| SUM | Suma valores numéricos. |
| AVG | Calcula el promedio de valores. |
| MAX | Devuelve el valor máximo. |
| MIN | Devuelve el valor mínimo. |
| AS | Alias o nombre alternativo para una columna o cálculo. |
| HAVING | Filtra grupos después de aplicar GROUP BY. |

---

## Ejercicios de reflexión

1. ¿Qué diferencia existe entre ordenar una lista con `ASC` y ordenarla con `DESC`?

2. Si dos clientes tienen la misma ciudad y utilizamos una ordenación por ciudad y nombre, ¿qué campo se utilizará para desempatar?

3. ¿Qué función de agregado utilizarías para conocer el importe total vendido por una tienda?

4. ¿Cuál es la diferencia principal entre `WHERE` y `HAVING`?

5. Si quieres mostrar únicamente las categorías que tienen más de cinco productos, ¿por qué necesitas utilizar `HAVING`?

6. ¿Qué ventaja aporta utilizar alias mediante la cláusula `AS`?

7. ¿Qué resultado esperarías obtener de una consulta que utilice `GROUP BY Ciudad` y `COUNT(*)`?