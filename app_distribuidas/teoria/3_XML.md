# XML: Estructura, Elementos, Atributos, Jerarquía, XML Bien Formado y DTD

## Objetivos de aprendizaje

Al finalizar esta sesión el alumno será capaz de:

- Comprender qué es XML y para qué se utiliza.
- Identificar la estructura básica de un documento XML.
- Diferenciar entre elementos y atributos.
- Entender el concepto de jerarquía en XML.
- Reconocer cuándo un documento XML está bien formado.
- Comprender qué es una DTD y para qué sirve.
- Interpretar ejemplos sencillos de documentos XML utilizados para almacenar información.

---

## Introducción

Cuando trabajamos con aplicaciones web distribuidas, es muy habitual que las aplicaciones necesiten intercambiar información entre sí.

Por ejemplo:

- Una tienda online puede enviar información de pedidos a una empresa de transporte.
- Un hospital puede compartir datos entre diferentes sistemas.
- Una biblioteca puede intercambiar información sobre libros con otras bibliotecas.

Para que todas las aplicaciones entiendan la información de la misma manera, es necesario utilizar formatos comunes.

Uno de los formatos más utilizados para organizar e intercambiar información es **XML**.

XML permite guardar información de forma estructurada, organizada y fácil de leer tanto para las personas como para los programas informáticos.

---

# Conceptos teóricos

## ¿Qué es XML?

XML significa:

**eXtensible Markup Language**
(Lenguaje de Marcado Extensible)

Es un lenguaje diseñado para almacenar y transportar información.

XML no se utiliza para programar.

Su objetivo es organizar datos de forma estructurada.

Por ejemplo, podemos guardar información sobre un cliente:

```xml
<cliente>
    <nombre>Juan</nombre>
    <apellido>Pérez</apellido>
</cliente>
```

En este ejemplo:

- Cliente es la información principal.
- Nombre y apellido son datos relacionados con el cliente.

---

## ¿Para qué sirve XML?

XML se utiliza para:

- Intercambiar información entre aplicaciones.
- Almacenar datos estructurados.
- Configurar programas.
- Compartir información entre sistemas diferentes.

Por ejemplo:

- Pedidos de una tienda online.
- Datos de estudiantes.
- Inventarios de productos.
- Catálogos de libros.

---

## Estructura básica de un documento XML

Todo documento XML se construye mediante etiquetas.

Ejemplo:

```xml
<persona>
    <nombre>Laura</nombre>
    <edad>25</edad>
</persona>
```

Observamos:

- Una etiqueta de apertura.
- Un contenido.
- Una etiqueta de cierre.

Ejemplo:

```xml
<nombre>Laura</nombre>
```

Donde:

- `<nombre>` abre la etiqueta.
- `Laura` es el contenido.
- `</nombre>` cierra la etiqueta.

---

## Elementos XML

Los elementos son las piezas principales de información.

Ejemplo:

```xml
<producto>
    <nombre>Portátil</nombre>
    <precio>850</precio>
</producto>
```

Los elementos son:

- producto
- nombre
- precio

Cada elemento representa un dato o un conjunto de datos.

### ¿Cuándo se utilizan?

Cuando queremos almacenar información organizada.

Por ejemplo:

- Clientes
- Productos
- Libros
- Empleados

---

## Atributos XML

Los atributos permiten añadir información adicional a un elemento.

Ejemplo:

```xml
<producto codigo="P001">
    <nombre>Portátil</nombre>
</producto>
```

Aquí:

- producto es un elemento.
- codigo es un atributo.
- P001 es el valor del atributo.

### Otro ejemplo

```xml
<empleado id="10">
    <nombre>Marta</nombre>
</empleado>
```

El atributo permite identificar al empleado.

---

## Diferencia entre elementos y atributos

### Utilizando elementos

```xml
<producto>
    <codigo>P001</codigo>
    <nombre>Portátil</nombre>
</producto>
```

### Utilizando atributos

```xml
<producto codigo="P001">
    <nombre>Portátil</nombre>
</producto>
```

Ambas opciones son válidas.

Normalmente:

- Los datos principales se guardan como elementos.
- Los datos complementarios se guardan como atributos.

---

## Jerarquía XML

XML organiza la información de forma jerárquica.

Una jerarquía es una estructura en niveles.

Por ejemplo:

```xml
<biblioteca>
    <libro>
        <titulo>XML para principiantes</titulo>
    </libro>
</biblioteca>
```

Podemos visualizarlo así:

```text
biblioteca
└── libro
    └── titulo
```

En este caso:

- biblioteca es el elemento raíz.
- libro depende de biblioteca.
- titulo depende de libro.

---

## Elemento raíz

Todo documento XML debe tener un único elemento principal.

Este elemento recibe el nombre de elemento raíz.

Ejemplo correcto:

```xml
<clientes>
    <cliente>
        <nombre>Juan</nombre>
    </cliente>
</clientes>
```

Elemento raíz:

```xml
<clientes>
```

---

## XML bien formado

Un documento XML bien formado cumple una serie de reglas.

Estas reglas son obligatorias.

---

### Regla 1: Todas las etiquetas deben cerrarse

Correcto:

```xml
<nombre>Ana</nombre>
```

Incorrecto:

```xml
<nombre>Ana
```

---

### Regla 2: Las etiquetas deben anidarse correctamente

Correcto:

```xml
<cliente>
    <nombre>Ana</nombre>
</cliente>
```

Incorrecto:

```xml
<cliente>
    <nombre>Ana
</cliente>
</nombre>
```

---

### Regla 3: Debe existir un único elemento raíz

Correcto:

```xml
<personas>
    <persona>Ana</persona>
</personas>
```

Incorrecto:

```xml
<persona>Ana</persona>
<persona>Luis</persona>
```

Hay dos elementos principales y eso no está permitido.

---

### Regla 4: Los nombres distinguen mayúsculas y minúsculas

Incorrecto:

```xml
<Nombre>Ana</nombre>
```

Correcto:

```xml
<Nombre>Ana</Nombre>
```

O:

```xml
<nombre>Ana</nombre>
```

---

## ¿Qué es una DTD?

DTD significa:

**Document Type Definition**

Una DTD es un conjunto de reglas que indica:

- Qué elementos pueden aparecer.
- En qué orden deben aparecer.
- Cuántas veces pueden aparecer.
- Qué atributos están permitidos.

Podemos pensar en una DTD como un formulario o plantilla que dice cómo debe construirse un documento XML.

---

## ¿Para qué sirve una DTD?

Sirve para validar documentos XML.

Es decir, comprobar que cumplen unas reglas previamente definidas.

Por ejemplo:

Supongamos que todas las fichas de clientes deben contener:

- Nombre.
- Apellido.

La DTD obligará a que ambos existan.

---

## Ejemplo sencillo de DTD

DTD:

```xml
<!ELEMENT cliente (nombre, apellido)>
<!ELEMENT nombre (#PCDATA)>
<!ELEMENT apellido (#PCDATA)>
```

Esta DTD indica:

- cliente debe contener nombre y apellido.
- nombre contiene texto.
- apellido contiene texto.

---

## XML que cumple la DTD

```xml
<cliente>
    <nombre>Juan</nombre>
    <apellido>Pérez</apellido>
</cliente>
```

Explicación:

- Existe el elemento cliente.
- Dentro aparecen nombre y apellido.
- El orden es correcto.

Por tanto, el documento es válido.

---

## XML que NO cumple la DTD

```xml
<cliente>
    <nombre>Juan</nombre>
</cliente>
```

Problema:

- Falta el elemento apellido.

La DTD indica que es obligatorio.

---

## DTD con atributos

También es posible definir atributos.

DTD:

```xml
<!ELEMENT producto (nombre)>
<!ELEMENT nombre (#PCDATA)>
<!ATTLIST producto codigo CDATA #REQUIRED>
```

Explicación:

- producto tiene un atributo llamado codigo.
- CDATA indica que almacena texto.
- #REQUIRED significa que es obligatorio.

XML válido:

```xml
<producto codigo="P001">
    <nombre>Portátil</nombre>
</producto>
```

---

# Analogía del mundo real

Imaginemos una biblioteca.

La biblioteca contiene estanterías.

Cada estantería contiene libros.

Cada libro contiene información:

- Título.
- Autor.
- Año.

La estructura sería:

```text
Biblioteca
 ├─ Estantería
 │   ├─ Libro
 │   │   ├─ Título
 │   │   ├─ Autor
 │   │   └─ Año
```

XML funciona exactamente igual.

Cada elemento puede contener otros elementos formando una jerarquía organizada.

La DTD sería el reglamento de la biblioteca que indica:

- Todo libro debe tener título.
- Todo libro debe tener autor.
- El ISBN es obligatorio.

---

# Ejemplos prácticos

## Ejemplo 1: Cliente

```xml
<cliente>
    <nombre>Ana</nombre>
    <apellido>García</apellido>
    <ciudad>Madrid</ciudad>
</cliente>
```

Explicación paso a paso:

