# Git y GitHub: Primeros pasos en el control de versiones y trabajo con repositorios

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué son Git y GitHub.
- Entender qué es un repositorio y para qué se utiliza.
- Diferenciar un repositorio local de un repositorio remoto.
- Comprender la diferencia entre Working Tree y Repositorio.
- Crear un repositorio Git desde cero.
- Crear una cuenta en GitHub y entender su utilidad.
- Conectar un repositorio local con un repositorio remoto.
- Comprender el flujo básico de trabajo en Git.
- Utilizar los comandos más importantes para guardar y sincronizar cambios.

---

## Introducción

Cuando trabajamos con documentos, es habitual guardar diferentes versiones de un mismo archivo:

- Informe_v1.docx
- Informe_v2.docx
- Informe_v3_final.docx
- Informe_v3_final_definitivo.docx

Con el tiempo resulta difícil saber cuál es la versión correcta.

Git es una herramienta que permite guardar el historial completo de los cambios realizados en nuestros archivos.

GitHub es una plataforma en Internet que permite almacenar nuestros proyectos y compartirlos con otras personas.

Podemos pensar en Git como una máquina del tiempo para nuestros archivos, y en GitHub como una nube donde almacenamos esos proyectos para mantenerlos seguros y poder colaborar con otros usuarios.

---

# Conceptos teóricos

## ¿Qué es Git?

Git es un sistema de control de versiones.

### ¿Para qué sirve?

Permite:

- Guardar versiones de un proyecto.
- Recuperar versiones anteriores.
- Saber qué cambios se han realizado.
- Trabajar de forma organizada.
- Compartir proyectos con otras personas.

### ¿Cuándo se utiliza?

Siempre que queramos llevar un control de los cambios de un conjunto de archivos.

### Ejemplo sencillo

Imagina que estás escribiendo un libro.

Cada vez que terminas un capítulo, haces una copia de seguridad.

Git automatiza este proceso y guarda un historial ordenado de todas esas versiones.

---

## ¿Qué es GitHub?

GitHub es una plataforma online que almacena repositorios Git.

### ¿Para qué sirve?

- Guardar proyectos en Internet.
- Realizar copias de seguridad.
- Compartir proyectos.
- Colaborar con otras personas.

### ¿Cuándo se utiliza?

Cuando queremos que nuestro proyecto exista también fuera de nuestro ordenador.

### Ejemplo sencillo

Si Git es una carpeta que tienes en casa, GitHub sería una copia de esa carpeta guardada en la nube.

---

## ¿Qué es un repositorio?

Un repositorio es una carpeta especial gestionada por Git.

Dentro de ella se almacenan:

- Los archivos del proyecto.
- El historial de cambios.
- La información necesaria para controlar versiones.

### ¿Para qué sirve?

Sirve para que Git pueda registrar y gestionar todas las modificaciones realizadas en el proyecto.

### Ejemplo sencillo

Imagina una carpeta donde guardas un trabajo de clase y además dispones de un registro que anota automáticamente cada modificación que realizas.

Esa carpeta sería un repositorio.

---

## Repositorio local

Un repositorio local es el que se encuentra en nuestro ordenador.

### ¿Para qué sirve?

Permite trabajar incluso sin conexión a Internet.

### Ejemplo

```
MiProyecto
```

La carpeta está almacenada únicamente en nuestro equipo.

---

## Repositorio remoto

Un repositorio remoto es una copia del proyecto almacenada en Internet.

Normalmente estará alojada en GitHub.

### ¿Para qué sirve?

- Tener copia de seguridad.
- Compartir el proyecto.
- Sincronizar el trabajo entre diferentes equipos.

### Ejemplo

El mismo proyecto guardado en GitHub.

---

## Diferencia entre Working Tree y Repositorio

Este es uno de los conceptos más importantes para comprender Git.

### Working Tree

Es la zona donde trabajamos y modificamos archivos.

Aquí escribimos, borramos o editamos documentos.

### Repositorio

Es la zona donde Git guarda versiones confirmadas del proyecto.

### Ejemplo

Supongamos que tienes un documento llamado:

```
informe.txt
```

Cuando editas el archivo:

- El cambio está en el Working Tree.
- Todavía no forma parte del historial.

Cuando realizas un commit:

- El cambio pasa al repositorio.
- Queda guardado como una versión oficial.

### Resumen visual

```
Working Tree
     ↓
 git add
     ↓
 git commit
     ↓
Repositorio Git
```

