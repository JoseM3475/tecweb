# 5. Ejercicios de Imagenes y Volúmenes

## Pregunta 1

¿Qué es una imagen de Docker?

A) Una aplicación ejecutándose actualmente

B) Una plantilla que contiene todo lo necesario para ejecutar una aplicación

C) Un ordenador virtual completo

D) Una base de datos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Una imagen es una plantilla que contiene el sistema base, programas,
configuración y archivos necesarios para ejecutar una aplicación.
```

</details>

---

## Pregunta 2

¿Cuál es la principal función de Docker Hub?

A) Crear contenedores automáticamente

B) Ejecutar aplicaciones web

C) Almacenar y compartir imágenes Docker

D) Eliminar imágenes antiguas

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Docker Hub es un repositorio donde los usuarios pueden buscar,
compartir y descargar imágenes Docker.
```

</details>

---

## Pregunta 3

¿Qué comando permite descargar una imagen desde Docker Hub?

A) docker pull

B) docker images

C) docker history

D) docker search

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
El comando docker pull descarga una imagen desde Docker Hub hacia
nuestro equipo.
```

</details>

---

## Pregunta 4

¿Qué significa que una imagen Docker sea inmutable?

A) Que puede modificarse fácilmente

B) Que solamente un administrador puede modificarla

C) Que cambia automáticamente con el tiempo

D) Que no puede modificarse una vez creada

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La inmutabilidad implica que la imagen no se modifica. Si se necesita
un cambio, se crea una nueva versión.
```

</details>

---

## Pregunta 5

¿Qué comando permite buscar imágenes disponibles en Docker Hub?

A) docker build

B) docker search

C) docker rmi

D) docker history

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
docker search permite localizar imágenes relacionadas con un término
de búsqueda.
```

</details>

---

## Pregunta 6

¿Qué representan las capas de una imagen Docker?

A) Usuarios que utilizan la imagen

B) Diferentes contenedores ejecutándose

C) Cambios o pasos realizados durante su construcción

D) Versiones de Docker instaladas

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Las capas representan las distintas modificaciones realizadas para
construir una imagen.
```

</details>

---

## Pregunta 7

¿Qué comando muestra las imágenes almacenadas localmente?

A) docker images

B) docker search

C) docker build

D) docker pull

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
docker images lista todas las imágenes disponibles en el equipo local.
```

</details>

---

## Pregunta 8

¿Qué archivo se utiliza para definir cómo construir una imagen Docker?

A) config.yml

B) docker.config

C) image.txt

D) Dockerfile

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Dockerfile contiene todas las instrucciones necesarias para crear una
imagen.
```

</details>

---

## Pregunta 9

¿Qué instrucción de Dockerfile define la imagen base?

A) RUN

B) COPY

C) FROM

D) CMD

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La instrucción FROM indica la imagen desde la que comenzará la
construcción.
```

</details>

---

## Pregunta 10

¿Qué instrucción permite ejecutar comandos durante la construcción de una imagen?

A) ENTRYPOINT

B) RUN

C) WORKDIR

D) COPY

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
RUN ejecuta comandos mientras Docker construye la imagen.
```

</details>

---

## Pregunta 11

¿Qué instrucción se utiliza para copiar archivos desde el equipo local a la imagen?

A) COPY

B) FROM

C) CMD

D) RUN

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
COPY permite incorporar archivos del equipo local al interior de la
imagen.
```

</details>

---

## Pregunta 12

¿Qué instrucción establece el directorio de trabajo dentro de la imagen?

A) CMD

B) ENTRYPOINT

C) WORKDIR

D) COPY

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
WORKDIR define la carpeta donde se ejecutarán las instrucciones
posteriores.
```

</details>

---

## Pregunta 13

¿Qué comando permite construir una imagen a partir de un Dockerfile?

A) docker search

B) docker images

C) docker pull

D) docker build . -t

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
docker build . -t crea una imagen utilizando el Dockerfile del
directorio actual y asignándole un nombre.
```

</details>

---

## Pregunta 14

¿Qué comando permite ver las capas que forman una imagen?

A) docker rmi

B) docker image prune

C) docker history

D) docker search

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
docker history muestra la información sobre las capas que componen una
imagen.
```

</details>

---

## Pregunta 15

¿Qué comando permite eliminar una imagen específica?

A) docker rmi

B) docker pull

C) docker search

D) docker history

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
docker rmi elimina una imagen concreta almacenada localmente.
```

</details>

---

## Pregunta 16

¿Cuál es el objetivo principal de ejecutar docker image prune?

A) Descargar imágenes nuevas

B) Mostrar todas las imágenes

C) Reiniciar contenedores

D) Eliminar imágenes que ya no se utilizan

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
docker image prune ayuda a liberar espacio eliminando imágenes sin uso.
```

</details>

---

## Pregunta 17

¿Por qué es importante el orden de las instrucciones en un Dockerfile?

A) Porque puede mejorar la reutilización de capas y acelerar la construcción

B) Porque cambia automáticamente la versión de Docker

C) Porque permite eliminar contenedores

D) Porque evita usar Docker Hub

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Un buen orden permite aprovechar la caché de Docker y reducir el tiempo
de construcción.
```

</details>

---

## Pregunta 18

¿Qué instrucción define el comando que se ejecutará por defecto al iniciar un contenedor?

A) FROM

B) CMD

C) COPY

D) RUN

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
CMD indica cuál será el comando predeterminado al arrancar el contenedor.
```

</details>

---

## Pregunta 19

¿Qué ventaja ofrecen los Dev Containers?

A) Sustituyen Docker Hub

B) Eliminan todas las capas de una imagen

C) Convierten imágenes en bases de datos

D) Permiten que todos trabajen con la misma configuración

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Los Dev Containers proporcionan entornos idénticos para todos los
miembros de un equipo.
```

</details>

---

## Pregunta 20

Si una empresa quiere que todos sus empleados utilicen exactamente el mismo entorno de desarrollo, ¿qué solución encaja mejor?

A) Docker history

B) Docker search

C) Dev Containers

D) Docker rmi

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Los Dev Containers garantizan que todos los usuarios trabajen con la
misma configuración y herramientas.
```

</details>
