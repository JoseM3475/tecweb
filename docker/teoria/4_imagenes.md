# 4. Imágenes de Contenedores y Creación de Imágenes con Docker

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es una imagen de Docker.
- Entender la diferencia entre una imagen y un contenedor.
- Conocer el concepto de inmutabilidad.
- Comprender qué son las capas de una imagen.
- Buscar imágenes en Docker Hub.
- Descargar imágenes utilizando `docker pull`.
- Listar imágenes almacenadas localmente.
- Analizar la información de una imagen mediante `docker history`.
- Eliminar imágenes que ya no se utilizan.
- Crear tus propias imágenes utilizando un Dockerfile.
- Comprender los comandos básicos de un Dockerfile.
- Entender por qué el orden de las instrucciones es importante.
- Conocer qué son los Dev Containers y para qué sirven.

---

## Introducción

Cuando trabajamos con Docker, uno de los conceptos más importantes son las imágenes.

Una imagen puede entenderse como una plantilla preparada que contiene todo lo necesario para ejecutar una aplicación.

Por ejemplo, si queremos ejecutar una aplicación de gestión de clientes, pedidos, productos o una biblioteca, necesitaremos:

- Un sistema operativo base.
- Programas adicionales.
- Archivos de la aplicación.
- Configuración adecuada.

Instalar todo manualmente en cada ordenador sería lento y propenso a errores. Docker permite empaquetar todo dentro de una imagen para reutilizarla tantas veces como sea necesario.

Gracias a esto conseguimos:

- Rapidez.
- Portabilidad.
- Menos errores.
- Entornos idénticos para todos.

En esta sesión aprenderemos cómo obtener imágenes ya preparadas y cómo construir nuestras propias imágenes.

---

## Conceptos teóricos

### ¿Qué es una imagen de Docker?

Una imagen es una plantilla que contiene todo lo necesario para ejecutar una aplicación.

Incluye:

- Sistema operativo base.
- Programas necesarios.
- Configuración.
- Archivos de la aplicación.

Una imagen no se ejecuta directamente.

Cuando Docker ejecuta una imagen, crea un contenedor.

Podemos resumirlo así:

```text
Imagen --> Plantilla
Contenedor --> Aplicación funcionando
```

#### ¿Para qué sirven?

Permiten:

- Distribuir aplicaciones fácilmente.
- Crear entornos idénticos.
- Evitar instalaciones manuales.
- Reducir errores de configuración.

#### ¿Cuándo se utilizan?

Se utilizan prácticamente siempre que trabajamos con Docker.

Antes de crear un contenedor necesitamos una imagen.

#### Ejemplo sencillo

Supongamos una aplicación de gestión de clientes.

La imagen contendría:

- Linux.
- Python.
- La aplicación de clientes.
- Su configuración.

Cada vez que queramos ejecutar la aplicación crearemos un contenedor a partir de la imagen.

---

### Docker Hub

Docker Hub es el repositorio oficial de imágenes Docker.

Podemos imaginarlo como una enorme biblioteca en Internet donde millones de usuarios comparten imágenes.

#### ¿Para qué sirve?

Permite:

- Buscar imágenes.
- Descargar imágenes.
- Compartir imágenes propias.
- Mantener versiones de imágenes.

#### Ejemplos de imágenes populares

- Ubuntu
- Nginx
- MySQL
- PostgreSQL
- Redis

---

### Docker Search

El comando `docker search` permite buscar imágenes disponibles en Docker Hub.

#### ¿Para qué sirve?

Antes de descargar una imagen necesitamos saber si existe.

#### Ejemplo

```bash
docker search nginx
```

Explicación:

- `docker search` indica que queremos buscar imágenes.
- `nginx` es el término buscado.

Docker mostrará varias imágenes relacionadas con Nginx.

---

### Descargar imágenes con Docker Pull

El comando `docker pull` descarga imágenes desde Docker Hub.

#### ¿Para qué sirve?

Permite copiar una imagen desde Internet a nuestro ordenador.

#### Ejemplo

```bash
docker pull nginx
```

Explicación:

- `docker pull` descarga una imagen.
- `nginx` es el nombre de la imagen.

