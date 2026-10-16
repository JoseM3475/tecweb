# Test NuSOAP

## Pregunta 1

¿Cuál es el objetivo principal de un Web Service?

A) Diseñar páginas web más atractivas

B) Permitir la comunicación entre aplicaciones distintas

C) Crear bases de datos automáticamente

D) Sustituir a los navegadores web

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
Un Web Service permite que diferentes aplicaciones intercambien información y trabajen juntas.
```

</details>

---

## Pregunta 2

¿Qué es NuSOAP?

A) Un sistema operativo

B) Un servidor de bases de datos

C) Una biblioteca PHP para trabajar con SOAP

D) Un lenguaje de programación

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
NuSOAP es una biblioteca desarrollada en PHP que facilita la creación y el consumo de servicios SOAP.
```

</details>

---

## Pregunta 3

¿Qué protocolo utiliza mensajes XML para intercambiar información entre aplicaciones?

A) SOAP

B) HTML

C) CSS

D) PDF

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
SOAP es un protocolo que utiliza XML para enviar y recibir información.
```

</details>

---

## Pregunta 4

¿Qué línea se utiliza para incluir la biblioteca NuSOAP en un proyecto PHP?

A) include('index.php');

B) start_nusoap();

C) loadSOAP();

D) require_once('lib/nusoap.php');

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La función require_once permite cargar la biblioteca NuSOAP antes de utilizarla.
```

</details>

---

## Pregunta 5

¿Qué representa la clase `soap_server`?

A) Un servidor SOAP que recibe y procesa peticiones

B) Un editor de código

C) Una base de datos

D) Un navegador web

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
soap_server es la clase encargada de actuar como servidor SOAP.
```

</details>

---

## Pregunta 6

¿Qué método se utiliza para generar la descripción WSDL del servicio?

A) register()

B) configureWSDL()

C) createServer()

D) namespace()

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
configureWSDL() configura y genera la descripción del servicio web.
```

</details>

---

## Pregunta 7

¿Para qué sirve principalmente un namespace?

A) Para aumentar la velocidad del servidor

B) Para guardar datos en XML

C) Para identificar elementos de forma única y evitar conflictos

D) Para registrar usuarios

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El namespace permite diferenciar elementos con nombres similares dentro de distintos sistemas.
```

</details>

---

## Pregunta 8

¿Qué método permite publicar una función para que pueda ser utilizada desde otras aplicaciones?

A) service()

B) configureWSDL()

C) include()

D) register()

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
register() hace que una función sea accesible para los clientes SOAP.
```

</details>

---

## Pregunta 9

¿Qué contiene tradicionalmente la variable `$HTTP_RAW_POST_DATA`?

A) El contenido enviado por el cliente al servidor

B) El código fuente completo del programa

C) Los usuarios registrados

D) Las imágenes del sitio web

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Esta variable contiene el mensaje recibido desde el cliente, normalmente en formato XML.
```

</details>

---

## Pregunta 10

¿Qué describe un archivo WSDL?

A) Los estilos visuales de una aplicación

B) Las características y operaciones disponibles de un Web Service

C) La configuración de la base de datos

D) Los permisos de los usuarios

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El WSDL describe las funciones, parámetros y respuestas de un servicio web.
```

</details>

---

## Pregunta 11

En la analogía del restaurante, ¿qué representa el WSDL?

A) El cliente

B) El camarero

C) La cocina

D) La carta del restaurante

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
La carta describe todo lo que se puede pedir, igual que el WSDL describe los servicios disponibles.
```

</details>

---

## Pregunta 12

¿Qué función cumple el método `service()`?

A) Diseñar la interfaz gráfica

B) Crear tablas en una base de datos

C) Procesar las peticiones recibidas por el servidor

D) Instalar NuSOAP

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
El método service() recibe una petición, la interpreta y devuelve una respuesta.
```

</details>

---

## Pregunta 13

¿Qué ocurre si una función existe en PHP pero no se registra con `register()`?

A) No podrá ser utilizada por los clientes SOAP

B) Se ejecutará dos veces

C) Se borrará automáticamente

D) Cambiará de nombre

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
Solo las funciones registradas pueden ser invocadas desde el exterior.
```

</details>

---

## Pregunta 14

¿Cuál de los siguientes elementos ayuda a otros desarrolladores a saber cómo utilizar un servicio web?

A) soap_server

B) register()

C) XML

D) WSDL

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
El WSDL actúa como documentación técnica del servicio.
```

</details>

---

## Pregunta 15

¿Cuál es una ventaja de NuSOAP?

A) Obliga a trabajar sin PHP

B) Facilita la creación de servicios SOAP

C) Sustituye completamente XML

D) Evita utilizar servidores

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
NuSOAP simplifica el desarrollo de aplicaciones basadas en SOAP.
```

</details>

---

## Pregunta 16

Si una tienda online consulta el estado de un envío en otra empresa, ¿qué concepto está utilizando?

A) Una hoja de cálculo

B) Un antivirus

C) Un editor de texto

D) Un Web Service

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Los Web Services permiten que sistemas distintos intercambien información automáticamente.
```

</details>

---

## Pregunta 17

¿Por qué se utiliza XML en SOAP?

A) Porque permite estructurar la información intercambiada

B) Porque reemplaza a PHP

C) Porque almacena imágenes

D) Porque crea servidores automáticamente

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: A

Explicación:
XML ofrece una forma organizada y estandarizada de representar datos.
```

</details>

---

## Pregunta 18

¿Qué elemento identifica de forma única un servicio o conjunto de elementos relacionados?

A) register()

B) namespace

C) service()

D) soap_server

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: B

Explicación:
El namespace evita conflictos al identificar recursos de forma exclusiva.
```

</details>

---

## Pregunta 19

¿Qué acción suele realizarse después de crear un objeto `soap_server`?

A) Apagar el servidor

B) Eliminar el XML

C) Configurar el WSDL del servicio

D) Borrar las funciones existentes

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: C

Explicación:
Tras crear el servidor, normalmente se configura el WSDL para describir el servicio.
```

</details>

---

## Pregunta 20

¿Cuál de las siguientes situaciones puede provocar problemas en un servicio SOAP?

A) Crear funciones sencillas

B) Utilizar PHP

C) Definir un WSDL

D) Escribir incorrectamente el namespace

<details>
<summary>Ver solución</summary>

```text
Respuesta correcta: D

Explicación:
Un namespace incorrecto puede impedir que cliente y servidor se comuniquen correctamente.
```

</details>
