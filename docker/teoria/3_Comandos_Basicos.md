# 3. Comandos básicos de Docker y gestión de contenedores

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es un contenedor y por qué se utiliza.
- Crear y ejecutar contenedores Docker.
- Entender el concepto de mapeo de puertos.
- Consultar el estado de los contenedores.
- Visualizar registros de ejecución.
- Acceder al interior de un contenedor.
- Configurar contenedores mediante variables de entorno.
- Gestionar el ciclo de vida de los contenedores.
- Mantener limpio el entorno Docker eliminando contenedores innecesarios.

---

## Introducción

Cuando instalamos una aplicación de forma tradicional, a menudo aparecen problemas porque cada ordenador tiene configuraciones diferentes. Puede que una aplicación funcione correctamente en un equipo y falle en otro.

Docker nació para solucionar este problema. Permite empaquetar una aplicación junto con todo lo que necesita para funcionar dentro de una unidad llamada **contenedor**.

Gracias a Docker, una aplicación se comportará exactamente igual independientemente del ordenador donde se ejecute.

En esta sesión aprenderemos los comandos más importantes para crear, ejecutar, consultar y administrar contenedores Docker.

---

# Conceptos teóricos

## ¿Qué es un contenedor?

Un contenedor es un entorno aislado que contiene:

- Una aplicación.
- Sus archivos.
- Sus configuraciones.
- Todo lo necesario para que funcione.

### ¿Para qué sirve?

Permite que una aplicación funcione de forma idéntica en cualquier equipo.

### ¿Cuándo se utiliza?

Los contenedores son muy habituales para ejecutar:

- Aplicaciones web.
- APIs.
- Bases de datos.
- Herramientas empresariales.
- Sistemas de pruebas.

### Ejemplo sencillo

Imaginemos una biblioteca que utiliza una aplicación para gestionar préstamos de libros.

En lugar de instalar la aplicación manualmente en cada ordenador de la biblioteca, se crea un contenedor Docker con todo preparado.

Cada ordenador ejecutará exactamente la misma aplicación y configuración.

---

## ¿Qué es una imagen Docker?

Antes de crear un contenedor necesitamos una imagen.

Una imagen es una plantilla que contiene todo lo necesario para crear contenedores.

### Ejemplo sencillo

Si pensamos en una receta de cocina:

- La receta sería la imagen.
- El plato cocinado sería el contenedor.

Podemos cocinar muchos platos diferentes usando la misma receta.

---

## Comando docker run

El comando principal para crear y arrancar contenedores es:

```bash
docker run imagen
```

Ejemplo:

```bash
docker run nginx
```

### Explicación

- `docker` indica que utilizamos Docker.
- `run` crea y arranca un contenedor.
- `nginx` es la imagen utilizada.

Cuando Docker ejecuta este comando:

1. Busca la imagen.
2. Si no existe, la descarga.
3. Crea el contenedor.
4. Lo pone en funcionamiento.

---

## Ejecutar en segundo plano (-d)

Normalmente un contenedor muestra su actividad en la terminal.

Muchas veces queremos que siga funcionando sin ocupar la pantalla.

Para ello utilizamos:

```bash
docker run -d nginx
```

### Explicación

- `-d` significa **detached**.
- El contenedor se ejecuta en segundo plano.

### Cuándo se utiliza

Cuando queremos que una aplicación continúe funcionando sin mantener abierta la terminal.

---

## Asignar un nombre (--name)

Docker genera nombres automáticos que suelen ser difíciles de recordar.

Podemos asignar uno personalizado.

```bash
docker run -d --name servidor-web nginx
```

### Explicación

- `--name servidor-web` asigna el nombre del contenedor.

### Ventaja

Será más fácil administrarlo posteriormente.

Por ejemplo:

```bash
docker stop servidor-web
```

---

## Mapeo de puertos (-p)

### ¿Qué es un puerto?

Un puerto es una puerta de acceso a una aplicación.

Si una aplicación es una tienda, el puerto sería la puerta por la que entran los clientes.

### ¿Por qué es necesario mapear puertos?

Los contenedores están aislados.

Aunque una aplicación funcione dentro del contenedor, nadie podrá acceder a ella desde fuera si no abrimos una conexión.

### Sintaxis

```bash
docker run -p puerto_host:puerto_contenedor imagen
```

### Ejemplo

```bash
docker run -d -p 8080:80 nginx
```

### Explicación

- `8080` es el puerto del ordenador anfitrión.
- `80` es el puerto utilizado por Nginx dentro del contenedor.

Cuando alguien acceda a:

```text
http://localhost:8080
```

Docker redirigirá la petición al puerto 80 del contenedor.

### Cuándo se utiliza

Siempre que necesitemos acceder a una aplicación desde fuera del contenedor.

---

## Montar volúmenes (-v)

### Problema

