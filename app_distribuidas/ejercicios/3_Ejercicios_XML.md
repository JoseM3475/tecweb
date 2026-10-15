# Examen tipo test

## Pregunta 1

¿Cuál es la finalidad principal de XML?

A) Crear páginas web visuales

B) Almacenar y transportar información estructurada

C) Instalar programas en un ordenador

D) Diseñar imágenes para una aplicación

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
XML se utiliza para almacenar y compartir información de forma estructurada entre sistemas y aplicaciones.
```

</details>

---

## Pregunta 2

Observa el siguiente fragmento:

```xml
<nombre>Ana</nombre>
```

¿Qué representa "nombre"?

A) Un atributo

B) Una DTD

C) Un elemento

D) Un comentario

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La etiqueta nombre representa un elemento XML que contiene información.
```

</details>

---

## Pregunta 3

¿Qué característica tiene la estructura de un documento XML?

A) Organiza los datos en una jerarquía de niveles

B) Solo permite almacenar números

C) No utiliza etiquetas

D) Obliga a usar atributos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
XML organiza la información mediante una estructura jerárquica formada por elementos que pueden contener otros elementos.
```

</details>

---

## Pregunta 4

En el siguiente ejemplo?

```xml
<producto codigo="P001">
```

¿Qué es "codigo"?

A) Un elemento raíz

B) Un documento XML

C) Una DTD

D) Un atributo

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La información situada dentro de la etiqueta de apertura se denomina atributo.
```

</details>

---

## Pregunta 5

¿Cuál de los siguientes ejemplos representa correctamente una etiqueta abierta y cerrada?

A)

```xml
<nombre>Ana
```

B)

```xml
<nombre>Ana<nombre>
```

C)

```xml
<nombre>Ana</nombre>
```

D)

```xml
nombre>Ana</nombre>
```

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Las etiquetas XML deben abrirse y cerrarse correctamente.
```

</details>

---

## Pregunta 6

¿Qué elemento es el principal y contiene a todos los demás en un documento XML?

A) Elemento raíz

B) Atributo obligatorio

C) Comentario principal

D) DTD interna

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Todo documento XML debe tener un único elemento raíz que englobe todo el contenido.
```

</details>

---

## Pregunta 7

¿Qué documento se considera XML bien formado?

A)

```xml
<cliente>
<nombre>Ana</nombre>
```

B)

```xml
<cliente>
<nombre>Ana</cliente>
</nombre>
```

C)

```xml
<cliente>Ana</cliente>
<cliente>Luis</cliente>
```

D)

```xml
<cliente>
    <nombre>Ana</nombre>
</cliente>
```

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Todas las etiquetas se cierran correctamente y existe un único elemento principal.
```

</details>

---

## Pregunta 8

¿Para qué se utiliza principalmente una DTD?

A) Para mostrar gráficos

B) Para definir las reglas que debe seguir un XML

C) Para programar aplicaciones

D) Para conectarse a Internet

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Una DTD indica qué elementos, atributos y estructura puede tener un documento XML.
```

</details>

---

## Pregunta 9

¿Qué significa que XML tenga una estructura jerárquica?

A) Todos los elementos están al mismo nivel

B) Solo existe un elemento

C) Los elementos se organizan en niveles padre e hijo

D) Los atributos contienen otros atributos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La jerarquía XML permite que unos elementos contengan otros formando distintos niveles.
```

</details>

---

## Pregunta 10

¿Cuál de los siguientes casos muestra dos elementos hijos de "cliente"?

A)

```xml
<cliente>
    <nombre>Ana</nombre>
    <ciudad>Madrid</ciudad>
</cliente>
```

B)

```xml
<cliente nombre="Ana">
```

C)

```xml
<cliente></cliente>
```

D)

```xml
<nombre cliente="Ana">
```

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Nombre y ciudad están dentro de cliente y dependen de él.
```

</details>

---

## Pregunta 11

¿Qué sucede si un documento XML tiene dos elementos raíz diferentes?

A) Es válido si los nombres son distintos

B) Solo es válido con DTD

C) XML lo corrige automáticamente

D) No está bien formado

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Un XML bien formado debe tener un único elemento raíz.
```

</details>

---

## Pregunta 12

¿Para qué suelen utilizarse los atributos en XML?

A) Para añadir información adicional a un elemento

B) Para sustituir siempre a los elementos

C) Para eliminar etiquetas

D) Para crear comentarios

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Los atributos complementan la información asociada a un elemento.
```

</details>

---

## Pregunta 13

¿Qué define la siguiente línea de una DTD?

```xml
<!ELEMENT nombre (#PCDATA)>
```

A) Un atributo obligatorio

B) Un comentario XML

C) Un elemento que contiene texto

D) Un elemento vacío

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
#PCDATA indica que el elemento puede contener datos de texto.
```

</details>

---

## Pregunta 14

¿Cuál es una ventaja de utilizar XML?

A) Reduce automáticamente el precio de los servidores

B) Permite organizar e intercambiar información entre aplicaciones

C) Sustituye a todos los lenguajes de programación

D) Elimina la necesidad de almacenar datos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
XML facilita el intercambio de información entre sistemas diferentes.
```

</details>

---

## Pregunta 15

¿Qué problema tiene este fragmento XML?

```xml
<Nombre>Ana</nombre>
```

A) Tiene dos elementos raíz

B) Falta un atributo

C) El texto no está permitido

D) Las etiquetas no coinciden exactamente

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
XML distingue mayúsculas y minúsculas. Nombre y nombre son diferentes.
```

</details>

---

## Pregunta 16

¿Cuál de las siguientes afirmaciones sobre XML es correcta?

A) Es un lenguaje utilizado para estructurar datos

B) Solo sirve para crear videojuegos

C) Obliga a utilizar una DTD

D) No permite usar atributos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
XML se diseñó para almacenar y organizar información de forma estructurada.
```

</details>

---

## Pregunta 17

Si una DTD indica que un cliente debe contener nombre y apellido, ¿qué ocurrirá si falta apellido?

A) El XML añadirá el dato automáticamente

B) El documento no cumplirá la DTD

C) El elemento nombre desaparecerá

D) El atributo se convertirá en elemento

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Al faltar un elemento obligatorio, el documento no cumple las reglas definidas por la DTD.
```

</details>

---

## Pregunta 18

En el siguiente XML:

```xml
<biblioteca>
    <libro>
        <titulo>XML Fácil</titulo>
    </libro>
</biblioteca>
```

¿Qué elemento depende directamente de biblioteca?

A) titulo

B) Ninguno

C) libro

D) XML Fácil

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Libro está contenido directamente dentro de biblioteca y es su elemento hijo.
```

</details>

---

## Pregunta 19

¿Qué indica la palabra "#REQUIRED" en una DTD?

A) Que un atributo es obligatorio

B) Que un elemento debe estar vacío

C) Que el XML ya es válido

D) Que el atributo es opcional

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
#REQUIRED significa que el atributo debe aparecer obligatoriamente.
```

</details>

---

## Pregunta 20

¿Cuál de las siguientes afirmaciones describe mejor una DTD?

A) Es un programa que ejecuta XML

B) Es un atributo especial

C) Es una etiqueta obligatoria en todos los documentos

D) Es un conjunto de reglas que define la estructura permitida

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La DTD establece qué elementos y atributos están permitidos y cómo deben organizarse.
```

</details>

---

