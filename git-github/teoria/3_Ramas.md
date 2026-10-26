# 3. Branch y Merge en Git: Trabajando con Ramas

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es una rama en Git y por qué se utiliza.
- Entender cómo crear y gestionar ramas.
- Conocer el propósito de los comandos `git branch` y `git switch`.
- Comprender cómo comparar cambios mediante `git diff`.
- Entender qué significa fusionar ramas mediante `git merge`.
- Aprender a eliminar ramas que ya no son necesarias.
- Comprender cómo varios desarrolladores pueden trabajar simultáneamente sin interferirse.

---

# Introducción

Cuando trabajamos en un proyecto, es habitual querer realizar cambios sin poner en riesgo la versión que ya funciona correctamente.

Imagina que estás escribiendo un libro. Quieres probar un final diferente, pero no quieres modificar el original por si el nuevo final no te convence.

Git resuelve este problema mediante las **ramas**.

Las ramas permiten crear líneas de trabajo independientes donde podemos realizar cambios, experimentar y desarrollar nuevas funcionalidades. Cuando los cambios están terminados y funcionan correctamente, podemos unirlos a la versión principal mediante un proceso llamado **merge** (fusión).

Gracias a las ramas, varias personas pueden trabajar al mismo tiempo sobre el mismo proyecto sin sobrescribir el trabajo de los demás.

---

# Conceptos teóricos

## ¿Qué es una rama?

Una rama (branch) es una línea de trabajo independiente dentro de un repositorio Git.

Permite desarrollar nuevas características, corregir errores o realizar pruebas sin afectar al trabajo principal.

### ¿Para qué sirve?

Sirve para:

- Probar cambios de forma segura.
- Desarrollar nuevas funcionalidades.
- Corregir errores.
- Permitir que varias personas trabajen simultáneamente.

### ¿Cuándo se utiliza?

Se utiliza siempre que queremos realizar cambios importantes sin modificar directamente la versión principal del proyecto.

---

## Rama principal

Normalmente existe una rama principal llamada:

```text
main
```

Esta rama suele contener la versión más estable del proyecto.

Por ejemplo:

```text
main
```

Puede representar una versión lista para ser utilizada por los usuarios.

---

## Git Branch

El comando `git branch` permite gestionar ramas.

### ¿Para qué sirve?

Permite:

- Ver ramas existentes.
- Crear nuevas ramas.
- Renombrar ramas.
- Eliminar ramas.

### Ver las ramas existentes

```bash
git branch
```

### Explicación

- `git` ejecuta Git.
- `branch` muestra las ramas disponibles.

Ejemplo de resultado:

```text
* main
  desarrollo
  pruebas
```

El símbolo `*` indica la rama actual.

---

## Crear una rama nueva

Podemos crear una nueva rama para desarrollar una funcionalidad.

```bash
git branch nueva-rama
```

### Explicación

- `git` ejecuta Git.
- `branch` gestiona ramas.
- `nueva-rama` es el nombre de la rama que queremos crear.

Ejemplo:

```bash
git branch carrito-compra
```

Tras ejecutar el comando, la rama existe, pero todavía seguimos trabajando en la rama actual.

---

## Git Switch

Crear una rama no significa comenzar a utilizarla.

Para movernos a otra rama utilizamos:

```bash
git switch nombre-rama
```

### Ejemplo

```bash
git switch carrito-compra
```

### Explicación

- `git` ejecuta Git.
- `switch` cambia de rama.
- `carrito-compra` es la rama de destino.

Ahora todos los cambios se realizarán sobre esa rama.

---

## Crear y cambiar a una rama

También es frecuente crear una rama y cambiar a ella inmediatamente.

```bash
git switch -c nueva-rama
```

### Ejemplo

```bash
git switch -c pedidos
```

### Explicación

- `-c` significa crear la rama.
- Después cambia automáticamente a ella.

---

## Renombrar una rama

En ocasiones elegimos un nombre incorrecto para una rama.

Git permite cambiarlo mediante:

```bash
git branch -m nuevo-nombre
```

### Ejemplo

```bash
git branch -m gestion-clientes
```

### Explicación

- `-m` significa mover o renombrar.
- La rama actual cambia de nombre.

---

## Eliminar una rama

Cuando una rama ya no es necesaria, puede eliminarse.

```bash
git branch -d nombre-rama
```

### Ejemplo

```bash
git branch -d carrito-compra
```

### Explicación

- `-d` significa delete (eliminar).
- Borra la rama indicada.

Esto ayuda a mantener el repositorio organizado.

---

## Git Diff

A medida que realizamos cambios, puede resultar útil comparar versiones.

Para ello utilizamos:

```bash
git diff
```

### ¿Para qué sirve?

Permite ver diferencias entre archivos.

### Ejemplo práctico

Versión anterior:

```text
Producto
```

Versión modificada:

```text
Producto disponible
```

Git mostrará exactamente qué ha cambiado.

### ¿Cuándo se utiliza?

- Antes de guardar cambios.
- Antes de hacer un commit.
- Para revisar modificaciones.

---

## Git Merge

Una vez terminamos el trabajo en una rama, normalmente queremos incorporar los cambios a la rama principal.

Para ello utilizamos:

```bash
git merge
```

---

### ¿Qué es un merge?

Un merge es el proceso de unir los cambios de dos ramas.

Por ejemplo:

```text
main
 |
 └── rama-productos
```

Tras el merge:

```text
main (incluye cambios de rama-productos)
```

---

### ¿Para qué sirve?

Sirve para:

- Incorporar nuevas funcionalidades.
- Integrar correcciones.
- Reunir el trabajo realizado por diferentes desarrolladores.

---

