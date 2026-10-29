# Introducción a Docker y Kubernetes

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es Docker y para qué sirve.
- Entender qué es un contenedor y por qué se utiliza.
- Diferenciar una máquina virtual de un contenedor.
- Comprender la importancia de la gestión de ambientes.
- Identificar las ventajas del despliegue mediante contenedores.
- Entender el concepto de microservicio.
- Conocer los componentes principales de Docker.
- Comprender el flujo de trabajo habitual de Docker.
- Entender qué es Docker Compose y cuándo utilizarlo.
- Conocer los conceptos básicos de redes y volúmenes en Docker.
- Comprender qué es Kubernetes y por qué se utiliza.
- Identificar los componentes principales de un clúster de Kubernetes.

---

## Introducción

Cuando utilizamos una aplicación, normalmente no pensamos en todo lo que hay detrás para que funcione correctamente. Una aplicación necesita programas, configuraciones, librerías, conexiones de red y muchos otros elementos.

Uno de los problemas más habituales en informática es que una aplicación funciona en un ordenador pero no funciona en otro. Seguramente has escuchado alguna vez la frase:

> "En mi equipo funciona perfectamente."

Docker nació para solucionar este problema.

Docker permite empaquetar una aplicación junto con todo lo que necesita para funcionar. Ese paquete se denomina **contenedor**.

Kubernetes apareció después para resolver otro problema: gestionar muchos contenedores de forma automática cuando una empresa tiene decenas, cientos o miles de ellos funcionando al mismo tiempo.

En esta sesión veremos ambos conceptos desde cero, utilizando ejemplos sencillos y comparaciones con situaciones cotidianas.

---

## Conceptos teóricos

### ¿Qué es un contenedor?

Un **contenedor** es una unidad que incluye:

- Una aplicación.
- Sus dependencias.
- Sus librerías.
- Su configuración.
- Todo lo necesario para funcionar.

Su principal objetivo es garantizar que la aplicación funcione igual independientemente del ordenador o servidor donde se ejecute.

#### ¿Para qué sirve?

Sirve para:

- Evitar problemas de compatibilidad.
- Simplificar instalaciones.
- Facilitar despliegues.
- Conseguir que todos los entornos sean iguales.

#### ¿Cuándo se utiliza?

Cuando necesitamos:

- Mover aplicaciones entre equipos.
- Ejecutar aplicaciones en servidores.
- Desplegar software rápidamente.
- Mantener aplicaciones aisladas.

#### Ejemplo sencillo

Imaginemos una aplicación para gestionar una biblioteca.

En lugar de instalar manualmente todos los programas necesarios en cada servidor, guardamos la aplicación completa dentro de un contenedor.

Ese mismo contenedor funcionará igual en:

- El ordenador del desarrollador.
- El servidor de pruebas.
- Un servidor en la nube.

---

### Gestión de ambientes

#### ¿Qué es un ambiente?

Un ambiente es el entorno donde se ejecuta una aplicación.

Los más utilizados son:

| Ambiente | Finalidad |
|-----------|-----------|
| Desarrollo | Crear la aplicación |
| Pruebas | Validar que funciona |
| Producción | Utilización por usuarios reales |

#### Problema habitual

Muchas veces una aplicación funciona en desarrollo pero falla en producción.

Esto suele ocurrir porque:

- Existen versiones distintas.
- Faltan dependencias.
- La configuración no es la misma.

Docker ayuda a evitar estos problemas porque el mismo contenedor se utiliza en todos los ambientes.

---

### Facilidad de despliegue

#### ¿Qué es un despliegue?

Un despliegue consiste en poner una aplicación en funcionamiento para que otras personas puedan utilizarla.

#### Sin Docker

Normalmente sería necesario:

- Instalar programas.
- Configurar librerías.
- Resolver dependencias.
- Ajustar configuraciones.

#### Con Docker

Simplemente:

1. Descargamos la imagen.
2. Creamos el contenedor.
3. Ejecutamos la aplicación.

Esto reduce tiempo, errores y complejidad.

---

### Máquinas Virtuales (VM) y Contenedores

