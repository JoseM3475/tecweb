# Introducción a Git y GitHub: Control de Versiones y Trabajo Colaborativo

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es Git y para qué sirve.
- Entender el concepto de Sistema de Control de Versiones (VCS).
- Conocer el vocabulario básico utilizado en Git.
- Comprender cómo se almacenan y gestionan los cambios de un proyecto.
- Entender el flujo de trabajo habitual en Git.
- Aprender el propósito de las ramas principales de un proyecto.
- Conocer el papel de GitHub y los repositorios remotos.
- Familiarizarte con los comandos básicos de Git.

---

## Introducción

Cuando trabajamos en un documento importante solemos guardar varias versiones:

```text
Trabajo.docx
Trabajo_Final.docx
Trabajo_Final_Bueno.docx
Trabajo_Final_Definitivo.docx
Trabajo_Final_Definitivo_AhoraSi.docx
```

Este método funciona al principio, pero rápidamente se vuelve difícil saber cuál es la versión correcta.

En proyectos de software ocurre exactamente el mismo problema, pero multiplicado por decenas o cientos de archivos y varios desarrolladores trabajando al mismo tiempo.

Para resolver este problema se utilizan los sistemas de control de versiones.

Git es la herramienta más utilizada en el mundo para gestionar versiones, controlar cambios y permitir que varias personas colaboren en un mismo proyecto sin perder trabajo.

---

# Conceptos teóricos

## ¿Qué es Git?

### ¿Qué es?

Git es un sistema de control de versiones.

Un sistema de control de versiones permite registrar los cambios realizados en un conjunto de archivos a lo largo del tiempo.

### ¿Para qué sirve?

Git permite:

- Guardar versiones de un proyecto.
- Recuperar versiones anteriores.
- Saber quién realizó cada cambio.
- Trabajar en equipo.
- Evitar pérdidas de información.
- Probar cambios sin afectar al trabajo principal.

### ¿Cuándo se utiliza?

Se utiliza en:

- Desarrollo de software.
- Proyectos web.
- Documentación técnica.
- Configuraciones de servidores.
- Cualquier proyecto donde sea importante mantener un historial de cambios.

---

## ¿Qué es un Sistema de Control de Versiones (VCS)?

### ¿Qué es?

VCS significa Version Control System o Sistema de Control de Versiones.

Es una herramienta que registra la historia completa de un proyecto.

### ¿Para qué sirve?

Permite responder preguntas como:

- ¿Quién realizó un cambio?
- ¿Cuándo se realizó?
- ¿Qué se modificó?
- ¿Cómo era el proyecto hace una semana?

### Ejemplo

Imagina que estás escribiendo un libro.

Cada vez que terminas un capítulo haces una copia de seguridad.

Un VCS automatiza todo este proceso y guarda cada versión de forma organizada.

---

## Vocabulario básico de Git

### Repositorio

#### ¿Qué es?

Un repositorio es el lugar donde Git almacena el proyecto y todo su historial.

#### ¿Para qué sirve?

Contiene:

- Archivos.
- Carpetas.
- Historial de cambios.
- Ramas del proyecto.

#### Ejemplo

Podemos imaginarlo como una carpeta inteligente que recuerda todo lo que ha ocurrido dentro de ella.

---

### Commit

#### ¿Qué es?

Un commit es una fotografía del proyecto en un momento determinado.

#### ¿Para qué sirve?

Permite guardar una versión estable del trabajo realizado.

#### Ejemplo

Si terminas una funcionalidad importante puedes crear un commit para conservar ese estado.

---

### Working Tree

#### ¿Qué es?

Es la zona donde trabajamos normalmente.

Aquí modificamos archivos, creamos carpetas y realizamos cambios.

#### Ejemplo

Es similar a una mesa de trabajo donde estamos construyendo algo.

---

### Stage Area

#### ¿Qué es?

Es una zona intermedia donde seleccionamos qué cambios queremos guardar.

#### ¿Para qué sirve?

Permite decidir exactamente qué modificaciones formarán parte del siguiente commit.

#### Ejemplo

Podemos compararla con una bandeja donde colocamos los documentos antes de archivarlos.

---

### Branch o Rama

#### ¿Qué es?

Una rama es una línea independiente de trabajo.

#### ¿Para qué sirve?

Permite desarrollar cambios sin afectar a la versión principal del proyecto.

#### Ejemplo

Podemos probar nuevas ideas en una rama sin romper el proyecto principal.

---

### Merge o Fusión

#### ¿Qué es?

Es el proceso de unir los cambios de una rama con otra.

#### ¿Para qué sirve?

Permite incorporar mejoras desarrolladas de forma independiente.

#### Ejemplo

Después de terminar una funcionalidad en una rama, se puede fusionar con la rama principal.

---

### Clone

#### ¿Qué es?

Clonar significa descargar una copia completa de un repositorio.

#### ¿Para qué sirve?

Permite comenzar a trabajar en un proyecto existente.

#### Ejemplo

Un nuevo desarrollador puede clonar un proyecto para obtener todos los archivos e historial.

