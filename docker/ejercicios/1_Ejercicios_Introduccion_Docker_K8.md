# 1. Introducción a Docker y Kubernetes

## Pregunta 1

¿Cuál es el principal objetivo de un contenedor?

A) Guardar únicamente los datos de una aplicación

B) Sustituir completamente al sistema operativo

C) Ejecutar varias máquinas virtuales a la vez

D) Empaquetar una aplicación junto con todo lo necesario para que funcione

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Un contenedor incluye la aplicación, sus dependencias y configuraciones para que funcione igual en cualquier entorno.
```

</details>

---

## Pregunta 2

¿Cuál de los siguientes es un beneficio de utilizar Docker?

A) Garantizar que una aplicación funcione igual en distintos entornos

B) Reemplazar Internet

C) Eliminar la necesidad de servidores

D) Evitar el uso de redes

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Docker ayuda a que una aplicación funcione de forma consistente independientemente del equipo donde se ejecute.
```

</details>

---

## Pregunta 3

¿Qué ambiente es utilizado por los usuarios finales de una aplicación?

A) Desarrollo

B) Producción

C) Pruebas

D) Laboratorio

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El ambiente de producción es donde trabajan los usuarios reales con la aplicación.
```

</details>

---

## Pregunta 4

¿En qué se diferencian principalmente los contenedores de las máquinas virtuales?

A) Los contenedores necesitan más memoria

B) Las máquinas virtuales son más ligeras

C) Los contenedores suelen consumir menos recursos

D) Los contenedores siempre tienen su propio sistema operativo

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Los contenedores comparten parte del sistema operativo del anfitrión y consumen menos recursos.
```

</details>

---

## Pregunta 5

¿Qué es un microservicio?

A) Una aplicación pequeña especializada en una función concreta

B) Un sistema operativo reducido

C) Una máquina virtual ligera

D) Un tipo de red informática

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Un microservicio está diseñado para realizar una tarea específica dentro de una aplicación más grande.
```

</details>

---

## Pregunta 6

¿Qué componente de Docker recibe las órdenes del usuario y las ejecuta internamente?

A) Docker Hub

B) Docker Daemon

C) Pod

D) Dockerfile

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El Docker Daemon es el servicio que crea y gestiona imágenes, contenedores, redes y volúmenes.
```

</details>

---

## Pregunta 7

¿Con qué se suele comparar una imagen Docker para facilitar su comprensión?

A) Con un coche

B) Con una biblioteca

C) Con una receta de cocina

D) Con una red virtual

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
La imagen contiene las instrucciones necesarias para crear contenedores, igual que una receta contiene los pasos para preparar un plato.
```

</details>

---

## Pregunta 8

¿Qué es un contenedor con respecto a una imagen?

A) Un repositorio de imágenes

B) Una copia de seguridad

C) Un archivo de configuración

D) Una instancia en ejecución creada a partir de una imagen

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La imagen es la plantilla y el contenedor es la instancia que realmente está funcionando.
```

</details>

---

## Pregunta 9

¿Para qué sirve un Dockerfile?

A) Para definir cómo se construye una imagen Docker

B) Para almacenar datos permanentes

C) Para crear usuarios

D) Para gestionar Kubernetes

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Un Dockerfile contiene las instrucciones necesarias para crear una imagen Docker.
```

</details>

---

## Pregunta 10

En el flujo de trabajo de Docker, ¿qué acción realiza el comando "push"?

A) Ejecuta un contenedor

B) Sube una imagen a un registro

C) Descarga una imagen

D) Borra una imagen

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Push permite enviar una imagen a un repositorio o registro remoto.
```

</details>

---

## Pregunta 11

¿Qué función tiene Docker Compose?

A) Sustituir Kubernetes

B) Diseñar interfaces gráficas

C) Ejecutar varios contenedores utilizando una única configuración

D) Crear sistemas operativos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Docker Compose facilita la gestión de aplicaciones compuestas por varios servicios o contenedores.
```

</details>

---

## Pregunta 12

¿Qué característica distingue al formato YAML?

A) Está basado en la indentación para organizar la información

B) Solo puede escribirse en Linux

C) Se utiliza exclusivamente en Kubernetes

D) Sustituye a Docker

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
YAML organiza la información mediante espacios e indentación para mostrar la estructura de los datos.
```

</details>

---

## Pregunta 13

¿Cuál es una ventaja principal del Multi-Stage Build?

A) Crear máquinas virtuales

B) Aumentar el tamaño de las imágenes

C) Obtener imágenes más pequeñas y eficientes

D) Reemplazar Docker Compose

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El Multi-Stage Build permite reducir el tamaño final de las imágenes eliminando elementos innecesarios.
```

</details>

---

## Pregunta 14

¿Para qué sirven las redes virtuales en Docker?

A) Para almacenar archivos

B) Para crear usuarios

C) Para construir imágenes

D) Para permitir la comunicación entre contenedores

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Las redes virtuales permiten que diferentes contenedores intercambien información.
```

</details>

---

## Pregunta 15

¿Qué problema resuelven los volúmenes en Docker?

A) Permiten conservar los datos aunque el contenedor desaparezca

B) Incrementan el consumo de memoria

C) Sustituyen las imágenes Docker

D) Evitan el uso de redes

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Los volúmenes proporcionan almacenamiento persistente para que los datos no se pierdan.
```

</details>

---

## Pregunta 16

¿Cuál es la función principal de Kubernetes?

A) Crear archivos Dockerfile

B) Administrar y coordinar contenedores de forma automática

C) Diseñar aplicaciones móviles

D) Crear bases de datos

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Kubernetes es un orquestador que gestiona grandes cantidades de contenedores automáticamente.
```

</details>

---

## Pregunta 17

¿Qué es un clúster en Kubernetes?

A) Un único contenedor

B) Una imagen Docker

C) Un conjunto de servidores que trabajan juntos

D) Un volumen persistente

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Un clúster está formado por varias máquinas que colaboran para ejecutar aplicaciones.
```

</details>

---

## Pregunta 18

¿Qué componente se considera el cerebro de Kubernetes?

A) Worker Node

B) Pod

C) Docker Hub

D) Control Plane

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El Control Plane toma las decisiones y coordina el funcionamiento del clúster.
```

</details>

---

## Pregunta 19

¿Qué es un Worker Node?

A) El nodo donde se ejecutan realmente los contenedores

B) El archivo donde se define una imagen

C) El registro de Docker

D) El formato YAML

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Los Worker Nodes son los servidores que ejecutan las aplicaciones y sus contenedores.
```

</details>

---

## Pregunta 20

¿Qué es un Pod en Kubernetes?

A) Un repositorio de imágenes

B) Un sistema operativo

C) Una máquina virtual

D) La unidad básica de ejecución que puede contener uno o varios contenedores

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El Pod es la unidad mínima de ejecución en Kubernetes y normalmente agrupa contenedores relacionados.
```

</details>
