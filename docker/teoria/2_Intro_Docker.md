# 2. Introducción a Docker: Contenedores, Imágenes y Ciclo de Vida

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es Docker y por qué se utiliza.
- Entender qué es un contenedor y qué ventajas aporta.
- Diferenciar una máquina virtual de un contenedor.
- Conocer el estándar OCI y su importancia.
- Identificar los principales casos de uso de Docker.
- Entender qué son Docker Desktop y Docker Engine.
- Comprender el ciclo de vida de un contenedor.
- Diferenciar una imagen de un contenedor.
- Entender la función de un Dockerfile.
- Utilizar los comandos básicos `docker build` y `docker run`.
- Conocer Docker Hub como repositorio de imágenes.

---

## Introducción

Cuando instalamos una aplicación en nuestro ordenador normalmente necesitamos instalar también otros componentes para que funcione correctamente. En ocasiones una aplicación funciona en un equipo pero falla en otro porque faltan archivos, librerías o configuraciones.

Docker nació para solucionar este problema.

Docker permite empaquetar una aplicación junto con todo lo que necesita para funcionar. De esta forma podemos ejecutar la aplicación en cualquier ordenador que tenga Docker instalado y obtener siempre el mismo resultado.

Gracias a Docker, los desarrolladores pueden crear aplicaciones de forma más rápida, más segura y más sencilla de transportar entre distintos entornos.

Antes de aprender comandos o configuraciones es importante entender una idea fundamental:

> Docker no es una herramienta para programadores expertos. Es una herramienta para empaquetar aplicaciones de forma que funcionen siempre igual, independientemente del lugar donde se ejecuten.

---

## Conceptos teóricos

### ¿Qué es Docker?

Docker es una plataforma que permite crear, distribuir y ejecutar aplicaciones dentro de contenedores.

Su objetivo principal es garantizar que una aplicación funcione igual independientemente del ordenador o servidor donde se ejecute.

### ¿Para qué sirve?

Docker sirve para:

- Ejecutar aplicaciones de forma aislada.
- Evitar problemas de compatibilidad.
- Simplificar instalaciones.
- Facilitar las pruebas.
- Desplegar aplicaciones en servidores y en la nube.
- Compartir aplicaciones fácilmente.

### ¿Cuándo se utiliza?

Docker se utiliza en:

- Desarrollo de software.
- Entornos de pruebas.
- Automatización de despliegues.
- Aplicaciones en la nube.
- Arquitecturas modernas de microservicios.

---

### ¿Qué es un contenedor?

Un contenedor es un entorno aislado donde se ejecuta una aplicación junto con todos los elementos que necesita para funcionar.

Un contenedor contiene:

- La aplicación.
- Las dependencias.
- La configuración.
- Los archivos necesarios para su ejecución.

### ¿Para qué sirve un contenedor?

Permite que una aplicación funcione exactamente igual en:

- El ordenador del desarrollador.
- El ordenador de un compañero.
- Un servidor de producción.
- La nube.

### Características principales

- Es ligero.
- Es rápido.
- Está aislado.
- Puede crearse y eliminarse fácilmente.
- Es portable.

### Ejemplo sencillo

Imaginemos una aplicación para gestionar una biblioteca.

La aplicación necesita:

- El programa principal.
- Varias librerías.
- Archivos de configuración.

Docker permite empaquetarlo todo dentro del mismo contenedor.

---

### Aplicación + Dependencias + Aislamiento

Esta es la idea más importante de Docker.

#### Aplicación

Es el programa que queremos ejecutar.

Ejemplos:

- Gestión de clientes.
- Control de empleados.
- Gestión de productos.
- Sistema de préstamos de una biblioteca.

#### Dependencias

Son los componentes adicionales que necesita una aplicación para funcionar.

Por ejemplo:

- Librerías.
- Archivos de configuración.
- Herramientas del sistema.

#### Aislamiento

Significa que cada aplicación funciona dentro de su propio entorno.

Si tenemos dos aplicaciones:

- Aplicación de clientes.
- Aplicación de pedidos.

Cada una puede trabajar de forma independiente sin afectar a la otra.

---

### Hypervisor versus Container Engine

Antes de Docker era muy habitual utilizar máquinas virtuales.

### ¿Qué es una máquina virtual?

Una máquina virtual es un ordenador completo simulado mediante software.

Cada máquina virtual contiene:

- Sistema operativo propio.
- Aplicaciones.
- Configuración.
- Recursos asignados.

El software que gestiona las máquinas virtuales se llama **Hypervisor**.

### Problemas de las máquinas virtuales

- Consumen bastante memoria.
- Ocupan mucho espacio.
- Tardan más en arrancar.
- Requieren más recursos.