---

### Fork

#### ¿Qué es?

Un fork es una copia de un repositorio que se crea en nuestra propia cuenta.

#### ¿Para qué sirve?

Permite realizar modificaciones sin afectar al proyecto original.

#### Ejemplo

Es habitual en proyectos de código abierto.

---

## Características principales de Git

### Git es distribuido

Cada usuario posee una copia completa del repositorio.

Esto significa que no depende constantemente de un servidor central.

### Cada desarrollador tiene un backup

Al tener una copia completa, cada equipo contiene una copia de seguridad del proyecto.

Si un servidor falla, es posible recuperar la información desde otro equipo.

### Soporte para Branch y Merge

Git permite crear ramas fácilmente y fusionarlas posteriormente.

Esto facilita enormemente el trabajo en equipo.

### Integridad de los datos

Git verifica los cambios almacenados para asegurar que no han sido alterados accidentalmente.

Esto proporciona confianza y seguridad sobre la información almacenada.

---

## Flujo de trabajo en Git

### Paso 1. Inicializar un repositorio

Cuando queremos comenzar a utilizar Git en una carpeta debemos crear un repositorio.

```bash
git init
```

Explicación:

- `git` ejecuta la herramienta Git.
- `init` inicializa un nuevo repositorio.
- A partir de ese momento Git comienza a controlar los cambios.

---

### Paso 2. Working Tree

Creamos o modificamos archivos.

```text
clientes.txt
productos.txt
pedidos.txt
```

Estos cambios existen únicamente en nuestra zona de trabajo.

---

### Paso 3. Añadir cambios al Stage Area

```bash
git add clientes.txt
```

Explicación:

- `git` ejecuta Git.
- `add` indica que queremos preparar cambios.
- `clientes.txt` es el archivo que pasará al área de preparación.

Ahora Git sabe que queremos incluir este archivo en el próximo commit.

---

### Paso 4. Realizar un Commit

```bash
git commit -m "Añadido listado de clientes"
```

Explicación:

- `git` ejecuta Git.
- `commit` crea una nueva versión.
- `-m` permite escribir un mensaje descriptivo.
- El texto indica qué cambio estamos guardando.

Git almacena una nueva fotografía del proyecto.

---

### Paso 5. Crear una Rama

```bash
git branch nueva-funcionalidad
```

Explicación:

- `branch` crea una nueva rama.
- `nueva-funcionalidad` es el nombre de la rama.

Esta rama permite trabajar sin modificar la versión principal.

---

### Paso 6. Fusionar una Rama

```bash
git merge nueva-funcionalidad
```

Explicación:

- `merge` combina los cambios de dos ramas.
- Los cambios desarrollados en la rama secundaria se incorporan a la rama actual.

---

## Ramas Main y Dev

### Rama Main

La rama **main** suele contener la versión estable del proyecto.

Debe representar la versión más fiable y preparada para ser utilizada.

### Rama Dev

La rama **dev** suele utilizarse para realizar desarrollos y pruebas.

Aquí se integran nuevas funcionalidades antes de pasar a la rama principal.

### Flujo habitual

```text
main
  |
  +---- dev
           |
           +---- nueva-funcionalidad
```

Proceso:

1. Se desarrolla una funcionalidad en una rama específica.
2. Se fusiona con dev.
3. Tras las pruebas, se fusiona con main.

---

## Herramientas: Línea de Comandos

### ¿Qué es la línea de comandos?

Es una herramienta que permite comunicarnos con el ordenador escribiendo instrucciones de texto.

Git se utiliza habitualmente desde la línea de comandos.

### Algunos comandos básicos

Ver estado del repositorio:

```bash
git status
```

Explicación:

- Muestra los archivos modificados.
- Indica qué cambios están preparados para commit.
- Ayuda a conocer la situación actual del repositorio.

---

Mostrar historial:

```bash
git log
```

Explicación:

- Muestra los commits realizados.
- Permite consultar el historial del proyecto.

---

Mostrar ramas:

```bash
git branch
```

Explicación:

- Lista las ramas existentes.
- Indica la rama activa actualmente.

---

## Repositorios en la nube y Origin

### ¿Qué es un repositorio remoto?

Es una copia del repositorio almacenada en Internet.

### ¿Para qué sirve?

Permite:

- Compartir proyectos.
- Colaborar con otras personas.
- Mantener copias de seguridad.
- Trabajar desde varios equipos.

### ¿Qué es Origin?

Origin es el nombre que Git asigna normalmente al repositorio remoto principal.

### Ejemplo

```text
Mi ordenador  <------>  GitHub (Origin)
```

Los cambios pueden enviarse al repositorio remoto y descargarse nuevamente cuando sea necesario.

---

## GitHub

### ¿Qué es GitHub?

GitHub es una plataforma en la nube que permite almacenar repositorios Git.

### ¿Para qué sirve?

Permite:

- Compartir código.
- Colaborar con otros desarrolladores.
- Gestionar proyectos.
- Almacenar repositorios remotos.

### Relación entre Git y GitHub

Git es la herramienta de control de versiones.

