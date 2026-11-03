# 5. Imágenes, Variables, Volúmenes y Publicación de Imágenes en Docker

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender cómo compartir y reutilizar imágenes Docker.
- Entender la diferencia entre `CMD` y `ENTRYPOINT`.
- Conocer el uso de variables de entorno.
- Comprender qué es la instrucción `ARG`.
- Crear nuevas imágenes mediante `docker commit`.
- Exportar e importar imágenes usando `docker save` y `docker load`.
- Etiquetar imágenes mediante `docker tag`.
- Publicar imágenes en Docker Hub utilizando `docker push`.
- Comprender el problema de la pérdida de datos en los contenedores.
- Entender qué son los volúmenes Docker.
- Utilizar volúmenes para conservar información.
- Copiar archivos entre el equipo y un contenedor mediante `docker cp`.
- Gestionar volúmenes desde Docker Desktop.

---

## Introducción

Hasta ahora hemos aprendido que Docker permite ejecutar aplicaciones dentro de contenedores.

Sin embargo, aparece una pregunta muy importante:

**¿Qué ocurre con los datos cuando un contenedor desaparece?**

Imaginemos una aplicación de gestión de clientes.

Si almacenamos los datos únicamente dentro del contenedor y este se elimina, también desaparecerán los clientes registrados.

Para resolver este problema Docker dispone de mecanismos para guardar la información de forma permanente mediante los **volúmenes**.

Además, en esta sesión aprenderemos cómo:

- Crear nuevas imágenes.
- Compartir imágenes con otros usuarios.
- Configurar aplicaciones mediante variables.
- Exportar e importar imágenes.
- Publicar nuestras imágenes en Docker Hub.

Todo ello utilizando ejemplos sencillos y fáciles de comprender.

---

## Conceptos teóricos

### ¿Qué son las variables de entorno?

Antes de aprender cómo configurar aplicaciones debemos entender qué es una variable.

Una variable es un dato guardado con un nombre.

Por ejemplo:

```text
Nombre = José
Ciudad = Madrid
```

Las aplicaciones suelen necesitar información para funcionar:

- Nombre de la empresa.
- Dirección de una base de datos.
- Idioma.
- Puerto de red.

Las variables de entorno permiten proporcionar esa información sin modificar la aplicación.

---

### ¿Para qué sirven las variables de entorno?

Sirven para personalizar el comportamiento de una aplicación.

Por ejemplo:

- Cambiar el idioma.
- Configurar usuarios.
- Configurar contraseñas.
- Definir rutas.

---

### ¿Cuándo se utilizan?

Se utilizan cuando queremos que una misma imagen pueda funcionar en entornos diferentes.

Por ejemplo:

- Desarrollo.
- Pruebas.
- Producción.

---

### Ejemplo sencillo

```bash
docker run -e EMPRESA=BibliotecaCentral nginx
```

Explicación:

- `docker run` inicia un contenedor.
- `-e` indica una variable de entorno.
- `EMPRESA=BibliotecaCentral` establece el valor de la variable.
- `nginx` es la imagen utilizada.

---

### ¿Qué es ARG?

ARG significa "Argumento de construcción".

Se utiliza durante el proceso de creación de una imagen.

Permite personalizar algunos valores mientras Docker está construyendo la imagen.

---

### ¿Para qué sirve ARG?

Sirve para:

- Elegir versiones.
- Configurar parámetros temporales.
- Reutilizar Dockerfiles.

---

### Ejemplo sencillo

Dockerfile:

```dockerfile
ARG VERSION=1.0
```

Explicación:

- Se crea una variable llamada VERSION.
- Su valor por defecto será 1.0.

---

### Diferencia entre ARG y variables de entorno

Aunque parecen similares, tienen objetivos diferentes.

| Característica | ARG | Variable de Entorno |
|---------------|------|---------------------|
| Se usa durante la construcción | Sí | No |
| Disponible cuando el contenedor arranca | No | Sí |
| Configura la imagen | Sí | No |
| Configura la aplicación en ejecución | No | Sí |

---

### ¿Qué es CMD?

CMD define el comando por defecto que se ejecutará cuando el contenedor se inicie.

---

### ¿Para qué sirve?

Permite indicar la acción principal que realizará el contenedor.

---

### Ejemplo

```dockerfile
CMD ["echo","Hola"]
```

Explicación:

- Cuando el contenedor arranque mostrará el mensaje "Hola".

---

### ¿Qué es ENTRYPOINT?

ENTRYPOINT define el programa principal del contenedor.

Mientras que CMD establece una acción por defecto, ENTRYPOINT establece la aplicación principal que siempre se ejecutará.

---

### Ejemplo

```dockerfile
ENTRYPOINT ["python"]
```

Explicación:

- El contenedor actuará como si siempre ejecutara Python.

---

### Diferencia entre CMD y ENTRYPOINT

#### CMD

Puede sustituirse fácilmente al arrancar el contenedor.

```text
CMD = Acción por defecto
```

#### ENTRYPOINT

Define el programa principal.

```text
ENTRYPOINT = Programa principal
```

---