Una vez descargada podremos utilizarla tantas veces como queramos.

---

### Ver imágenes con Docker Images

Docker almacena las imágenes descargadas localmente.

Para verlas utilizamos:

```bash
docker images
```

Explicación:

- `docker images` muestra todas las imágenes disponibles en nuestro ordenador.

La salida suele mostrar:

- Nombre.
- Versión.
- Identificador.
- Tamaño.

Ejemplo:

```text
REPOSITORY    TAG       IMAGE ID
nginx         latest    abc123
ubuntu        latest    def456
```

---

### Inmutabilidad

#### ¿Qué significa inmutable?

Inmutable significa que algo no se modifica una vez creado.

Las imágenes Docker son inmutables.

#### ¿Por qué es importante?

Si varias personas utilizan la misma imagen:

- Obtienen exactamente el mismo resultado.
- Se reducen errores.
- Se garantiza la consistencia.

#### Ejemplo sencillo

Imaginemos que una academia entrega un libro oficial a todos los alumnos.

Si nadie puede modificar el libro, todos estudiarán exactamente el mismo contenido.

Eso mismo ocurre con las imágenes Docker.

---

### Capas (Layers)

Las imágenes Docker están compuestas por capas.

Cada capa representa un cambio realizado durante la construcción de la imagen.

Por ejemplo:

```text
Capa 1 --> Ubuntu
Capa 2 --> Instalar Python
Capa 3 --> Copiar archivos
Capa 4 --> Configuración final
```

#### ¿Para qué sirven?

Permiten reutilizar trabajo previamente realizado.

#### Ventajas

- Construcciones más rápidas.
- Menor espacio en disco.
- Reutilización de información.

#### Ejemplo sencillo

Imaginemos la construcción de una casa.

- Los cimientos forman una capa.
- Las paredes forman otra capa.
- El tejado forma otra capa.
- La pintura forma otra capa.

Si decidimos cambiar únicamente la pintura no será necesario reconstruir toda la casa.

---

### Docker History

Permite visualizar las capas que forman una imagen.

#### Ejemplo

```bash
docker history nginx
```

Explicación:

- `docker history` muestra la historia de construcción.
- `nginx` es la imagen analizada.

Nos ayuda a entender cómo fue creada.

---

### Docker RMI

Permite eliminar imágenes.

#### Ejemplo

```bash
docker rmi nginx
```

Explicación:

- `docker rmi` elimina una imagen.
- `nginx` es la imagen que queremos borrar.

Se utiliza cuando ya no necesitamos una imagen.

---

### Docker Image Prune

Con el tiempo se acumulan imágenes innecesarias.

Docker permite eliminarlas automáticamente.

#### Ejemplo

```bash
docker image prune
```

Explicación:

- Elimina imágenes que ya no se utilizan.
- Libera espacio en disco.

---

### ¿Qué es un Dockerfile?

Un Dockerfile es un archivo de texto que contiene las instrucciones necesarias para crear una imagen.

#### ¿Para qué sirve?

Permite automatizar completamente la construcción de una imagen.

#### Analogía sencilla

Un Dockerfile es como una receta de cocina.

La receta explica cómo preparar un plato.

El Dockerfile explica cómo construir una imagen.

---

### Comando FROM

Define la imagen base.

#### Ejemplo

```dockerfile
FROM ubuntu:22.04
```

Explicación:

- `FROM` indica desde dónde comenzamos.
- En este caso utilizamos Ubuntu.

---

### Comando RUN

Ejecuta comandos durante la construcción de la imagen.

#### Ejemplo

```dockerfile
RUN apt-get update
```

Explicación:

- Ejecuta la actualización de paquetes.
- Se realiza mientras se construye la imagen.

---

### Comando COPY

Copia archivos desde nuestro equipo a la imagen.

#### Ejemplo

```dockerfile
COPY clientes.txt /datos/
```

Explicación:

- `clientes.txt` es el archivo origen.
- `/datos/` es el directorio destino.

---

### Comando WORKDIR

Define el directorio de trabajo.

#### Ejemplo

```dockerfile
WORKDIR /app
```