---

### ¿Qué es un Container Engine?

Un Container Engine es el software encargado de ejecutar contenedores.

Docker Engine es uno de los motores de contenedores más conocidos.

### Ventajas respecto a las máquinas virtuales

- Menor consumo de memoria.
- Menor uso de disco.
- Arranque muy rápido.
- Mayor eficiencia.

### Comparación

| Característica | Máquina Virtual | Contenedor |
|---------------|----------------|------------|
| Sistema operativo completo | Sí | No |
| Consumo de recursos | Alto | Bajo |
| Velocidad de inicio | Lenta | Muy rápida |
| Tamaño | Grande | Pequeño |
| Portabilidad | Media | Muy alta |

---

### OCI (Open Container Initiative)

#### ¿Qué es OCI?

OCI significa **Open Container Initiative**.

Es una organización que define estándares abiertos para los contenedores.

#### ¿Para qué sirve?

Permite que distintas herramientas y plataformas trabajen siguiendo las mismas reglas.

#### ¿Por qué es importante?

Gracias a OCI:

- Existe compatibilidad entre plataformas.
- Los contenedores siguen normas comunes.
- Se facilita el intercambio de imágenes.

#### Ejemplo cotidiano

Es parecido al formato PDF.

Si cada fabricante tuviera su propio formato de documento sería muy difícil compartir archivos.

OCI permite que todos hablen el mismo idioma.

---

### Casos de uso de Docker

#### Testing

Testing significa realizar pruebas.

Docker permite crear entornos temporales para probar aplicaciones.

Ejemplo:

- Crear entorno.
- Ejecutar pruebas.
- Eliminar entorno.

Todo en pocos minutos.

---

#### CI/CD

CI significa Integración Continua.

CD significa Entrega Continua.

Son procesos automáticos que permiten:

1. Recibir cambios.
2. Ejecutar pruebas.
3. Construir aplicaciones.
4. Publicarlas automáticamente.

Docker hace que estos procesos sean reproducibles y fiables.

---

#### Microservicios

Un microservicio es una pequeña aplicación centrada en una única tarea.

Ejemplo de una tienda online:

- Servicio de clientes.
- Servicio de productos.
- Servicio de pedidos.
- Servicio de facturación.

Cada uno puede ejecutarse dentro de su propio contenedor.

---

#### Cloud

Cloud significa nube.

Docker facilita mover aplicaciones entre:

- Ordenadores personales.
- Servidores.
- Azure.
- AWS.
- Google Cloud.

---

#### Escalabilidad

Escalar significa aumentar la capacidad de una aplicación.

Si una tienda online recibe miles de visitas, podemos crear más contenedores para repartir el trabajo.

---

#### Desarrollo multiplataforma

Docker permite ejecutar la misma aplicación en:

- Windows.
- Linux.
- macOS.

Sin modificar la aplicación.

---

### Docker Desktop y Docker Engine

#### Docker Engine

Es el componente responsable de:

- Crear contenedores.
- Ejecutar contenedores.
- Gestionar imágenes.
- Gestionar redes.

Podemos considerarlo el motor principal de Docker.

---

#### Docker Desktop

Es una aplicación gráfica diseñada para facilitar el trabajo con Docker.

Incluye:

- Docker Engine.
- Interfaz gráfica.
- Herramientas de administración.
- Utilidades para desarrolladores.

Para usuarios principiantes suele ser la mejor opción para comenzar.

---

### ¿Qué es una imagen Docker?

Una imagen es una plantilla utilizada para crear contenedores.

No está ejecutándose.

Simplemente contiene todo lo necesario para que posteriormente se cree un contenedor.

### ¿Qué contiene una imagen?

Una imagen suele estar formada por:

- Aplicación.
- Librerías de terceros.
- Librerías del sistema.
- Paquetes del sistema operativo.
- Configuración.

### Importante

La imagen es la plantilla.

El contenedor es la ejecución de esa plantilla.

---

### Contenedor = Instancia de una imagen

Una imagen puede crear muchos contenedores.

#### Ejemplo

Piensa en una receta de cocina.

La receta es la imagen.

Cada plato preparado utilizando esa receta es un contenedor.

Una única receta puede generar muchos platos.

Una única imagen puede generar muchos contenedores.

---

### El contenedor es un proceso

Internamente un contenedor no deja de ser un proceso ejecutándose.

Un proceso es un programa que está funcionando en un momento determinado.

Ejemplos de procesos:

- Navegador web.
- Calculadora.
- Editor de texto.

Docker ejecuta procesos de forma aislada para evitar conflictos.

---

### Ciclo de vida de un contenedor

Un contenedor pasa por varias etapas.

#### 1. Creación

Se crea a partir de una imagen.

