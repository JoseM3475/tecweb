# 3. Ejercicios Ramas

## Pregunta 1

¿Cuál es la principal ventaja de trabajar con ramas en Git?

A) Permite realizar cambios sin afectar directamente a la versión principal del proyecto.

B) Elimina automáticamente los errores del código.

C) Sustituye a los repositorios.

D) Evita tener que guardar cambios.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Las ramas permiten trabajar de forma independiente sin modificar la versión principal hasta que los cambios estén listos.
```

</details>

---

## Pregunta 2

¿Qué suele representar la rama llamada `main`?

A) Una copia de seguridad del proyecto.

B) La versión principal y más estable del proyecto.

C) Una rama temporal de pruebas.

D) Una rama eliminada.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La rama main suele contener la versión principal y estable del proyecto.
```

</details>

---

## Pregunta 3

¿Qué comando muestra las ramas existentes en un repositorio?

A) git merge

B) git switch

C) git branch

D) git diff

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El comando git branch permite visualizar las ramas disponibles.
```

</details>

---

## Pregunta 4

¿Qué comando permite cambiar de una rama a otra?

A) git branch -d

B) git diff

C) git merge

D) git switch

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Git switch permite movernos de una rama a otra para trabajar sobre ella.
```

</details>

---

## Pregunta 5

¿Qué hace el siguiente comando?

```bash
git branch nueva-funcion
```

A) Fusiona dos ramas.

B) Elimina una rama.

C) Crea una nueva rama llamada nueva-funcion.

D) Cambia a la rama nueva-funcion.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El comando crea la rama, pero no cambia automáticamente a ella.
```

</details>

---

## Pregunta 6

Después de ejecutar `git branch pedidos`, ¿qué debería hacerse para comenzar a trabajar en esa rama?

A) Ejecutar git switch pedidos.

B) Ejecutar git merge pedidos.

C) Ejecutar git diff pedidos.

D) Ejecutar git branch -d pedidos.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Crear una rama no implica trabajar en ella. Debemos usar git switch para cambiar a esa rama.
```

</details>

---

## Pregunta 7

¿Qué permite hacer el comando `git branch -m`?

A) Fusionar ramas.

B) Renombrar una rama.

C) Mostrar diferencias.

D) Crear una rama temporal.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
La opción -m permite cambiar el nombre de una rama existente.
```

</details>

---

## Pregunta 8

¿Para qué se utiliza principalmente `git diff`?

A) Para eliminar ramas.

B) Para cambiar entre ramas.

C) Para crear ramas nuevas.

D) Para ver diferencias entre versiones de archivos.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Git diff muestra exactamente qué cambios se han realizado en los archivos.
```

</details>

---

## Pregunta 9

¿Qué hace el comando `git branch -d nombre-rama`?

A) Renombra la rama.

B) Fusiona la rama.

C) Elimina la rama indicada.

D) Muestra sus diferencias.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La opción -d permite borrar ramas que ya no son necesarias.
```

</details>

---

## Pregunta 10

¿Qué significa realizar un merge?

A) Cambiar el nombre de una rama.

B) Crear una nueva rama.

C) Comparar dos ramas.

D) Unir los cambios de una rama en otra.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Merge es el proceso de fusionar el trabajo realizado en diferentes ramas.
```

</details>

---

## Pregunta 11

¿Cuándo suele realizarse un merge?

A) Cuando los cambios de una rama ya están terminados y revisados.

B) Antes de crear una rama.

C) Antes de instalar Git.

D) Justo después de crear el repositorio.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Los cambios suelen fusionarse cuando ya han sido completados y comprobados.
```

</details>

---

## Pregunta 12

¿Qué comando se ejecutaría normalmente antes de hacer un merge para volver a la rama principal?

A) git branch -d main

B) git switch main

C) git diff main

D) git branch main

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Debemos situarnos en la rama que recibirá los cambios antes de realizar la fusión.
```

</details>

---

## Pregunta 13

¿Qué problema puede ocurrir si se trabaja siempre directamente sobre `main`?

A) Git dejará de funcionar.

B) Se eliminarán las ramas existentes.

C) Aumentará el riesgo de introducir cambios problemáticos en la versión principal.

D) No será posible usar git diff.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Las ramas ayudan a aislar cambios y reducir riesgos sobre la versión estable.
```

</details>

---

## Pregunta 14

¿Qué comando crea una rama y cambia automáticamente a ella?

A) git switch -c nueva-rama

B) git merge nueva-rama

C) git diff nueva-rama

D) git branch -d nueva-rama

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
La opción -c permite crear la rama y situarse en ella inmediatamente.
```

</details>

---

## Pregunta 15

Si ejecutas `git branch` y observas:

```text
* productos
  main
```

¿Qué indica el símbolo `*`?

A) Que la rama está protegida.

B) Que la rama contiene errores.

C) Que la rama será eliminada.

D) Que es la rama en la que estás trabajando actualmente.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El asterisco señala la rama activa en ese momento.
```

</details>

---

## Pregunta 16

¿Por qué puede ser útil utilizar `git diff` antes de realizar una fusión?

A) Porque permite revisar los cambios realizados.

B) Porque cambia automáticamente de rama.

C) Porque elimina archivos duplicados.

D) Porque crea una nueva rama.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Revisar los cambios ayuda a detectar posibles errores antes de incorporarlos al proyecto.
```

</details>

---

## Pregunta 17

¿Qué ocurre normalmente después de fusionar correctamente una rama de trabajo?

A) Debe borrarse obligatoriamente el repositorio.

B) La rama principal desaparece.

C) Ya no es posible crear nuevas ramas.

D) La rama de trabajo puede eliminarse si ya no es necesaria.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Tras integrar sus cambios, es habitual eliminar ramas que ya han cumplido su propósito.
```

</details>

---

## Pregunta 18

¿Qué comando utilizarías para incorporar en `main` los cambios de una rama llamada `pedidos`?

A) git branch pedidos

B) git merge pedidos

C) git diff pedidos

D) git switch pedidos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Git merge fusiona los cambios de la rama indicada con la rama actual.
```

</details>

---

## Pregunta 19

Un equipo de trabajo quiere que varias personas desarrollen funcionalidades distintas al mismo tiempo. ¿Qué característica de Git facilita esta forma de trabajo?

A) Las ramas.

B) Los archivos temporales.

C) Las carpetas ocultas.

D) Los nombres de usuario.

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Las ramas permiten que varias personas trabajen simultáneamente sin interferirse.
```

</details>

---

## Pregunta 20

¿Cuál de las siguientes secuencias representa mejor un flujo habitual de trabajo con ramas?

A) Eliminar rama → Crear rama → Merge

B) Merge → Crear rama → Diff

C) Crear rama → Trabajar → Revisar cambios → Merge → Eliminar rama

D) Diff → Eliminar rama → Crear rama

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El flujo habitual consiste en crear una rama, trabajar en ella, revisar los cambios, fusionarlos y finalmente eliminar la rama si ya no es necesaria.
```

</details>