Explicación:

- Docker trabajará dentro de `/app`.
- Los comandos posteriores se ejecutarán desde ese directorio.

---

### Comando CMD

Indica el comando que se ejecutará cuando el contenedor arranque.

#### Ejemplo

```dockerfile
CMD ["echo","Hola mundo"]
```

Explicación:

- Ejecuta automáticamente el comando al iniciar el contenedor.
- Mostrará el texto "Hola mundo".

---

### Comando ENTRYPOINT

Define el programa principal del contenedor.

#### Ejemplo

```dockerfile
ENTRYPOINT ["python"]
```

Explicación:

- El contenedor actuará como un programa Python.
- Los argumentos adicionales se añadirán al comando principal.

---

### Construcción de imágenes con Docker Build

Una vez creado el Dockerfile debemos construir la imagen.

#### Ejemplo

```bash
docker build . -t biblioteca-app
```

Explicación:

- `docker build` inicia la construcción.
- `.` indica que el Dockerfile está en el directorio actual.
- `-t` asigna un nombre.
- `biblioteca-app` será el nombre de la imagen.

---

### Importancia del orden de las instrucciones

Docker intenta reutilizar capas construidas anteriormente.

Por este motivo el orden del Dockerfile es muy importante.

#### Mal ejemplo

```dockerfile
COPY . .

RUN apt-get update
RUN apt-get install -y python3
```

Problema:

Si cambia cualquier archivo de la aplicación, Docker deberá repetir gran parte del proceso.

#### Mejor ejemplo

```dockerfile
RUN apt-get update
RUN apt-get install -y python3

COPY . .
```

Ventaja:

Las capas que cambian poco se reutilizan, acelerando enormemente la construcción.

---

### Dev Containers

Un Dev Container es un entorno de desarrollo basado en contenedores.

#### ¿Para qué sirven?

Permiten que todos los miembros de un equipo trabajen exactamente con la misma configuración.

#### Ventajas

- Menos errores.
- Misma versión de herramientas.
- Configuración uniforme.
- Incorporación rápida de nuevos trabajadores.

#### Ejemplo

Supongamos una empresa con cinco empleados.

Sin Dev Containers:

- Cada ordenador puede tener configuraciones distintas.
- Las aplicaciones pueden comportarse de forma diferente.

Con Dev Containers:

- Todos trabajan con el mismo entorno.
- Los resultados son consistentes.

---

## Analogía del mundo real

Imaginemos una cadena de restaurantes.

La receta oficial representa la imagen Docker.

Cada restaurante construido utilizando esa receta representa un contenedor.

Las instrucciones de cocina representan el Dockerfile.

Las capas serían las distintas fases de preparación:

1. Preparar ingredientes.
2. Cocinar.
3. Decorar.
4. Servir.

La inmutabilidad significa que la receta oficial no se modifica.

Si se quiere mejorar, se publica una nueva versión de la receta.

Gracias a ello todos los restaurantes preparan exactamente el mismo plato.

---

## Ejemplos prácticos

### Ejemplo 1: Buscar una imagen

```bash
docker search mysql
```

Explicación:

- Busca imágenes relacionadas con MySQL.
- Permite localizar imágenes antes de descargarlas.

---

### Ejemplo 2: Descargar una imagen

```bash
docker pull ubuntu
```

Explicación:

- Descarga Ubuntu.
- La imagen queda almacenada localmente.

---

### Ejemplo 3: Ver imágenes disponibles

```bash
docker images
```

Explicación:

- Muestra todas las imágenes instaladas en nuestro ordenador.

---

### Ejemplo 4: Analizar capas

```bash
docker history ubuntu
```

Explicación:

- Permite ver cómo está construida la imagen.
- Muestra las distintas capas creadas.

---

### Ejemplo 5: Eliminar una imagen

```bash
docker rmi ubuntu
```

Explicación:

- Borra la imagen Ubuntu.
- Libera espacio en disco.

---

### Ejemplo 6: Limpiar imágenes sin utilizar

```bash
docker image prune
```

Explicación:

- Elimina imágenes innecesarias.
- Ayuda a mantener limpio el entorno Docker.

---