### Analogía sencilla

Imaginemos un coche.

CMD sería la ruta recomendada por el navegador.

Podemos cambiarla.

ENTRYPOINT sería el motor del coche.

No podemos sustituirlo fácilmente porque es la parte principal del vehículo.

---

### Docker Commit

Normalmente las imágenes se crean mediante Dockerfile.

Sin embargo Docker también permite crear imágenes a partir de un contenedor ya existente.

Para ello se utiliza `docker commit`.

---

### ¿Para qué sirve?

Permite guardar el estado actual de un contenedor como una nueva imagen.

---

### Ejemplo

```bash
docker commit mi-contenedor mi-imagen
```

Explicación:

- `docker commit` crea una imagen.
- `mi-contenedor` es el contenedor original.
- `mi-imagen` será la nueva imagen.

---

### ¿Cuándo se utiliza?

Se utiliza principalmente para pruebas o laboratorios.

En entornos profesionales suele preferirse Dockerfile porque es más reproducible.

---

### Docker Save

Permite exportar una imagen a un archivo.

---

### ¿Para qué sirve?

Permite:

- Realizar copias de seguridad.
- Mover imágenes entre equipos.
- Compartir imágenes sin Internet.

---

### Ejemplo

```bash
docker save -o biblioteca.tar biblioteca-app
```

Explicación:

- `docker save` exporta una imagen.
- `-o` indica el archivo de salida.
- `biblioteca.tar` será el archivo creado.
- `biblioteca-app` es la imagen exportada.

---

### Docker Load

Permite importar una imagen previamente exportada.

---

### Ejemplo

```bash
docker load -i biblioteca.tar
```

Explicación:

- `docker load` importa una imagen.
- `-i` indica el archivo de entrada.
- `biblioteca.tar` contiene la imagen.

---

### Docker Tag

Una imagen puede tener diferentes nombres o versiones.

Para ello se utilizan etiquetas.

---

### ¿Para qué sirve?

Permite:

- Asignar versiones.
- Preparar imágenes para Docker Hub.
- Organizar imágenes.

---

### Ejemplo

```bash
docker tag biblioteca-app usuario/biblioteca-app:v1
```

Explicación:

- `docker tag` crea una nueva etiqueta.
- `usuario` es el propietario.
- `biblioteca-app` es el nombre de la imagen.
- `v1` representa la versión.

---

### Docker Push

Permite publicar imágenes en Docker Hub.

---

### ¿Para qué sirve?

Sirve para compartir imágenes con otras personas.

---

### Ejemplo

```bash
docker push usuario/biblioteca-app:v1
```

Explicación:

- Docker envía la imagen al repositorio remoto.
- Otros usuarios podrán descargarla posteriormente.

---

### El problema de la persistencia de datos

Los contenedores están pensados para ser temporales.

Cuando un contenedor desaparece:

- Sus archivos internos pueden desaparecer.
- Sus configuraciones pueden desaparecer.
- Sus datos pueden perderse.

Por ello necesitamos una solución para guardar información importante.

---

### ¿Qué es un volumen?

Un volumen es un espacio de almacenamiento gestionado por Docker que existe independientemente de los contenedores.

---

### ¿Para qué sirve?

Sirve para conservar información aunque el contenedor sea eliminado.

---

### Ejemplo cotidiano

Imaginemos una oficina.

El contenedor sería el empleado.

El volumen sería el archivador donde se guardan los documentos.

Aunque el empleado cambie, los documentos permanecen en el archivador.

---

### Docker Volume

Permite administrar volúmenes.

---

### Crear un volumen

```bash
docker volume create datos-clientes
```

Explicación:

- `docker volume create` crea un volumen.
- `datos-clientes` es el nombre asignado.

---

### Mostrar volúmenes

```bash
docker volume ls
```

Explicación:

- Lista todos los volúmenes existentes.

---

### Uso de volúmenes en un contenedor

```bash
docker run -v datos-clientes:/datos nginx
```

Explicación:

- `-v` conecta el volumen.
- `datos-clientes` es el volumen.
- `/datos` es la carpeta utilizada dentro del contenedor.

---

### ¿Qué es Docker CP?

Docker permite copiar archivos entre el equipo local y un contenedor.

---

### ¿Para qué sirve?

Es útil para:

- Recuperar archivos.
- Copiar configuraciones.
- Transferir datos rápidamente.

---

### Ejemplo

```bash
docker cp clientes.txt mi-contenedor:/datos
```

Explicación:

- `docker cp` copia archivos.
- `clientes.txt` es el archivo local.
- `mi-contenedor:/datos` es el destino.

---

### Uso de volúmenes en Docker Desktop

Docker Desktop ofrece una interfaz gráfica para gestionar Docker.

---

### ¿Qué permite hacer?

Permite:

- Ver volúmenes.
- Identificar qué espacio ocupan.
- Eliminar volúmenes innecesarios.
- Revisar información almacenada.

---

### ¿Cuándo es útil?

Especialmente para usuarios principiantes que prefieren una interfaz visual frente a la línea de comandos.

---

## Analogía del mundo real

