# Consultas Multitabla, Relaciones entre Tablas e Integridad Referencial en SQL

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Entender por qué una base de datos suele estar dividida en varias tablas.
- Comprender cómo se relacionan las tablas entre sí.
- Identificar los tipos de relaciones más comunes: uno a uno, uno a varios y varios a varios.
- Entender qué es la integridad referencial y por qué es importante.
- Conocer qué ocurre cuando se actualizan o eliminan registros relacionados.
- Comprender qué son las consultas multitabla o consultas de unión.
- Diferenciar los operadores `INNER JOIN`, `LEFT JOIN` y `RIGHT JOIN`.
- Entender el funcionamiento de `UNION` y `UNION ALL`.
- Conocer qué son los índices y cómo ayudan a mejorar las búsquedas.

---

## Introducción

En las bases de datos reales, la información suele estar repartida en varias tablas.

Por ejemplo, en una tienda no sería práctico guardar todos los datos de clientes, productos y pedidos en una misma tabla gigante. Sería mucho más ordenado tener una tabla para los clientes, otra para los productos y otra para los pedidos.

Sin embargo, aunque la información esté separada, muchas veces necesitamos combinarla para responder preguntas como:

- ¿Qué cliente realizó un pedido?
- ¿Qué productos compró cada cliente?
- ¿Cuántos pedidos tiene un cliente?

Para ello utilizamos las relaciones entre tablas y las consultas de unión o consultas multitabla.

---

## Conceptos teóricos

### ¿Qué son las relaciones entre tablas?

Una relación entre tablas es una conexión lógica entre información almacenada en tablas diferentes.

Sirve para evitar duplicar datos y para mantener la información organizada.

Por ejemplo:

#### Tabla Clientes

| IdCliente | Nombre |
| ---------- | -------- |
| 1 | Ana |
| 2 | Luis |

#### Tabla Pedidos

| IdPedido | IdCliente | Fecha |
| ---------- | ---------- | ---------- |
| 101 | 1 | 2025-01-10 |
| 102 | 2 | 2025-01-12 |

La columna `IdCliente` permite saber qué cliente realizó cada pedido.

---

### Relación uno a uno (1:1)

Se produce cuando un registro de una tabla está relacionado con un único registro de otra tabla.

#### Ejemplo

Una empresa tiene:

- Una tabla de empleados.
- Una tabla con los datos de acceso al sistema.

Cada empleado tiene una sola cuenta de acceso.

Y cada cuenta pertenece a un solo empleado.

---

### Relación uno a varios (1:N)

Es la relación más frecuente.

Un registro de una tabla puede estar relacionado con muchos registros de otra tabla.

#### Ejemplo

Un cliente puede realizar muchos pedidos.

Pero cada pedido pertenece a un único cliente.

**Cliente → muchos pedidos**

---

### Relación varios a varios (N:M)

Se produce cuando varios registros de una tabla pueden relacionarse con varios registros de otra.

#### Ejemplo

En una biblioteca:

- Un lector puede tomar prestados muchos libros.
- Un libro puede ser prestado a muchos lectores a lo largo del tiempo.

En estos casos suele existir una tercera tabla intermedia.

---

### ¿Qué es la integridad referencial?

La integridad referencial es un conjunto de reglas que garantiza que las relaciones entre tablas sean válidas.

Su objetivo es evitar datos incoherentes.

#### Ejemplo correcto

Cliente:

| IdCliente | Nombre |
| ---------- | ---------- |
| 1 | Ana |

Pedido:

| IdPedido | IdCliente |
| ---------- | ---------- |
| 101 | 1 |

El pedido apunta a un cliente que existe.

#### Ejemplo incorrecto

Pedido:

| IdPedido | IdCliente |
| ---------- | ---------- |
| 101 | 99 |

El cliente 99 no existe.

Esto genera información inconsistente.

La integridad referencial evita este tipo de problemas.

---

### Borrado en cascada (ON DELETE CASCADE)

A veces, cuando se elimina un registro principal, también queremos eliminar automáticamente los registros relacionados.

#### Ejemplo

Si eliminamos un cliente:

| IdCliente | Nombre |
| ---------- | ---------- |
| 1 | Ana |

También podrían eliminarse automáticamente todos sus pedidos.

Esto se conoce como **borrado en cascada**.

Se utiliza cuando los datos secundarios carecen de sentido sin el dato principal.

---

### Actualización en cascada (ON UPDATE CASCADE)

Permite actualizar automáticamente los registros relacionados cuando cambia un valor clave.

#### Ejemplo

Antes:

Cliente:

| IdCliente |
| ---------- |
| 1 |

Pedido:

| IdCliente |
| ---------- |
| 1 |

Después:

Cliente:

| IdCliente |
| ---------- |
| 10 |

Pedido:

| IdCliente |
| ---------- |
| 10 |

La modificación se propaga automáticamente.

---

### ¿Qué son las consultas multitabla?

Son consultas que combinan información procedente de varias tablas.

Se utilizan cuando los datos que necesitamos están distribuidos en distintas tablas.

Por ejemplo:

- Ver clientes y sus pedidos.
- Ver empleados y departamentos.
- Ver libros y autores.

---

### ¿Qué es un JOIN?

La palabra JOIN significa "unir".

Permite combinar filas de dos o más tablas usando una relación común.

Normalmente esa relación se basa en un identificador compartido.

---

### INNER JOIN

#### ¿Qué es?

Muestra únicamente los registros que tienen coincidencia en ambas tablas.

#### ¿Cuándo se utiliza?

Cuando solo interesa la información relacionada.

#### Ejemplo conceptual

Clientes:

| IdCliente | Nombre |
| ---------- | ---------- |
| 1 | Ana |
| 2 | Luis |

Pedidos:

| IdPedido | IdCliente |
| ---------- | ---------- |
| 101 | 1 |

Resultado:

| Nombre | IdPedido |
| ---------- | ---------- |
| Ana | 101 |

Luis no aparece porque no tiene pedidos.

---

### LEFT JOIN

#### ¿Qué es?

Devuelve todos los registros de la tabla de la izquierda.

Si no existe coincidencia, los datos de la otra tabla aparecen vacíos (`NULL`).

#### ¿Cuándo se utiliza?

Cuando queremos mostrar todos los registros principales aunque no tengan relaciones.

#### Ejemplo

Mostrar todos los clientes y, si existen, sus pedidos.

Resultado:

| Nombre | IdPedido |
| ---------- | ---------- |
| Ana | 101 |
| Luis | NULL |

---

### RIGHT JOIN

#### ¿Qué es?

Funciona de forma similar a `LEFT JOIN`, pero devuelve todos los registros de la tabla situada a la derecha.

#### ¿Cuándo se utiliza?

Cuando se consideran más importantes los registros de la tabla derecha.

---

### ¿Qué son los índices?

Un índice es una estructura especial que ayuda a encontrar información más rápidamente.

#### Analogía

Buscar un nombre en una enciclopedia sin índice obliga a revisar página por página.

Con un índice podemos ir directamente al lugar adecuado.

En las bases de datos ocurre exactamente lo mismo.

Los índices mejoran el rendimiento de las búsquedas.

Son especialmente útiles en tablas con miles o millones de registros.

---

### Operador UNION

#### ¿Qué es?

Combina resultados de dos consultas diferentes.

Además, elimina los registros duplicados.

#### Ejemplo

Consulta 1:

| Nombre |
| ---------- |
| Ana |
| Luis |

Consulta 2:

| Nombre |
| ---------- |
| Luis |
| Marta |

Resultado de `UNION`:

| Nombre |
| ---------- |
| Ana |
| Luis |
| Marta |

Luis aparece solo una vez.

---

### Operador UNION ALL

#### ¿Qué es?

También combina resultados de varias consultas.

La diferencia es que conserva los duplicados.

#### Resultado

| Nombre |
| ---------- |
| Ana |
| Luis |
| Luis |
| Marta |

Aquí Luis aparece dos veces.

---

## Analogía del mundo real

Imagina una biblioteca.

Existen varias carpetas:

- Una carpeta con lectores.
- Una carpeta con libros.
- Una carpeta con préstamos.

Cada carpeta contiene información distinta.

Cuando el bibliotecario necesita saber qué libros tiene prestados cada lector, debe relacionar la información de varias carpetas.

Los JOIN funcionan como el proceso de cruzar esas carpetas para obtener una visión completa de la información.

La integridad referencial actúa como una norma que impide registrar un préstamo a un lector que no existe o a un libro inexistente.

---

## Ejemplos prácticos

### Ejemplo 1: INNER JOIN

```sql
SELECT Clientes.Nombre,
       Pedidos.IdPedido
FROM Clientes
INNER JOIN Pedidos
ON Clientes.IdCliente = Pedidos.IdCliente;
```

#### Explicación paso a paso

`SELECT Clientes.Nombre`

Selecciona el nombre del cliente.

`Pedidos.IdPedido`

Selecciona el identificador del pedido.

`FROM Clientes`

La consulta comienza desde la tabla Clientes.

`INNER JOIN Pedidos`

Une la tabla Pedidos.

`ON Clientes.IdCliente = Pedidos.IdCliente`

Indica cómo se relacionan ambas tablas.

El resultado mostrará únicamente clientes que tengan pedidos.

---

### Ejemplo 2: LEFT JOIN

```sql
SELECT Clientes.Nombre,
       Pedidos.IdPedido
FROM Clientes
LEFT JOIN Pedidos
ON Clientes.IdCliente = Pedidos.IdCliente;
```