#### 2. Ejecución

La aplicación comienza a funcionar.

#### 3. Pausa (opcional)

Puede suspenderse temporalmente.

#### 4. Detención

La aplicación deja de ejecutarse.

#### 5. Eliminación

El contenedor desaparece.

### Representación visual

```text
Imagen
   ↓
Crear
   ↓
Ejecutar
   ↓
Pausar (Opcional)
   ↓
Detener
   ↓
Eliminar
```

---

### Dockerfile

#### ¿Qué es?

Un Dockerfile es un archivo de texto que contiene instrucciones para construir una imagen Docker.

#### ¿Para qué sirve?

Permite automatizar la creación de imágenes.

Así todas las personas obtienen exactamente el mismo resultado.

---

### Instrucción FROM

Define la imagen base.

```dockerfile
FROM ubuntu
```

Explicación:

- `FROM` indica el punto de partida.
- `ubuntu` es la imagen base que utilizaremos.

---

### Instrucción RUN

Ejecuta comandos durante la construcción de la imagen.

```dockerfile
RUN apt update
```

Explicación:

- `RUN` ejecuta una orden.
- `apt update` actualiza la información de paquetes.

---

### Instrucción COPY

Copia archivos del ordenador a la imagen.

```dockerfile
COPY clientes.txt /datos/
```

Explicación:

- `COPY` copia archivos.
- `clientes.txt` es el archivo origen.
- `/datos/` es la carpeta destino.

---

### Instrucción CMD

Define el comando que se ejecutará al arrancar el contenedor.

```dockerfile
CMD ["python", "app.py"]
```

Explicación:

- `CMD` define la acción inicial.
- Cuando el contenedor arranque ejecutará `app.py`.

---

### Ejemplo completo de Dockerfile

```dockerfile
FROM ubuntu

COPY clientes.txt /datos/

CMD ["cat", "/datos/clientes.txt"]
```

Explicación línea por línea:

**FROM ubuntu**

Utiliza Ubuntu como sistema base.