#### ¿Qué es una Máquina Virtual?

Una Máquina Virtual o VM es un ordenador completo que funciona dentro de otro ordenador.

Cada máquina virtual tiene:

- Sistema operativo propio.
- Memoria reservada.
- Espacio en disco.
- Procesador virtual.

#### ¿Qué es un contenedor?

Un contenedor comparte parte del sistema operativo del equipo anfitrión.

Gracias a ello consume muchos menos recursos.

---

### Comparación entre VM y Contenedores

| Característica | Máquina Virtual | Contenedor |
|----------------|----------------|------------|
| Tamaño | Grande | Pequeño |
| Tiempo de arranque | Lento | Muy rápido |
| Consumo de memoria | Alto | Bajo |
| Sistema operativo propio | Sí | No |
| Facilidad de transporte | Buena | Excelente |
| Número de instancias posibles | Menor | Mayor |

---

### Ventajas de los Contenedores

- Menor consumo de recursos.
- Arranque más rápido.
- Fácil despliegue.
- Fácil escalabilidad.
- Portabilidad entre entornos.

### Inconvenientes de los Contenedores

- Menor aislamiento que las máquinas virtuales.
- Requieren herramientas de gestión cuando el número crece mucho.

---

### Microservicios

#### ¿Qué es un microservicio?

Un microservicio es una aplicación pequeña que realiza una única función específica.

En lugar de crear una aplicación enorme con todas las funcionalidades juntas, se divide en varias aplicaciones pequeñas.

#### Ejemplo: Tienda Online

Podemos dividir una tienda online en distintos servicios:

- Servicio de clientes.
- Servicio de productos.
- Servicio de pedidos.
- Servicio de pagos.
- Servicio de facturación.

Cada uno realiza una tarea concreta.

---

#### ¿Por qué utilizar microservicios?

Porque permiten:

- Actualizar partes concretas de la aplicación.
- Corregir errores fácilmente.
- Escalar únicamente lo necesario.
- Facilitar el mantenimiento.

---

#### Relación entre Microservicios y Contenedores

Lo habitual es que cada microservicio se ejecute dentro de un contenedor.

| Microservicio | Contenedor |
|--------------|------------|
| Clientes | Contenedor 1 |
| Productos | Contenedor 2 |
| Pedidos | Contenedor 3 |
| Facturación | Contenedor 4 |

---

## Docker

### ¿Qué es Docker?

Docker es una plataforma que permite crear, distribuir y ejecutar contenedores.

Es la herramienta más utilizada del mundo para trabajar con contenedores.

Su principal ventaja es que permite que una aplicación funcione exactamente igual independientemente del lugar donde se ejecute.

---

### Arquitectura de Docker

Docker se compone de varios elementos principales.

#### Cliente Docker

Es la herramienta que utiliza el usuario para enviar órdenes.

Ejemplo:

```bash
docker run nginx
```

**Explicación**

```bash
docker run
```

Solicita ejecutar un contenedor.

```bash
nginx
```

Indica la imagen que se desea utilizar.

---

#### Demonio Docker

También llamado **Docker Daemon**.

Es el servicio que realiza realmente el trabajo.

Se encarga de:

- Crear imágenes.
- Crear contenedores.
- Gestionar redes.
- Gestionar volúmenes.
- Descargar imágenes.

---

### Docker Image (Imagen Docker)

#### ¿Qué es?

Una imagen es una plantilla que contiene todo lo necesario para crear contenedores.

#### Analogía

Puede compararse con una receta de cocina.

La receta indica qué ingredientes utilizar y cómo prepararlos.

---

### Docker Container (Contenedor Docker)

#### ¿Qué es?

Es una instancia en ejecución creada a partir de una imagen.

#### Analogía

Si la imagen es la receta:

El contenedor es el plato ya preparado.

---

### Dockerfile

#### ¿Qué es?

Es un archivo de texto que describe cómo crear una imagen Docker.

---

### Ejemplo de Dockerfile

```dockerfile
FROM nginx
COPY pagina.html /usr/share/nginx/html
```

**Explicación línea por línea**

```dockerfile
FROM nginx
```