---

## Creación de un repositorio

Para que Git pueda controlar una carpeta debemos convertirla en repositorio.

Comando:

```bash
git init
```

### Explicación

- `git` ejecuta Git.
- `init` significa inicializar.

Después de ejecutarlo, Git comenzará a controlar esa carpeta.

---

## Creación de una cuenta en GitHub

Antes de utilizar GitHub necesitamos registrarnos.

Pasos generales:

1. Acceder a GitHub.
2. Pulsar en "Sign Up".
3. Introducir correo electrónico.
4. Crear usuario.
5. Crear contraseña.
6. Confirmar la cuenta.

Una vez creada podremos almacenar repositorios remotos.

---

## Sincronización entre repositorio local y remoto

La sincronización consiste en mantener actualizadas ambas copias del proyecto:

- La que está en nuestro ordenador.
- La que está en GitHub.

### Beneficios

- Copias de seguridad.
- Trabajo desde varios equipos.
- Compartir cambios.

---

## Comando git status

Permite comprobar el estado del repositorio.

```bash
git status
```

### ¿Para qué sirve?

Muestra:

- Archivos modificados.
- Archivos nuevos.
- Archivos preparados para guardar.
- Archivos pendientes de confirmar.

### Explicación

```bash
git status
```

- `git` ejecuta Git.
- `status` muestra la situación actual del proyecto.

---

## Comando git add

Añade cambios para prepararlos antes de guardarlos.

```bash
git add archivo.txt
```

### Explicación

```bash
git add archivo.txt
```

- `git` ejecuta Git.
- `add` prepara cambios.
- `archivo.txt` es el fichero que queremos incluir.

### Añadir todos los archivos

```bash
git add .
```

### Explicación

- El punto (`.`) significa "todo lo que hay en esta carpeta".

---

## Comando git commit -m

Guarda una versión en el historial.

```bash
git commit -m "Primer commit"
```

### Explicación

```bash
git commit -m "Primer commit"
```

- `git` ejecuta Git.
- `commit` crea una versión guardada.
- `-m` permite añadir un mensaje descriptivo.
- `"Primer commit"` explica qué se ha guardado.

### Ejemplo

```bash
git commit -m "Añadido documento de presentación"
```

Este mensaje ayudará a recordar qué cambios se realizaron.

---

## Comando git remote add origin

Conecta nuestro repositorio local con GitHub.

```bash
git remote add origin https://github.com/usuario/proyecto.git
```

### Explicación

```bash
git remote add origin https://github.com/usuario/proyecto.git
```

- `remote` gestiona repositorios remotos.
- `add` añade una conexión.
- `origin` es el nombre habitual de dicha conexión.
- La URL indica dónde está el repositorio en GitHub.

---

## Comando git push -u origin main

Envía cambios desde nuestro ordenador a GitHub.

```bash
git push -u origin main
```

### Explicación

```bash
git push -u origin main
```

- `push` envía cambios.
- `-u` establece una referencia para futuros envíos.
- `origin` es el repositorio remoto.
- `main` es la rama principal.

### Resultado

Los cambios aparecerán en GitHub.

---

## Comando git clone

Descarga un repositorio que ya existe en GitHub.

```bash
git clone https://github.com/usuario/proyecto.git
```

### Explicación

```bash
git clone https://github.com/usuario/proyecto.git
```

- `clone` crea una copia completa del proyecto.
- También descarga el historial de versiones.

### ¿Cuándo se utiliza?

Cuando queremos trabajar con un proyecto existente.

---

## Comando git pull origin master

Descarga los cambios más recientes del repositorio remoto.

```bash
git pull origin master
```

### Explicación

```bash
git pull origin master
```

- `pull` obtiene cambios remotos.
- `origin` es el repositorio remoto.
- `master` es la rama desde la que se descargan cambios.

### ¿Para qué sirve?

Para actualizar nuestro repositorio local con los cambios realizados en GitHub.

---

# Analogía del mundo real

Imagina que estás escribiendo un libro.

### Working Tree

Es el escritorio donde estás escribiendo y realizando cambios.

### Repositorio local

Es el archivador de tu casa donde guardas versiones del libro.

### Repositorio remoto

Es una caja fuerte externa donde guardas una copia de seguridad.

### git add

Es colocar las páginas terminadas en una bandeja para ser archivadas.

### git commit

Es guardar oficialmente una nueva versión del libro.

### git push

Es llevar una copia del libro a la caja fuerte.