### Ejemplo 7: Crear una imagen personalizada

Dockerfile:

```dockerfile
FROM ubuntu:22.04

WORKDIR /app

COPY empleados.txt .

CMD ["cat","empleados.txt"]
```

Explicación línea por línea:

```dockerfile
FROM ubuntu:22.04
```

Utiliza Ubuntu como sistema base.

```dockerfile
WORKDIR /app
```

Establece el directorio de trabajo.

```dockerfile
COPY empleados.txt .
```

Copia el archivo al interior de la imagen.

```dockerfile
CMD ["cat","empleados.txt"]
```

Muestra el contenido del archivo cuando arranca el contenedor.

Construcción:

```bash
docker build . -t empleados-app
```

Explicación:

- Construye la imagen.
- Asigna el nombre `empleados-app`.

---

## Errores frecuentes

### Confundir imagen con contenedor

Error:

Pensar que son lo mismo.

Corrección:

- Imagen = plantilla.
- Contenedor = aplicación en ejecución.

---

### Descargar demasiadas imágenes

Error:

Acumular imágenes que ya no se utilizan.

Consecuencia:

- Se consume espacio en disco innecesariamente.

---

### No utilizar versiones específicas

Error:

Utilizar siempre `latest`.

Consecuencia:

- Posibles cambios inesperados entre versiones.

---

### Ignorar las capas

Error:

No tener en cuenta cómo Docker reutiliza las capas.

Consecuencia:

- Construcciones más lentas.

---

### Orden incorrecto en Dockerfile

Error:

Colocar instrucciones que cambian frecuentemente al principio.

Consecuencia:

- Docker reconstruye más capas de las necesarias.

---

### Modificar manualmente contenedores

Error:

Realizar cambios directamente dentro del contenedor.

Consecuencia:

- Los cambios pueden perderse al recrear el contenedor.

---

## Resumen

- Una imagen es una plantilla reutilizable.
- Un contenedor es una instancia en ejecución de una imagen.
- Docker Hub es el repositorio principal de imágenes.
- `docker search` permite buscar imágenes.
- `docker pull` descarga imágenes.
- `docker images` muestra las imágenes locales.
- Las imágenes Docker son inmutables.
- Las imágenes están formadas por capas.
- `docker history` muestra dichas capas.
- `docker rmi` elimina imágenes.
- `docker image prune` limpia imágenes no utilizadas.
- Un Dockerfile describe cómo crear una imagen.
- `FROM`, `RUN`, `COPY`, `WORKDIR`, `CMD` y `ENTRYPOINT` son instrucciones fundamentales.
- El orden de las instrucciones influye en el rendimiento.
- Los Dev Containers permiten entornos de trabajo consistentes y reproducibles.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Imagen | Plantilla que contiene una aplicación y sus dependencias |
| Contenedor | Instancia en ejecución creada a partir de una imagen |
| Docker Hub | Repositorio central de imágenes Docker |
| Inmutabilidad | Propiedad que impide modificar una imagen ya creada |
| Capa | Bloque reutilizable que forma una imagen |
| Dockerfile | Archivo que define cómo crear una imagen |
| FROM | Define la imagen base |
| RUN | Ejecuta comandos durante la construcción |
| COPY | Copia archivos a la imagen |
| WORKDIR | Define el directorio de trabajo |
| CMD | Define el comando por defecto |
| ENTRYPOINT | Define el programa principal del contenedor |
| Docker Build | Proceso de construcción de imágenes |
| Docker History | Muestra las capas de una imagen |
| Docker RMI | Elimina imágenes |
| Docker Image Prune | Elimina imágenes sin uso |
| Dev Container | Entorno de desarrollo basado en contenedores |

---

## Ejercicios de reflexión

1. ¿Cuál es la diferencia entre una imagen Docker y un contenedor?

2. ¿Qué ventajas aporta la inmutabilidad de las imágenes?

3. ¿Por qué las capas ayudan a acelerar la construcción de imágenes?

4. ¿Qué función cumple un Dockerfile dentro de Docker?

5. ¿Por qué es importante ordenar correctamente las instrucciones dentro de un Dockerfile?
