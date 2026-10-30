# 2. Ejercicios Introducción a Docker

## Pregunta 1

¿Cuál es el principal objetivo de Docker?

A) Crear bases de datos automáticamente

B) Diseñar páginas web

C) Empaquetar aplicaciones para que funcionen igual en distintos entornos

D) Sustituir completamente los sistemas operativos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Docker permite empaquetar una aplicación junto con todo lo necesario para que funcione igual en cualquier entorno.
```

</details>

---

## Pregunta 2

¿Qué contiene un contenedor Docker?

A) Solo el sistema operativo

B) Aplicación, dependencias y configuración

C) Únicamente archivos de texto

D) Solo programas instalados por el usuario

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Un contenedor incluye la aplicación y todos los elementos necesarios para ejecutarla correctamente.
```

</details>

---

## Pregunta 3

¿Qué significa que un contenedor está aislado?

A) Que funciona sin electricidad

B) Que necesita Internet para ejecutarse

C) Que únicamente puede ejecutarse una vez

D) Que funciona de forma independiente de otras aplicaciones

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El aislamiento evita que una aplicación interfiera con otras aplicaciones o entornos.
```

</details>

---

## Pregunta 4

¿Qué software se utiliza para gestionar máquinas virtuales?

A) Hypervisor

B) Docker Hub

C) Dockerfile

D) OCI

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
El Hypervisor es el software encargado de crear y administrar máquinas virtuales.
```

</details>

---

## Pregunta 5

¿Cuál es una ventaja de los contenedores frente a las máquinas virtuales?

A) Necesitan más memoria

B) Consumen menos recursos

C) Son más lentos al arrancar

D) Siempre incluyen un sistema operativo completo

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Los contenedores son más ligeros y utilizan menos recursos que las máquinas virtuales.
```

</details>

---

## Pregunta 6

¿Qué significa OCI?

A) Open Cloud Internet

B) Open Container Initiative

C) Official Container Infrastructure

D) Open Configuration Interface

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
OCI es un estándar abierto que define reglas comunes para los contenedores.
```

</details>

---

## Pregunta 7

¿Cuál de los siguientes es un caso de uso habitual de Docker?

A) Sustituir navegadores web

B) Crear documentos PDF

C) Testing o realización de pruebas

D) Diseñar logotipos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Docker se utiliza frecuentemente para crear entornos de prueba rápidos y reproducibles.
```

</details>

---

## Pregunta 8

¿Qué significa escalar una aplicación?

A) Reducir el número de usuarios

B) Eliminar contenedores

C) Cambiar el sistema operativo

D) Aumentar su capacidad para soportar más carga

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Escalar significa incrementar los recursos o instancias para atender más usuarios o trabajo.
```

</details>

---

## Pregunta 9

¿Qué componente es el encargado principal de ejecutar contenedores?

A) Docker Engine

B) Docker Hub

C) Hypervisor

D) OCI

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Docker Engine es el motor que crea, ejecuta y administra contenedores.
```

</details>

---

## Pregunta 10

¿Qué herramienta incorpora una interfaz gráfica y Docker Engine?

A) Docker Hub

B) Docker Desktop

C) OCI

D) Hypervisor

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Docker Desktop facilita el uso de Docker mediante herramientas visuales y administración gráfica.
```

</details>

---

## Pregunta 11

¿Qué es una imagen Docker?

A) Un contenedor en ejecución

B) Un servidor físico

C) Una plantilla utilizada para crear contenedores

D) Una red de Docker

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Una imagen contiene todo lo necesario para crear posteriormente uno o varios contenedores.
```

</details>

---

## Pregunta 12

¿Cuál de los siguientes elementos forma parte de una imagen Docker?

A) Aplicación, librerías y configuración

B) Únicamente usuarios registrados

C) Solo bases de datos

D) Solamente archivos temporales

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Las imágenes suelen contener la aplicación, librerías y configuraciones necesarias.
```

</details>

---

## Pregunta 13

¿Qué es un contenedor respecto a una imagen?

A) Una copia de seguridad

B) Una instancia de una imagen

C) Una carpeta compartida

D) Un estándar de OCI

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Un contenedor es una instancia creada a partir de una imagen y ejecutada por Docker.
```

</details>

---

## Pregunta 14

Internamente, un contenedor puede considerarse principalmente:

A) Una máquina física

B) Una base de datos

C) Un antivirus

D) Un proceso en ejecución

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Un contenedor es esencialmente un proceso aislado que se está ejecutando.
```

</details>

---

## Pregunta 15

¿Cuál de las siguientes fases pertenece al ciclo de vida de un contenedor?

A) Ejecución

B) Compilación del sistema operativo

C) Instalación del hardware

D) Compra de licencias

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Las fases habituales incluyen crear, ejecutar, pausar, detener y eliminar.
```

</details>

---

## Pregunta 16

¿Para qué sirve un Dockerfile?

A) Gestionar redes de Internet

B) Crear usuarios de Docker Hub

C) Definir instrucciones para construir una imagen

D) Sustituir Docker Engine

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El Dockerfile contiene los pasos necesarios para construir una imagen Docker.
```

</details>

---

## Pregunta 17

¿Qué instrucción de Dockerfile se utiliza para copiar archivos?

A) RUN

B) COPY

C) FROM

D) CMD

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
COPY permite copiar archivos desde el equipo local hacia la imagen.
```

</details>

---

## Pregunta 18

¿Qué instrucción define la imagen base en un Dockerfile?

A) CMD

B) COPY

C) RUN

D) FROM

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
FROM indica la imagen inicial sobre la que se construirá la nueva imagen.
```

</details>

---

## Pregunta 19

¿Qué es Docker Hub?

A) Un repositorio de imágenes Docker

B) Un sistema operativo

C) Un tipo de contenedor

D) Una máquina virtual

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Docker Hub permite almacenar, descargar y compartir imágenes Docker.
```

</details>

---

## Pregunta 20

¿Qué comando se utiliza para crear una imagen a partir de un Dockerfile?

A) docker run

B) docker start

C) docker copy

D) docker build

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
docker build construye una imagen siguiendo las instrucciones definidas en un Dockerfile.
```

</details>

---