#### Explicación paso a paso

`LEFT JOIN`

Indica que deben mostrarse todos los clientes.

Si algún cliente no tiene pedidos, igualmente aparecerá.

Las columnas del pedido mostrarán `NULL`.

---

### Ejemplo 3: RIGHT JOIN

```sql
SELECT Clientes.Nombre,
       Pedidos.IdPedido
FROM Clientes
RIGHT JOIN Pedidos
ON Clientes.IdCliente = Pedidos.IdCliente;
```

#### Explicación paso a paso

`RIGHT JOIN`

Muestra todos los pedidos.

Si existiera algún pedido sin cliente relacionado, el pedido seguiría apareciendo.

---

### Ejemplo 4: UNION

```sql
SELECT Nombre
FROM Clientes

UNION

SELECT Nombre
FROM Empleados;
```

#### Explicación paso a paso

La primera consulta obtiene nombres de clientes.

La segunda consulta obtiene nombres de empleados.

`UNION` combina ambos resultados.

Si un nombre aparece repetido, únicamente se mostrará una vez.

---

### Ejemplo 5: UNION ALL

```sql
SELECT Nombre
FROM Clientes

UNION ALL

SELECT Nombre
FROM Empleados;
```

#### Explicación paso a paso

La estructura es igual que en `UNION`.

La diferencia es que conserva todos los registros, incluidos los repetidos.

---

## Errores frecuentes

### Olvidar la condición de unión

```sql
SELECT *
FROM Clientes
INNER JOIN Pedidos;
```

Sin la condición `ON`, la base de datos no sabe cómo relacionar las tablas.

---

### Unir columnas incorrectas

```sql
ON Clientes.Nombre = Pedidos.IdPedido
```

Las columnas comparadas deben representar la relación real entre tablas.

---

### Confundir INNER JOIN con LEFT JOIN

- `INNER JOIN` solo muestra coincidencias.
- `LEFT JOIN` muestra todos los registros de la tabla izquierda.

---

### Pensar que UNION conserva duplicados

`UNION` elimina duplicados.

Si se desean conservar, debe utilizarse `UNION ALL`.

---

### Eliminar registros sin considerar las relaciones

Eliminar un cliente puede afectar a pedidos relacionados.

Por ello es importante comprender la integridad referencial y las operaciones en cascada.

---

## Resumen

- Las bases de datos suelen dividir la información en varias tablas.
- Las relaciones permiten conectar tablas entre sí.
- Existen relaciones uno a uno, uno a varios y varios a varios.
- La integridad referencial garantiza que las relaciones sean válidas.
- El borrado y la actualización en cascada permiten propagar cambios automáticamente.
- Los JOIN combinan información de varias tablas.
- `INNER JOIN` muestra únicamente coincidencias.
- `LEFT JOIN` muestra todos los registros de la tabla izquierda.
- `RIGHT JOIN` muestra todos los registros de la tabla derecha.
- Los índices aceleran las búsquedas.
- `UNION` combina resultados eliminando duplicados.
- `UNION ALL` combina resultados conservando duplicados.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Tabla | Conjunto organizado de datos relacionados. |
| Relación | Conexión entre registros de distintas tablas. |
| Uno a uno | Un registro se relaciona con un único registro de otra tabla. |
| Uno a varios | Un registro puede relacionarse con muchos registros. |
| Varios a varios | Muchos registros pueden relacionarse con muchos otros registros. |
| Integridad referencial | Regla que mantiene relaciones válidas entre tablas. |
| Borrado en cascada | Eliminación automática de registros relacionados. |
| Actualización en cascada | Actualización automática de registros relacionados. |
| JOIN | Operación para combinar información de varias tablas. |
| INNER JOIN | Devuelve únicamente registros coincidentes. |
| LEFT JOIN | Devuelve todos los registros de la tabla izquierda. |
| RIGHT JOIN | Devuelve todos los registros de la tabla derecha. |
| Índice | Estructura que acelera las búsquedas. |
| UNION | Combina resultados eliminando duplicados. |
| UNION ALL | Combina resultados conservando duplicados. |
| NULL | Valor que indica ausencia de dato. |

---

## Ejercicios de reflexión

1. ¿Por qué suele ser mejor almacenar clientes y pedidos en tablas separadas en lugar de guardarlos en una única tabla?

2. Si un cliente puede realizar muchos pedidos, ¿qué tipo de relación existe entre ambas tablas?

3. ¿Cuál es la diferencia principal entre `INNER JOIN` y `LEFT JOIN`?

4. ¿Qué problema intenta evitar la integridad referencial dentro de una base de datos?

5. Si dos consultas devuelven registros repetidos, ¿qué diferencia habría entre utilizar `UNION` y `UNION ALL`?