### git pull

Es traer la última versión desde la caja fuerte.

### git clone

Es recibir una copia completa del libro y su historial.

---

# Ejemplos prácticos

## Ejemplo 1: Crear un repositorio

```bash
git init
```

Explicación:

- Crea un nuevo repositorio Git.
- Git comenzará a controlar la carpeta actual.

---

## Ejemplo 2: Comprobar el estado

```bash
git status
```

Explicación:

- Muestra qué archivos han cambiado.
- Indica qué debe guardarse.

---

## Ejemplo 3: Guardar cambios

Paso 1:

```bash
git add .
```

Explicación:

- Selecciona todos los cambios realizados.

Paso 2:

```bash
git commit -m "Creado documento principal"
```

Explicación:

- Guarda una nueva versión del proyecto.

---

## Ejemplo 4: Conectar con GitHub

```bash
git remote add origin https://github.com/usuario/proyecto.git
```

Explicación:

- Vincula el repositorio local con GitHub.

---

## Ejemplo 5: Enviar cambios a GitHub

```bash
git push -u origin main
```

Explicación:

- Envía el historial local al repositorio remoto.

---

## Ejemplo 6: Descargar un proyecto existente

```bash
git clone https://github.com/empresa/proyecto.git
```

Explicación:

- Descarga el proyecto completo.
- Descarga también todo su historial.

---

## Ejemplo 7: Actualizar el proyecto local

```bash
git pull origin master
```

Explicación:

- Obtiene los cambios más recientes.
- Actualiza los archivos locales.

---

# Errores frecuentes

## Olvidar ejecutar git add

Problema:

Se realiza un commit pero los cambios no se guardan.

Solución:

Ejecutar primero:

```bash
git add .
```

---

## No revisar el estado del repositorio

Problema:

No saber qué archivos han cambiado.

Solución:

Usar frecuentemente:

```bash
git status
```

---

## Escribir mensajes de commit poco descriptivos

Problema:

Después resulta difícil entender qué cambió.

Mal ejemplo:

```bash
git commit -m "Cambios"
```

Buen ejemplo:

```bash
git commit -m "Añadido formulario de contacto"
```

---

## Intentar hacer push sin conectar GitHub

Problema:

Git no sabe dónde enviar los cambios.

Solución:

Configurar el remoto:

```bash
git remote add origin URL_DEL_REPOSITORIO
```

---

## No hacer pull antes de trabajar

Problema:

Trabajar sobre una versión antigua.

Solución:

Actualizar primero:

```bash
git pull origin master
```

---

# Resumen

- Git permite controlar versiones de archivos.
- GitHub almacena repositorios en Internet.
- Un repositorio es una carpeta gestionada por Git.
- El repositorio local está en nuestro ordenador.
- El repositorio remoto suele estar en GitHub.
- El Working Tree contiene cambios aún no guardados en el historial.
- `git status` muestra el estado del proyecto.
- `git add` prepara cambios para guardarlos.
- `git commit` crea una versión en el historial.
- `git remote add origin` conecta Git con GitHub.
- `git push` envía cambios al repositorio remoto.
- `git clone` descarga un proyecto existente.
- `git pull` actualiza el repositorio local.

---

# Conceptos clave

| Concepto | Descripción |
|----------|-------------|
| Git | Sistema de control de versiones |
| GitHub | Plataforma online para alojar repositorios Git |
| Repositorio | Carpeta gestionada por Git |
| Repositorio local | Copia almacenada en el ordenador |
| Repositorio remoto | Copia almacenada en Internet |
| Working Tree | Zona de trabajo donde se modifican archivos |
| Commit | Versión guardada en el historial |
| git status | Muestra el estado actual del proyecto |
| git add | Prepara cambios para ser guardados |
| git commit | Guarda una nueva versión |
| origin | Nombre habitual del repositorio remoto |
| git push | Envía cambios al remoto |
| git pull | Descarga cambios del remoto |
| git clone | Crea una copia de un repositorio existente |

---

# Ejercicios de reflexión

1. ¿Cuál es la diferencia principal entre Git y GitHub?

2. ¿Qué ventajas ofrece tener un repositorio remoto además de uno local?

3. ¿Qué ocurre si modificas un archivo pero no ejecutas `git add` antes de hacer un commit?

4. ¿Para qué sirve el comando `git clone` y cuándo lo utilizarías?

5. Explica con tus propias palabras la diferencia entre Working Tree y Repositorio.