**COPY clientes.txt /datos/**

Copia el archivo de clientes dentro de la imagen.

**CMD ["cat", "/datos/clientes.txt"]**

Al iniciar el contenedor se mostrará el contenido del archivo.

---

### Docker Hub

#### ¿Qué es?

Docker Hub es un repositorio online donde se almacenan imágenes Docker.

Podemos compararlo con una biblioteca digital.

#### ¿Qué permite hacer?

- Descargar imágenes.
- Compartir imágenes.
- Publicar imágenes propias.
- Reutilizar trabajo ya realizado.

#### Ejemplos populares

- Ubuntu.
- Nginx.
- Redis.
- MySQL.
- PostgreSQL.

---

### Docker Build

#### ¿Qué hace?

Construye una imagen a partir de un Dockerfile.

#### Ejemplo

```bash
docker build -t biblioteca .
```

Explicación:

- `docker build` construye la imagen.
- `-t biblioteca` asigna el nombre biblioteca.
- `.` indica la carpeta actual donde se encuentra el Dockerfile.

---

### Docker Run

#### ¿Qué hace?

Crea un contenedor y lo ejecuta.

#### Ejemplo

```bash
docker run biblioteca
```

Explicación:

- `docker run` crea el contenedor.
- `biblioteca` es la imagen utilizada para crearlo.

---

## Analogía del mundo real

Imaginemos una franquicia de restaurantes.

### Dockerfile

Es la receta oficial.

Contiene las instrucciones para preparar un plato.

### Imagen

Es la receta ya preparada y documentada.

Todo lo necesario está definido.

### Contenedor

Es el plato servido al cliente.

### Docker Engine

Es el cocinero que sigue la receta.

### Docker Hub

Es la biblioteca donde se guardan las recetas.

### Resultado

Todos los restaurantes sirven exactamente el mismo plato porque utilizan la misma receta.

Ese es precisamente el objetivo de Docker: que una aplicación funcione siempre igual.

---

## Ejemplos prácticos

### Ejemplo 1: Ejecutar Ubuntu

```bash
docker run ubuntu
```

Explicación:

- Docker busca la imagen Ubuntu.
- Si no existe en el equipo la descarga.
- Crea un contenedor.
- Lo ejecuta.

---

### Ejemplo 2: Construir una imagen sencilla

Dockerfile:

```dockerfile
FROM ubuntu

CMD ["echo", "Hola Biblioteca"]
```

Explicación:

**FROM ubuntu**

Utiliza Ubuntu como base.

**CMD ["echo", "Hola Biblioteca"]**

Cuando arranque el contenedor mostrará el mensaje.

Construcción:

```bash
docker build -t biblioteca .
```

Explicación:

- Se genera una imagen llamada biblioteca.

Ejecución:

```bash
docker run biblioteca
```

Resultado esperado:

```text
Hola Biblioteca
```

---

### Ejemplo 3: Gestión de clientes

Dockerfile:

```dockerfile
FROM ubuntu

COPY clientes.txt /datos/

CMD ["cat", "/datos/clientes.txt"]
```

Explicación:

**FROM ubuntu**

Selecciona Ubuntu como base.

**COPY clientes.txt /datos/**

Copia el listado de clientes.

**CMD ["cat", "/datos/clientes.txt"]**

Muestra el contenido del archivo.

Supongamos que clientes.txt contiene:

```text
Ana
Luis
Carlos
Marta
```

Al ejecutar el contenedor se mostrarán esos datos.

---

### Ejemplo 4: Gestión de productos

Archivo productos.txt:

```text
Portátil
Teclado
Ratón
Monitor
```

Dockerfile:

```dockerfile
FROM ubuntu

COPY productos.txt /datos/

CMD ["cat", "/datos/productos.txt"]
```

Explicación:

- Se copia la lista de productos.
- Al iniciar el contenedor se muestran los productos almacenados.

---

## Errores frecuentes

### Confundir imagen y contenedor

Error:

Pensar que son exactamente lo mismo.

Corrección:

- Imagen = plantilla.
- Contenedor = instancia en ejecución.

---

### Pensar que un contenedor es una máquina virtual

Error:

Creer que incluye un sistema operativo completo.

Corrección:

Un contenedor comparte parte del sistema operativo anfitrión.

---

### Olvidar construir la imagen

Error:

Ejecutar una imagen que aún no existe.

Incorrecto:

```bash
docker run miaplicacion
```

Sin haber creado previamente la imagen.

Correcto:

```bash
docker build -t miaplicacion .
docker run miaplicacion
```

---

### Modificar un contenedor y esperar que cambie la imagen

Error:

Pensar que los cambios realizados dentro del contenedor actualizan automáticamente la imagen.

Corrección:

La imagen y el contenedor son elementos diferentes.

---

### Eliminar un contenedor pensando que se elimina la imagen

Error:

Creer que todo desaparece.

Corrección:

La imagen sigue existiendo y puede volver a utilizarse.

---

## Resumen

- Docker permite empaquetar aplicaciones en contenedores.
- Un contenedor contiene aplicación, dependencias y configuración.
- Los contenedores son ligeros y rápidos.
- Docker utiliza imágenes como plantillas.
- Un contenedor es una instancia de una imagen.
- Docker Engine ejecuta los contenedores.
- Docker Desktop facilita el trabajo mediante una interfaz gráfica.
- OCI define estándares para mejorar la compatibilidad.
- Docker Hub permite compartir imágenes.
- Dockerfile describe cómo construir una imagen.
- `docker build` crea imágenes.
- `docker run` crea y ejecuta contenedores.
- Docker es una herramienta fundamental en cloud, DevOps y microservicios.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Docker | Plataforma para crear y ejecutar contenedores |
| Contenedor | Entorno aislado donde se ejecuta una aplicación |
| Imagen | Plantilla utilizada para crear contenedores |
| Dockerfile | Archivo con instrucciones para construir imágenes |
| Docker Engine | Motor responsable de ejecutar contenedores |
| Docker Desktop | Herramienta gráfica para administrar Docker |
| Hypervisor | Software que administra máquinas virtuales |
| OCI | Estándar abierto para la compatibilidad de contenedores |
| Docker Hub | Repositorio online de imágenes Docker |
| Build | Proceso de construcción de una imagen |
| Run | Proceso de creación y ejecución de un contenedor |
| Dependencias | Componentes necesarios para ejecutar una aplicación |
| Aislamiento | Separación entre aplicaciones y entorno |
| Microservicio | Aplicación pequeña dedicada a una función concreta |
| Escalabilidad | Capacidad para aumentar recursos según demanda |
| Cloud | Infraestructura informática accesible a través de Internet |

---

## Ejercicios de reflexión

1. Explica con tus propias palabras qué problema intenta resolver Docker.

2. ¿Cuál es la diferencia entre una imagen y un contenedor?

3. ¿Por qué los contenedores suelen consumir menos recursos que las máquinas virtuales?

4. ¿Qué ventajas aporta Docker Hub a una empresa que desarrolla aplicaciones?

5. Si una aplicación debe ejecutarse en Windows, Linux y macOS, ¿cómo puede ayudar Docker a simplificar esta tarea?

6. En la analogía del restaurante, ¿qué elemento representa el Dockerfile y qué elemento representa el contenedor?

7. ¿Por qué es importante que exista un estándar como OCI para los contenedores?