- cliente contiene toda la información.
- nombre almacena el nombre.
- apellido almacena el apellido.
- ciudad almacena la ciudad.

---

## Ejemplo 2: Producto

```xml
<producto codigo="P100">
    <nombre>Teclado</nombre>
    <precio>25</precio>
</producto>
```

Explicación:

- producto es el elemento principal.
- codigo es un atributo.
- nombre guarda el nombre del producto.
- precio guarda el precio.

---

## Ejemplo 3: Pedido

```xml
<pedido>
    <cliente>Juan Pérez</cliente>
    <producto>Ratón</producto>
    <cantidad>2</cantidad>
</pedido>
```

Explicación:

- pedido agrupa toda la información.
- cliente identifica al comprador.
- producto identifica lo comprado.
- cantidad indica las unidades.

---

## Ejemplo 4: Biblioteca

```xml
<biblioteca>
    <libro isbn="978123456">
        <titulo>Introducción a XML</titulo>
        <autor>Laura Martín</autor>
    </libro>
</biblioteca>
```

Explicación:

- biblioteca es el elemento raíz.
- libro es un elemento hijo.
- isbn es un atributo.
- titulo y autor contienen los datos principales.

---

# Errores frecuentes

## Olvidar cerrar etiquetas

Incorrecto:

```xml
<nombre>Ana
```

Correcto:

```xml
<nombre>Ana</nombre>
```

---

## Tener varios elementos raíz

Incorrecto:

```xml
<cliente>Ana</cliente>
<cliente>Luis</cliente>
```

Correcto:

```xml
<clientes>
    <cliente>Ana</cliente>
    <cliente>Luis</cliente>
</clientes>
```

---

## Cerrar etiquetas en orden incorrecto

Incorrecto:

```xml
<cliente>
    <nombre>Ana
</cliente>
</nombre>
```

Correcto:

```xml
<cliente>
    <nombre>Ana</nombre>
</cliente>
```

---

## Confundir elementos con atributos

Incorrecto uso conceptual:

```xml
<producto nombre="Portátil" precio="850" categoria="Informática" descripcion="Equipo portátil para trabajo y estudio">
```

Aunque es válido, demasiada información como atributos dificulta la lectura.

Mejor:

```xml
<producto codigo="P001">
    <nombre>Portátil</nombre>
    <precio>850</precio>
    <descripcion>Equipo portátil para trabajo y estudio</descripcion>
</producto>
```

---

# Resumen

- XML es un lenguaje para almacenar e intercambiar información.
- Los datos se organizan mediante etiquetas.
- Las etiquetas representan elementos.
- Los atributos añaden información adicional a los elementos.
- XML utiliza una estructura jerárquica en forma de árbol.
- Todo documento XML debe tener un único elemento raíz.
- Un XML bien formado cumple reglas de sintaxis obligatorias.
- La DTD define las reglas que deben seguir los documentos XML.
- La DTD permite validar que un XML tenga la estructura esperada.
- XML es muy utilizado para compartir información entre aplicaciones.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| XML | Lenguaje utilizado para almacenar e intercambiar información estructurada. |
| Elemento | Etiqueta que representa un dato o conjunto de datos. |
| Atributo | Información adicional asociada a un elemento. |
| Etiqueta | Marca utilizada para abrir o cerrar un elemento XML. |
| Elemento raíz | Elemento principal que contiene todo el documento XML. |
| Jerarquía | Organización de elementos en distintos niveles. |
| XML bien formado | Documento que cumple las reglas básicas de sintaxis XML. |
| DTD | Conjunto de reglas que define la estructura permitida de un XML. |
| Validación | Proceso de comprobar que un XML cumple una DTD. |
| #PCDATA | Texto que puede contener un elemento XML. |
| CDATA | Tipo de dato utilizado para almacenar texto en atributos. |
| #REQUIRED | Indica que un atributo es obligatorio. |

---

# Ejercicios de reflexión

1. ¿Por qué es útil utilizar XML para intercambiar información entre aplicaciones diferentes?

2. En el siguiente XML, identifica el elemento raíz, los elementos hijos y los atributos:

```xml
<producto codigo="P100">
    <nombre>Monitor</nombre>
    <precio>150</precio>
</producto>
```

3. ¿Cuál es la diferencia principal entre un elemento y un atributo?

4. Indica qué error existe en el siguiente documento XML:

```xml
<cliente>
    <nombre>Ana</cliente>
</nombre>
```

5. ¿Para qué sirve una DTD y qué ventajas aporta cuando varias aplicaciones comparten información mediante XML?