Indica que utilizaremos una imagen base llamada nginx.

```dockerfile
COPY pagina.html /usr/share/nginx/html
```

Copia nuestro archivo dentro de la imagen.

---

### Flujo de trabajo Docker

#### Build

Construye una imagen Docker.

```bash
docker build -t biblioteca-web .
```

**Explicación**

```bash
docker build
```

Construye la imagen.

```bash
-t biblioteca-web
```

Asigna un nombre.

```bash
.
```

Utiliza el directorio actual.

---

#### Tag

Asigna una etiqueta o versión.

```bash
docker tag biblioteca-web empresa/biblioteca-web:v1
```

**Explicación**

La imagen queda preparada para ser publicada con la versión v1.

---

#### Push

Sube una imagen a un registro.

```bash
docker push empresa/biblioteca-web:v1
```

**Explicación**

Envía la imagen al repositorio remoto.

---

#### Pull

Descarga una imagen.

```bash
docker pull empresa/biblioteca-web:v1
```

**Explicación**

Obtiene la imagen almacenada en el registro.

---

#### Run

Ejecuta un contenedor.

```bash
docker run empresa/biblioteca-web:v1
```

**Explicación**

Crea y arranca un nuevo contenedor basado en la imagen indicada.

---

### Registro Docker

#### ¿Qué es?

Es un repositorio donde se almacenan imágenes Docker.

#### Analogía

Puede compararse con una biblioteca.

Las imágenes serían los libros almacenados.

---

### Docker Hub

Docker Hub es el registro público más popular.

Permite:

- Compartir imágenes.
- Descargar imágenes.
- Publicar nuevas versiones.
- Reutilizar imágenes de otros desarrolladores.

---

## Docker Compose

### ¿Qué es Docker Compose?

Docker Compose permite ejecutar varios contenedores utilizando un único archivo de configuración.

Es especialmente útil cuando una aplicación necesita varios servicios trabajando juntos.

---

### Ejemplo de uso

Una aplicación de gestión de pedidos podría necesitar:

- Aplicación web.
- Base de datos.
- Servicio de correo electrónico.

Docker Compose puede arrancarlos todos simultáneamente.

---

### YAML

#### ¿Qué es YAML?

YAML es un formato de texto utilizado para definir configuraciones.

Se caracteriza por utilizar indentación para organizar la información.

---

### Ejemplo básico YAML

```yaml
version: '3'

services:
  web:
    image: nginx
```

**Explicación línea por línea**

```yaml
version: '3'
```

Versión utilizada por Docker Compose.

```yaml
services:
```

Sección donde se definen los servicios.

```yaml
web:
```

Nombre del servicio.

```yaml
image: nginx
```

Imagen que utilizará dicho servicio.

---

## Multi-Stage Build

### ¿Qué es?

Es una técnica avanzada que permite construir imágenes mediante varias fases.

Se utiliza para obtener imágenes más pequeñas, rápidas y seguras.

### Ventajas

- Menos tamaño.
- Menos dependencias innecesarias.
- Mejor rendimiento.
- Mayor seguridad.

---

## Redes Virtuales

### ¿Qué son?

Permiten que dos o más contenedores puedan comunicarse entre sí.

### Ejemplo práctico

Supongamos:

- Contenedor de clientes.
- Contenedor de pedidos.

Ambos necesitan intercambiar información.

La red virtual les permite comunicarse como si estuvieran conectados por una red privada.

---

## Volúmenes

### ¿Qué son?

Los volúmenes son espacios de almacenamiento permanentes utilizados por los contenedores.

### ¿Para qué sirven?

Sirven para conservar información incluso cuando el contenedor desaparece.

---

### Ejemplo práctico

Sistema de biblioteca:

- Libros.
- Socios.
- Préstamos.

Toda esta información debe conservarse aunque el contenedor sea eliminado o reemplazado.

Los volúmenes permiten mantener estos datos.

---

## Kubernetes

### ¿Qué es Kubernetes?

Kubernetes es una plataforma que permite administrar grandes cantidades de contenedores automáticamente.