GitHub es uno de los servicios donde podemos almacenar repositorios Git.

Una analogía sencilla sería:

- Git = el vehículo.
- GitHub = el aparcamiento donde guardamos el vehículo.

---

## Analogía del mundo real

Imaginemos que varias personas están escribiendo conjuntamente un libro.

- El libro completo es el repositorio.
- Cada capítulo nuevo es un conjunto de cambios.
- Guardar una versión del libro es un commit.
- La mesa donde escriben es el Working Tree.
- La bandeja antes de archivar es el Stage Area.
- Un autor puede escribir una versión alternativa en una rama.
- Cuando la versión es aprobada se fusiona mediante un merge.
- Una copia almacenada en una caja fuerte sería el repositorio remoto en GitHub.

Git permite controlar todo este proceso de forma organizada y segura.

---

## Ejemplos prácticos

### Ejemplo 1. Crear un repositorio

```bash
git init
```

Explicación línea por línea:

- `git` inicia la herramienta Git.
- `init` crea un repositorio en la carpeta actual.

Resultado:

Git comienza a controlar los cambios realizados.

---

### Ejemplo 2. Agregar un archivo

```bash
git add clientes.txt
```

Explicación línea por línea:

- `git` ejecuta Git.
- `add` mueve cambios al Stage Area.
- `clientes.txt` es el archivo seleccionado.

Resultado:

El archivo queda preparado para el siguiente commit.

---

### Ejemplo 3. Crear una versión

```bash
git commit -m "Añadidos nuevos clientes"
```

Explicación línea por línea:

- `git` ejecuta Git.
- `commit` crea una nueva versión.
- `-m` permite añadir un mensaje.
- El texto describe el cambio realizado.

Resultado:

Se guarda una nueva fotografía del proyecto.

---

### Ejemplo 4. Consultar el estado

```bash
git status
```

Explicación línea por línea:

- `git` ejecuta Git.
- `status` muestra el estado actual del repositorio.

Resultado:

Podemos ver qué archivos están modificados o preparados para commit.

---

## Errores frecuentes

### Confundir Git con GitHub

Git es la herramienta.

GitHub es una plataforma donde almacenar repositorios Git.

---

### Pensar que Git guarda automáticamente los cambios

Git solo guarda cambios cuando realizamos un commit.

---

### Olvidar usar git add antes del commit

Si un archivo no está en el Stage Area, no formará parte del commit.

---

### Trabajar directamente sobre main

Lo recomendable es utilizar ramas para desarrollar nuevas funcionalidades.

---

### No escribir mensajes descriptivos en los commits

Mensajes como:

```text
cambio
```

aportan poca información.

Es mejor utilizar:

```text
Añadido formulario de clientes
```

---

## Resumen

- Git es un sistema de control de versiones.
- Un VCS permite gestionar el historial de cambios de un proyecto.
- Un repositorio almacena archivos e historial.
- Un commit representa una fotografía del proyecto.
- El Working Tree es la zona donde trabajamos.
- El Stage Area permite seleccionar cambios antes de guardarlos.
- Las ramas permiten trabajar de forma independiente.
- Los merge permiten unir cambios de distintas ramas.
- Git es distribuido.
- Cada desarrollador posee una copia completa del proyecto.
- Git garantiza la integridad de los datos.
- GitHub permite almacenar repositorios en la nube.
- Origin suele ser el repositorio remoto principal.
- Main suele contener la versión estable.
- Dev suele utilizarse para desarrollo y pruebas.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Git | Sistema de control de versiones |
| VCS | Herramienta para gestionar versiones de un proyecto |
| Repositorio | Lugar donde Git guarda archivos e historial |
| Commit | Fotografía del proyecto en un momento determinado |
| Working Tree | Zona donde se realizan los cambios |
| Stage Area | Área donde se preparan cambios antes del commit |
| Branch | Rama independiente de trabajo |
| Merge | Unión de cambios de diferentes ramas |
| Clone | Copia completa de un repositorio |
| Fork | Copia independiente de un repositorio |
| Main | Rama principal y estable |
| Dev | Rama destinada al desarrollo |
| GitHub | Plataforma para almacenar repositorios Git |
| Origin | Nombre habitual del repositorio remoto principal |
| Git Init | Comando para crear un repositorio |
| Git Add | Comando para preparar cambios |
| Git Commit | Comando para guardar una versión |
| Git Status | Comando para consultar el estado |
| Git Branch | Comando para gestionar ramas |
| Git Log | Comando para consultar el historial |

---

## Ejercicios de reflexión

1. ¿Por qué es más útil utilizar Git que guardar archivos con nombres como "Proyecto_Final_Definitivo_v7.docx"?
2. ¿Qué diferencia existe entre el Working Tree y el Stage Area?
3. ¿Por qué es recomendable trabajar en ramas en lugar de modificar directamente la rama main?
4. ¿Cuál es la diferencia entre Git y GitHub?
5. ¿Qué ocurriría si modificas varios archivos pero olvidas ejecutar `git add` antes de realizar el commit?