### ¿Cuándo se utiliza?

Cuando los cambios de una rama están terminados y comprobados.

---

### Ejemplo de merge

Situación inicial:

```text
main
 └── pedidos
```

Nos situamos en la rama principal:

```bash
git switch main
```

### Explicación

Cambiamos a la rama principal donde queremos incorporar los cambios.

Después ejecutamos:

```bash
git merge pedidos
```

### Explicación

- `merge` fusiona ramas.
- `pedidos` es la rama cuyos cambios queremos incorporar.

Resultado:

```text
main
```

Ahora contiene también todos los cambios realizados en la rama `pedidos`.

---

## Flujo típico de trabajo con ramas

Proceso habitual:

```text
1. Partimos de main
          ↓
2. Creamos una rama
          ↓
3. Realizamos cambios
          ↓
4. Revisamos diferencias
          ↓
5. Fusionamos con main
          ↓
6. Eliminamos la rama
```

Este flujo ayuda a mantener organizado el trabajo de desarrollo.

---

# Analogía del mundo real

Imagina que una editorial está escribiendo un libro.

La versión oficial del libro sería:

```text
main
```

Un escritor quiere probar un nuevo capítulo.

Entonces crea una copia de trabajo:

```text
rama-nuevo-capitulo
```

En esa copia realiza cambios sin tocar el libro original.

Cuando la editorial aprueba esos cambios:

```text
merge
```

Los cambios se integran en la versión oficial.

Finalmente la copia temporal deja de ser necesaria y puede eliminarse.

---

# Ejemplos prácticos

## Ejemplo 1: Crear una rama para productos

Crear la rama:

```bash
git branch productos
```

### Explicación

Crea una nueva rama llamada `productos`.

Cambiar a ella:

```bash
git switch productos
```

### Explicación

A partir de este momento trabajaremos sobre la rama `productos`.

---

## Ejemplo 2: Ver las ramas existentes

```bash
git branch
```

### Explicación

Muestra todas las ramas disponibles.

Resultado posible:

```text
* productos
  main
```

El símbolo `*` indica que estamos trabajando actualmente en `productos`.

---

## Ejemplo 3: Comparar cambios

```bash
git diff
```

### Explicación

Muestra las diferencias entre la versión actual y la versión guardada anteriormente.

Permite revisar los cambios antes de confirmarlos.

---

## Ejemplo 4: Fusionar una rama

Volver a la rama principal:

```bash
git switch main
```

### Explicación

Nos situamos en la rama que recibirá los cambios.

Fusionar:

```bash
git merge productos
```

### Explicación

Incorpora todos los cambios realizados en la rama `productos`.

---

## Ejemplo 5: Eliminar una rama terminada

```bash
git branch -d productos
```

### Explicación

La rama ya no es necesaria porque sus cambios se han incorporado a la rama principal.

---

# Errores frecuentes

## Crear una rama y olvidar cambiar a ella

Error:

```bash
git branch nueva-funcion
```

Pensar que ya estamos trabajando en ella.

Realidad:

Debemos cambiar a la rama mediante:

```bash
git switch nueva-funcion
```

---

## Fusionar desde la rama incorrecta

Error:

Realizar un merge sin comprobar la rama actual.

Consecuencia:

Los cambios pueden fusionarse en un lugar no deseado.

---

## Eliminar una rama demasiado pronto

Error:

Borrar una rama antes de fusionarla.

Consecuencia:

El trabajo realizado puede perderse.

---

## No revisar los cambios

Error:

Fusionar cambios sin utilizar:

```bash
git diff
```

Consecuencia:

Pueden incorporarse modificaciones incorrectas.

---

## Utilizar siempre la rama principal

Error:

Realizar todas las modificaciones en:

```text
main
```

Consecuencia:

Aumenta el riesgo de errores y dificulta el trabajo en equipo.

---

# Resumen

- Una rama permite trabajar de forma independiente dentro de un proyecto.
- La rama principal suele llamarse `main`.
- `git branch` permite crear, listar, renombrar y eliminar ramas.
- `git switch` permite cambiar de una rama a otra.
- `git branch -m` permite renombrar una rama.
- `git branch -d` permite eliminar una rama.
- `git diff` muestra las diferencias entre versiones.
- `git merge` permite fusionar los cambios de una rama con otra.
- Las ramas facilitan el trabajo en equipo y reducen riesgos.
- El flujo habitual consiste en crear una rama, trabajar en ella, fusionarla y eliminarla.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Rama (Branch) | Línea de trabajo independiente dentro de un repositorio. |
| Main | Rama principal del proyecto. |
| Git Branch | Comando para gestionar ramas. |
| Git Switch | Comando para cambiar de rama. |
| Git Branch nueva-rama | Crea una nueva rama. |
| Git Branch -m | Renombra una rama existente. |
| Git Branch -d | Elimina una rama. |
| Git Diff | Muestra diferencias entre versiones de archivos. |
| Git Merge | Fusiona cambios de una rama en otra. |
| Fusión (Merge) | Proceso de unir los cambios de varias ramas. |
| Repositorio | Carpeta que Git utiliza para gestionar versiones. |

---

# Ejercicios de reflexión

1. ¿Por qué es recomendable trabajar en una rama en lugar de modificar directamente la rama principal?

2. ¿Qué diferencia existe entre crear una rama con `git branch` y cambiar a una rama con `git switch`?

3. ¿Para qué puede resultar útil el comando `git diff` antes de realizar una fusión?

4. ¿Qué ocurre cuando ejecutamos `git merge` sobre una rama que contiene cambios terminados?

5. ¿Por qué es conveniente eliminar una rama después de haber fusionado correctamente sus cambios?