Imaginemos una biblioteca.

- La imagen Docker es el plano oficial de la biblioteca.
- El contenedor es el edificio ya construido.
- Las variables de entorno son los carteles que indican horarios y normas.
- Docker Hub es una red de bibliotecas donde se comparten planos.
- Docker Push es enviar nuestros planos a esa red.
- Docker Pull sería descargarlos.
- Los volúmenes son los archivadores donde se almacenan los libros.

Si la biblioteca cierra temporalmente (contenedor eliminado), los libros permanecen guardados en los archivadores (volúmenes).

De esta forma los datos no se pierden.

---

## Ejemplos prácticos

### Ejemplo 1: Crear un volumen para pedidos

```bash
docker volume create pedidos
```

Explicación línea por línea:

- `docker volume create` crea un volumen.
- `pedidos` será el nombre utilizado para almacenar información.

---

### Ejemplo 2: Usar el volumen desde un contenedor

```bash
docker run -v pedidos:/datos nginx
```

Explicación línea por línea:

- `docker run` inicia un contenedor.
- `-v pedidos:/datos` conecta el volumen.
- `nginx` es la imagen utilizada.

---

### Ejemplo 3: Exportar una imagen

```bash
docker save -o clientes.tar clientes-app
```

Explicación línea por línea:

- `docker save` exporta la imagen.
- `-o clientes.tar` indica el archivo generado.
- `clientes-app` es la imagen exportada.

---

### Ejemplo 4: Importar una imagen

```bash
docker load -i clientes.tar
```

Explicación línea por línea:

- `docker load` importa una imagen.
- `clientes.tar` contiene la imagen previamente exportada.

---

### Ejemplo 5: Publicar una imagen

```bash
docker tag clientes-app usuario/clientes-app:v1

docker push usuario/clientes-app:v1
```

Explicación línea por línea:

- `docker tag` asigna un nombre preparado para Docker Hub.
- `usuario/clientes-app:v1` identifica propietario y versión.
- `docker push` publica la imagen.
- Otros usuarios podrán descargarla.

---

## Errores frecuentes

### Confundir ARG y variables de entorno

Error:

Pensar que ambas opciones sirven para lo mismo.

Corrección:

- ARG se utiliza durante la construcción.
- Las variables de entorno se utilizan durante la ejecución.

---

### Utilizar un contenedor para guardar datos importantes

Error:

Guardar información únicamente dentro del contenedor.

Consecuencia:

Los datos pueden perderse al eliminar el contenedor.

---

### No utilizar volúmenes

Error:

No crear almacenamiento persistente.

Consecuencia:

Pérdida de información importante.

---

### Confundir CMD con ENTRYPOINT

Error:

Pensar que ambas instrucciones tienen exactamente la misma función.

Corrección:

- CMD define una acción por defecto.
- ENTRYPOINT define el programa principal.

---

### Intentar publicar imágenes sin etiquetarlas

Error:

Ejecutar directamente `docker push`.

Consecuencia:

Docker Hub puede no reconocer correctamente la imagen o su versión.

---

## Resumen

- Las variables de entorno permiten configurar aplicaciones sin modificar la imagen.
- ARG se utiliza durante la construcción de imágenes.
- CMD define el comando por defecto.
- ENTRYPOINT define el programa principal.
- Docker Commit crea imágenes a partir de contenedores existentes.
- Docker Save exporta imágenes a archivos.
- Docker Load importa imágenes desde archivos.
- Docker Tag asigna nombres y versiones a las imágenes.
- Docker Push publica imágenes en Docker Hub.
- Los volúmenes permiten conservar datos de forma permanente.
- Docker Volume permite administrar volúmenes.
- Docker CP copia archivos entre contenedores y equipos locales.
- Docker Desktop permite gestionar volúmenes mediante una interfaz gráfica.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Variable de entorno | Dato que configura una aplicación durante su ejecución |
| ARG | Parámetro usado durante la construcción de la imagen |
| CMD | Comando por defecto del contenedor |
| ENTRYPOINT | Programa principal del contenedor |
| Docker Commit | Crea una imagen a partir de un contenedor existente |
| Docker Save | Exporta una imagen a un archivo |
| Docker Load | Importa una imagen desde un archivo |
| Docker Tag | Asigna nombre y versión a una imagen |
| Docker Push | Publica una imagen en Docker Hub |
| Persistencia | Conservación de datos a largo plazo |
| Volumen | Almacenamiento independiente del contenedor |
| Docker Volume | Herramientas para administrar volúmenes |
| Docker CP | Copia archivos entre host y contenedor |
| Docker Desktop | Interfaz gráfica para gestionar Docker |

---

## Ejercicios de reflexión

1. ¿Por qué un volumen es más adecuado que un contenedor para almacenar datos importantes?

2. ¿Qué diferencia principal existe entre ARG y una variable de entorno?

3. ¿En qué situaciones utilizarías Docker Save y Docker Load?

4. ¿Qué diferencia conceptual existe entre CMD y ENTRYPOINT?

5. ¿Por qué es recomendable utilizar Docker Tag antes de ejecutar Docker Push?