Mientras Docker crea y ejecuta contenedores, Kubernetes se encarga de organizarlos y gestionarlos.

---

### Arquitectura de Microservicios

Una arquitectura de microservicios está formada por múltiples aplicaciones pequeñas colaborando entre sí.

Cada una suele ejecutarse dentro de uno o varios contenedores.

Kubernetes facilita la gestión de todos esos contenedores.

---

### Orquestador de Contenedores

#### ¿Qué significa orquestar?

Orquestar significa coordinar.

Kubernetes coordina automáticamente:

- Creación de contenedores.
- Eliminación.
- Reinicio.
- Escalado.
- Supervisión.

---

### Cluster

#### ¿Qué es un Cluster?

Es un conjunto de servidores que trabajan juntos como si fueran un único sistema.

---

### Control Plane

Es el cerebro de Kubernetes.

Se encarga de:

- Tomar decisiones.
- Asignar recursos.
- Supervisar el estado del sistema.

---

### Master Node

Es el nodo donde se ejecuta el Control Plane.

Gestiona el funcionamiento completo del clúster.

---

### Worker Node

Son los servidores que ejecutan realmente los contenedores.

Puede existir:

- Un único Worker.
- Decenas de Workers.
- Centenares de Workers.

---

### Pod

#### ¿Qué es un Pod?

Es la unidad mínima de ejecución dentro de Kubernetes.

Normalmente contiene uno o varios contenedores que trabajan conjuntamente.

---

### Ejemplo de Pod

Pod de pedidos:

- Contenedor principal de la aplicación.
- Contenedor auxiliar de monitorización.

Ambos pertenecen al mismo Pod.

---

### Containers en Kubernetes

Los contenedores utilizados dentro de Kubernetes son los mismos contenedores Docker que hemos visto anteriormente.

La diferencia es que Kubernetes se encarga de administrarlos de forma automática.

---

## Analogía del mundo real

Imaginemos una empresa de transporte y logística.

### Docker

Docker sería una fábrica que prepara cajas perfectamente organizadas.

Cada caja contiene todas las herramientas necesarias para realizar un trabajo.

---

### Imagen

La receta utilizada para fabricar cada caja.

---

### Contenedor

La caja ya construida y lista para usarse.

---

### Docker Hub

El almacén central donde se guardan todas las cajas.

---

### Kubernetes

El responsable logístico que coordina todas las cajas.

Si llegan muchos pedidos:

- Solicita más cajas.
- Distribuye la carga de trabajo.
- Sustituye cajas defectuosas.
- Garantiza que el servicio continúe funcionando.

---

## Ejemplos prácticos

### Ejemplo 1: Ejecutar una página web sencilla

```bash
docker run nginx
```

**Explicación línea por línea**

```bash
docker run
```

Solicita ejecutar un contenedor.

```bash
nginx
```

Indica la imagen utilizada.

**Resultado**

Se inicia un servidor web básico.

---

### Ejemplo 2: Crear un servicio de productos con Docker Compose

```yaml
services:
  productos:
    image: nginx
```

**Explicación línea por línea**

```yaml
services:
```

Lista de servicios.

```yaml
productos:
```

Nombre del servicio.

```yaml
image: nginx
```

Imagen utilizada.

---

### Ejemplo 3: Sistema de biblioteca basado en microservicios

Supongamos tres microservicios:

1. Gestión de usuarios.
2. Gestión de libros.
3. Gestión de préstamos.

Cada uno se ejecuta en un contenedor distinto.

**Ventajas**

- Actualizaciones independientes.
- Mayor facilidad de mantenimiento.
- Mejor escalabilidad.
- Aislamiento de errores.

---

### Ejemplo 4: Tienda Online

Contenedores:

| Contenedor | Función |
|------------|----------|
| clientes | Gestiona usuarios |
| productos | Gestiona catálogo |
| pedidos | Gestiona compras |
| facturación | Genera facturas |

Si aumenta el número de pedidos, podemos crear más contenedores del servicio de pedidos sin modificar el resto.

---

## Errores frecuentes

### Confundir una imagen con un contenedor

Error:

Pensar que son exactamente lo mismo.