Los datos almacenados dentro de un contenedor pueden perderse si este se elimina.

### Solución

Utilizar volúmenes.

```bash
docker run -d -v datos:/app nginx
```

### Explicación

- `-v` crea o utiliza un volumen.
- Los datos permanecerán almacenados aunque el contenedor desaparezca.

### Ejemplo práctico

Una tienda online guarda los pedidos en un volumen para evitar perderlos si el contenedor es recreado.

---

## Variables de entorno (-e)

Las aplicaciones suelen necesitar configuraciones.

Por ejemplo:

- Usuario.
- Contraseña.
- Idioma.
- País.
- Modo de funcionamiento.

Docker permite enviar esta información mediante variables de entorno.

### Ejemplo

```bash
docker run -e USUARIO=admin nginx
```

### Explicación

Se crea una variable llamada:

```text
USUARIO
```

con el valor:

```text
admin
```

---

## Archivo de variables (--env-file)

Cuando necesitamos muchas variables resulta incómodo escribirlas una por una.

### Archivo variables.env

```text
USUARIO=admin
IDIOMA=es
PAIS=España
```

### Ejecución

```bash
docker run --env-file variables.env nginx
```

### Explicación

Docker leerá automáticamente todas las variables definidas en el archivo.

---

## Eliminación automática (--rm)

En ocasiones solo necesitamos ejecutar un contenedor temporalmente.

```bash
docker run --rm nginx
```

### Explicación

Cuando el contenedor termine:

- Se detendrá.
- Será eliminado automáticamente.

### Cuándo se utiliza

Para pruebas rápidas.

---

## Ver contenedores activos (docker ps)

Permite visualizar los contenedores que están funcionando.

```bash
docker ps
```

### Información mostrada

- Identificador.
- Imagen.
- Nombre.
- Estado.
- Puertos.

### Cuándo se utiliza

Siempre que necesitemos comprobar qué contenedores están activos.

---

## Ver todos los contenedores (docker ps -a)

Por defecto Docker solo muestra los contenedores en ejecución.

Para visualizar también los detenidos:

```bash
docker ps -a
```

### Explicación

- `-a` significa all (todos).

---

## Consultar registros (docker logs)

Los registros o logs son mensajes generados por una aplicación.

Sirven para:

- Detectar errores.
- Comprobar funcionamiento.
- Analizar actividad.

### Ejemplo

```bash
docker logs servidor-web
```

### Explicación

Muestra toda la información generada por la aplicación.

---

## Conectarse a un contenedor (docker attach)

Permite conectarse al proceso principal de un contenedor.

```bash
docker attach servidor-web
```

### Cuándo se utiliza

Principalmente para observar directamente la salida del contenedor.

---

## Ejecutar comandos dentro del contenedor (docker exec)

Uno de los comandos más utilizados.

Permite acceder al interior del contenedor.

### Ejemplo

```bash
docker exec -it servidor-web bash
```

### Explicación

- `exec` ejecuta un comando.
- `-i` mantiene la interacción.
- `-t` crea una terminal.
- `bash` abre una consola dentro del contenedor.

### Utilidad

Permite:

- Revisar archivos.
- Consultar configuraciones.
- Ejecutar comandos internos.

---

## Detener un contenedor (docker stop)

Permite apagar un contenedor correctamente.

```bash
docker stop servidor-web
```

### Explicación

Docker solicita a la aplicación que finalice de forma ordenada.

---

## Política de reinicio (--restart)

Permite definir qué hacer cuando un contenedor se detiene inesperadamente.

### Ejemplo

```bash
docker run -d --restart always nginx
```

### Explicación

Si el contenedor se apaga, Docker intentará reiniciarlo automáticamente.

### Cuándo se utiliza

En aplicaciones que deben estar siempre disponibles.

---

## Eliminar contenedores detenidos (docker container prune)

Con el tiempo se acumulan contenedores que ya no se utilizan.

Docker permite eliminarlos fácilmente.

### Ejemplo

```bash
docker container prune
```

### Explicación

Elimina todos los contenedores detenidos.

### Beneficio

Mantiene el sistema más limpio y organizado.

---

## Analogía del mundo real

Imaginemos una empresa de transporte.

- La imagen Docker sería el plano de una caja.
- El contenedor sería una caja ya construida.
- El puerto sería una puerta de acceso a la caja.
- El volumen sería un almacén externo donde guardar información importante.
- Las variables de entorno serían etiquetas con instrucciones especiales.
- Docker sería el encargado de gestionar todas las cajas.

Gracias a esta organización, cada aplicación funciona de forma independiente sin afectar a las demás.

---

# Ejemplos prácticos

## Ejemplo 1: Crear un servidor web

```bash
docker run -d --name web1 nginx
```

### Explicación línea por línea

- `docker run` crea y arranca el contenedor.
- `-d` lo ejecuta en segundo plano.
- `--name web1` asigna un nombre personalizado.
- `nginx` indica la imagen utilizada.