Corrección:

- Imagen = plantilla.
- Contenedor = instancia en ejecución.

---

### Pensar que Docker guarda los datos automáticamente

Error:

Creer que los datos sobreviven siempre.

Corrección:

Utilizar volúmenes para almacenar información importante.

---

### Colocar toda la aplicación en un único contenedor

Error:

Diseñar aplicaciones gigantes dentro de un solo contenedor.

Corrección:

Dividir la aplicación en servicios independientes.

---

### Confundir Docker con Kubernetes

Error:

Pensar que ambos productos realizan exactamente la misma tarea.

Corrección:

- Docker crea contenedores.
- Kubernetes administra muchos contenedores.

---

### Ignorar las redes

Error:

Olvidar que los contenedores deben comunicarse entre sí.

Corrección:

Configurar adecuadamente las redes virtuales.

---

### Eliminar contenedores sin comprender el impacto

Error:

Borrar contenedores pensando que los datos permanecerán disponibles.

Corrección:

Utilizar volúmenes persistentes.

---

## Resumen

- Docker permite crear y ejecutar contenedores.
- Un contenedor contiene una aplicación y todo lo necesario para ejecutarla.
- Docker ayuda a mantener consistencia entre ambientes.
- Los contenedores consumen menos recursos que las máquinas virtuales.
- Los microservicios dividen una aplicación grande en aplicaciones pequeñas especializadas.
- Una imagen es una plantilla para crear contenedores.
- Un Dockerfile define cómo construir una imagen.
- Docker Compose permite ejecutar múltiples servicios simultáneamente.
- YAML es un formato de configuración ampliamente utilizado.
- Las redes virtuales permiten la comunicación entre contenedores.
- Los volúmenes permiten conservar datos.
- Docker Hub almacena imágenes Docker.
- Kubernetes administra contenedores a gran escala.
- Un clúster está formado por varios nodos.
- El Control Plane coordina el funcionamiento del clúster.
- Los Pods son la unidad básica de ejecución en Kubernetes.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Docker | Plataforma para crear y ejecutar contenedores |
| Contenedor | Unidad que incluye una aplicación y sus dependencias |
| Imagen | Plantilla utilizada para crear contenedores |
| Dockerfile | Archivo que define cómo construir una imagen |
| Docker Daemon | Servicio que ejecuta las operaciones de Docker |
| Docker Client | Herramienta utilizada por el usuario para enviar órdenes |
| Docker Hub | Repositorio público de imágenes Docker |
| Registro Docker | Almacén de imágenes Docker |
| Docker Compose | Herramienta para ejecutar varios contenedores juntos |
| YAML | Formato de configuración basado en texto e indentación |
| Volumen | Almacenamiento persistente para datos |
| Red Virtual | Mecanismo de comunicación entre contenedores |
| Microservicio | Aplicación especializada en una función concreta |
| Kubernetes | Plataforma para administrar contenedores |
| Cluster | Conjunto de servidores trabajando conjuntamente |
| Control Plane | Componente que coordina Kubernetes |
| Master Node | Nodo que ejecuta el Control Plane |
| Worker Node | Nodo que ejecuta los contenedores |
| Pod | Unidad básica de ejecución de Kubernetes |
| Container Runtime | Software responsable de ejecutar contenedores |

---

## Ejercicios de reflexión

1. ¿Qué problema intenta resolver Docker respecto a la instalación y ejecución de aplicaciones?

2. Explica con tus palabras la diferencia entre una imagen Docker y un contenedor Docker.

3. ¿Qué ventajas ofrecen los contenedores frente a las máquinas virtuales?

4. Imagina una aplicación formada por clientes, productos y pedidos. ¿Por qué podría ser recomendable separarla en microservicios?

5. ¿Qué ocurriría con la información almacenada por una aplicación si eliminamos un contenedor que no utiliza volúmenes?

6. ¿Cuál es la diferencia principal entre Docker y Kubernetes?

7. ¿Qué función desempeña un Pod dentro de Kubernetes?

8. ¿Por qué una empresa con cientos de contenedores podría necesitar Kubernetes para gestionarlos?