---

## Ejemplo 2: Publicar una página web

```bash
docker run -d --name web2 -p 8080:80 nginx
```

### Explicación línea por línea

- `docker run` crea el contenedor.
- `-d` ejecuta el proceso en segundo plano.
- `--name web2` asigna un nombre.
- `-p 8080:80` conecta ambos puertos.
- `nginx` inicia el servidor web.

Acceso desde navegador:

```text
http://localhost:8080
```

---

## Ejemplo 3: Ver contenedores en ejecución

```bash
docker ps
```

### Explicación

Muestra todos los contenedores que están funcionando actualmente.

---

## Ejemplo 4: Ver todos los contenedores

```bash
docker ps -a
```

### Explicación

Muestra tanto los contenedores activos como los detenidos.

---

## Ejemplo 5: Consultar registros

```bash
docker logs web2
```

### Explicación

Permite visualizar los mensajes que genera la aplicación.

---

## Ejemplo 6: Entrar en el contenedor

```bash
docker exec -it web2 bash
```

### Explicación línea por línea

- `docker exec` ejecuta un comando.
- `-it` abre una consola interactiva.
- `web2` es el nombre del contenedor.
- `bash` inicia una terminal dentro del contenedor.

---

## Ejemplo 7: Detener el contenedor

```bash
docker stop web2
```

### Explicación

Detiene el contenedor de forma ordenada.

---

## Ejemplo 8: Eliminar contenedores detenidos

```bash
docker container prune
```

### Explicación

Elimina todos los contenedores detenidos para liberar espacio.

---

# Errores frecuentes

## Olvidar mapear puertos

Error:

```bash
docker run nginx
```

Problema:

La aplicación funciona pero no es accesible desde el navegador.

Solución:

```bash
docker run -p 8080:80 nginx
```

---

## Utilizar nombres duplicados

Error:

```bash
docker run --name web nginx
docker run --name web nginx
```

Problema:

Docker no permite dos contenedores con el mismo nombre.

---

## Confundir los puertos

Error:

```bash
docker run -p 80:8080 nginx
```

Problema:

La aplicación puede no responder correctamente porque se ha invertido el orden.

Recordatorio:

```text
puerto_host : puerto_contenedor
```

---

## No detener contenedores innecesarios

Problema:

Los contenedores continúan consumiendo recursos.

Solución:

```bash
docker stop nombre_contenedor
```

---

## Eliminar información sin querer

Problema:

Usar comandos de limpieza sin revisar previamente los contenedores existentes.

Recomendación:

Ejecutar primero:

```bash
docker ps -a
```

---

# Resumen

- Docker permite ejecutar aplicaciones aisladas mediante contenedores.
- Una imagen es la plantilla utilizada para crear contenedores.
- El comando principal es `docker run`.
- La opción `-d` ejecuta el contenedor en segundo plano.
- La opción `-p` permite acceder a aplicaciones desde el exterior.
- La opción `-v` conserva información mediante volúmenes.
- La opción `-e` define variables de entorno.
- `docker ps` muestra los contenedores activos.
- `docker ps -a` muestra todos los contenedores.
- `docker logs` permite consultar registros.
- `docker exec` permite acceder al interior de un contenedor.
- `docker stop` detiene contenedores.
- `--restart` configura reinicios automáticos.
- `docker container prune` elimina contenedores detenidos.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Docker | Plataforma para ejecutar aplicaciones en contenedores |
| Imagen | Plantilla utilizada para crear contenedores |
| Contenedor | Instancia en ejecución de una imagen |
| Puerto | Punto de entrada y salida de una aplicación |
| Mapeo de puertos | Conexión entre puertos del host y del contenedor |
| Volumen | Mecanismo para conservar datos |
| Variable de entorno | Configuración enviada a una aplicación |
| docker run | Crea y ejecuta contenedores |
| docker ps | Lista contenedores activos |
| docker ps -a | Lista todos los contenedores |
| docker logs | Muestra registros de una aplicación |
| docker attach | Conecta con el proceso principal |
| docker exec | Ejecuta comandos dentro del contenedor |
| docker stop | Detiene un contenedor |
| --restart | Configura reinicio automático |
| docker container prune | Elimina contenedores detenidos |

---

# Ejercicios de reflexión

1. ¿Cuál es la diferencia entre una imagen Docker y un contenedor Docker?

2. ¿Por qué es necesario utilizar la opción `-p` cuando queremos acceder a una aplicación desde el navegador?

3. ¿Qué ventaja tiene utilizar un volumen frente a guardar datos únicamente dentro del contenedor?

4. ¿Qué diferencia existe entre `docker ps` y `docker ps -a`?

5. ¿En qué situaciones puede resultar útil configurar una política de reinicio mediante `--restart`?
