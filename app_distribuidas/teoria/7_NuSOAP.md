# NuSOAP: Creación de Servicios Web SOAP en PHP

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es un Web Service.
- Entender qué es NuSOAP y para qué se utiliza.
- Conocer cómo se instala NuSOAP en un proyecto PHP.
- Crear un servicio web SOAP sencillo utilizando PHP.
- Entender el funcionamiento de los elementos principales:
  - `soap_server`
  - `configureWSDL()`
  - `namespace`
  - `register()`
  - `$HTTP_RAW_POST_DATA`
- Utilizar herramientas como WSDL para describir un servicio web.
- Comprender cómo se comunican aplicaciones diferentes a través de Internet.

---

## Introducción

Cuando utilizamos una aplicación web, muchas veces esta necesita intercambiar información con otras aplicaciones.

Por ejemplo:

- Una tienda online consulta una empresa de transporte.
- Una aplicación bancaria consulta el saldo de una cuenta.
- Un sistema de biblioteca consulta si un libro está disponible.

Para que programas diferentes puedan comunicarse entre sí existen los **Web Services**.

Un **Web Service** es un servicio accesible a través de una red que permite que una aplicación envíe información a otra y reciba una respuesta.

Uno de los estándares más conocidos para esta comunicación es **SOAP**.

En PHP existe una biblioteca llamada **NuSOAP** que facilita enormemente la creación de servicios SOAP.

---

# Conceptos teóricos

## ¿Qué es SOAP?

SOAP significa:

**Simple Object Access Protocol**

Es un protocolo que define cómo intercambiar información entre aplicaciones utilizando mensajes en formato XML.

### ¿Para qué sirve?

Sirve para:

- Enviar información entre sistemas.
- Solicitar datos a otro servidor.
- Ejecutar operaciones remotas.

### ¿Cuándo se utiliza?

Por ejemplo:

- Consultar datos de clientes.
- Obtener información de productos.
- Consultar pedidos.
- Integrar aplicaciones de distintas empresas.

---

## ¿Qué es un Web Service?

Un Web Service es un programa que espera solicitudes de otras aplicaciones.

### Ejemplo

Imaginemos una aplicación de biblioteca.

Un programa externo podría preguntar:

> ¿Está disponible el libro "Don Quijote"?

El Web Service recibiría la pregunta y devolvería algo como:

> Sí, hay 3 ejemplares disponibles.

---

## ¿Qué es NuSOAP?

NuSOAP es una biblioteca escrita en PHP que permite crear y consumir servicios SOAP de forma sencilla.

### ¿Para qué sirve?

Permite:

- Crear servidores SOAP.
- Crear clientes SOAP.
- Intercambiar mensajes XML automáticamente.

### Ventajas

- Fácil de aprender.
- Compatible con PHP.
- Muy utilizada en entornos educativos.
- No requiere conocimientos avanzados de SOAP.

---

## Instalación de NuSOAP

Normalmente se descarga el archivo de la biblioteca y se incorpora al proyecto.

Por ejemplo:

```php
require_once('lib/nusoap.php');
```

### Explicación

```php
require_once('lib/nusoap.php');
```

- `require_once` carga un archivo PHP.
- Se utiliza para incluir la biblioteca NuSOAP.
- Sin esta línea no podremos usar sus clases y funciones.

---

## ¿Qué es soap_server?

La clase `soap_server` representa el servidor SOAP.

Es el componente encargado de:

- Recibir solicitudes.
- Interpretar los mensajes SOAP.
- Ejecutar funciones.
- Devolver respuestas.

### Creación del servidor

```php
$server = new soap_server();
```

### Explicación

```php
$server = new soap_server();
```

- Se crea un nuevo servidor SOAP.
- A partir de este objeto configuraremos todo el servicio.

---

## ¿Qué es configureWSDL()?

WSDL significa:

**Web Service Description Language**

Es un documento que describe:

- Qué operaciones existen.
- Qué parámetros reciben.
- Qué datos devuelven.

### ¿Por qué es importante?

Porque permite que otros programas sepan cómo utilizar nuestro servicio.

### Configuración básica

```php
$server->configureWSDL(
    'ServicioProductos',
    'urn:productos'
);
```

### Explicación

```php
$server->configureWSDL(
    'ServicioProductos',
    'urn:productos'
);
```

- Define el nombre del servicio.
- Define el espacio de nombres.
- Genera la descripción WSDL.

---

## ¿Qué es un namespace?

Un **namespace** (espacio de nombres) es una forma de identificar de manera única elementos dentro de un sistema.

### ¿Por qué se utiliza?

Porque diferentes aplicaciones podrían tener funciones con el mismo nombre.

El namespace evita conflictos.

### Ejemplo

```php
urn:productos
```

o

```php
http://miempresa.com/productos
```

### Analogía simple

Es similar a los apellidos de las personas.

Puede haber varias personas llamadas Juan.

Pero:

- Juan García
- Juan Pérez

ya no generan confusión.

El namespace cumple una función parecida.

---

## ¿Qué es register()?

`register()` permite indicar qué funciones podrán ser llamadas desde el exterior.

### Ejemplo

```php
$server->register('obtenerProducto');
```

### Explicación

```php
$server->register('obtenerProducto');
```

- Hace pública la función.
- Permite que otros programas la ejecuten.

Sin registrarla, la función no estará disponible.

---

## ¿Qué es $HTTP_RAW_POST_DATA?

Cuando un cliente envía una petición SOAP, el mensaje llega en formato XML.

Ese contenido se almacenaba tradicionalmente en:

```php
$HTTP_RAW_POST_DATA
```

### ¿Para qué servía?

Permitía acceder al contenido completo enviado por el cliente.

Ejemplo simplificado:

```xml
<soap>
   ...
</soap>
```

### Uso

```php
$server->service($HTTP_RAW_POST_DATA);
```

### Explicación

```php
$server->service($HTTP_RAW_POST_DATA);
```

- Procesa la petición recibida.
- Ejecuta la función solicitada.
- Devuelve el resultado.

---

## ¿Qué es WSDL?

WSDL es un documento XML que describe completamente un Web Service.

Funciona como un manual de instrucciones para los programas clientes.

Indica:

- Qué funciones existen.
- Qué parámetros reciben.
- Qué tipo de respuesta generan.

---

# Analogía del mundo real

Imaginemos un restaurante.

## Elementos del ejemplo

### Cliente

La persona que hace un pedido.

Equivale al:

**Cliente SOAP**

### Camarero

Recibe el pedido y lo transmite.

Equivale al:

**Mensaje SOAP**

### Cocina

Prepara la petición.

Equivale al:

**Servidor SOAP**

### Carta del restaurante

Describe todo lo que se puede pedir.

Equivale al:

**WSDL**

### Número único del restaurante

Permite identificarlo.

Equivale al:

**Namespace**

---

# Ejemplos prácticos

## Ejemplo 1: Sumar dos números

### Crear la función

```php
function sumar($a, $b)
{
    return $a + $b;
}
```

### Explicación

```php
function sumar($a, $b)
```

- Crea una función llamada `sumar`.
- Recibe dos valores.

```php
return $a + $b;
```

- Devuelve el resultado de la suma.

---

## Ejemplo 2: Crear el servidor SOAP

```php
require_once('lib/nusoap.php');

$server = new soap_server();

$server->configureWSDL(
    'ServicioCalculadora',
    'urn:calculadora'
);

$server->register('sumar');
```

### Explicación

```php
require_once('lib/nusoap.php');
```

Carga la biblioteca.

```php
$server = new soap_server();
```

Crea el servidor.

```php
$server->configureWSDL(...)
```

Genera el WSDL.

```php
$server->register('sumar');
```

Publica la función.

---

## Ejemplo 3: Procesar la petición

```php
$server->service($HTTP_RAW_POST_DATA);
```

### Explicación

```php
$server->service(...)
```

- Recibe la petición.
- La interpreta.
- Ejecuta la función.
- Devuelve el resultado.

---

## Ejemplo 4: Servicio de clientes

```php
function obtenerCliente($id)
{
    return "Cliente número " . $id;
}
```

### Explicación

```php
function obtenerCliente($id)
```

Recibe el identificador de un cliente.

```php
return "Cliente número " . $id;
```

Devuelve una respuesta sencilla.

Si enviamos:

```text
5
```

Obtendremos:

```text
Cliente número 5
```

---

## Ejemplo 5: Servicio de productos

```php
function obtenerProducto($codigo)
{
    return "Producto " . $codigo;
}
```

### Explicación

```php
function obtenerProducto($codigo)
```

Recibe un código de producto.

```php
return "Producto " . $codigo;
```

Devuelve una descripción simple.

---

# Errores frecuentes

## Olvidar incluir NuSOAP

```php
require_once('lib/nusoap.php');
```

Sin esta línea el programa no encontrará las clases necesarias.

---

## No registrar una función

```php
$server->register('sumar');
```

Si no se registra, los clientes no podrán ejecutarla.

---

## Escribir mal el namespace

Un namespace incorrecto puede impedir la comunicación entre cliente y servidor.

---

## No configurar el WSDL

Sin WSDL otros desarrolladores tendrán dificultades para utilizar el servicio.

---

## Enviar parámetros incorrectos

Ejemplo:

```text
sumar("hola","mundo")
```

Cuando la función espera números.

---

# Resumen

- Un Web Service permite comunicar aplicaciones.
- SOAP es un protocolo basado en XML.
- NuSOAP facilita trabajar con SOAP en PHP.
- `soap_server` representa el servidor.
- `configureWSDL()` genera la descripción del servicio.
- El `namespace` identifica de forma única elementos del servicio.
- `register()` publica funciones para que puedan ser utilizadas.
- `$HTTP_RAW_POST_DATA` contiene los datos enviados por el cliente.
- WSDL actúa como un manual que describe el servicio.

---

# Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Web Service | Servicio que permite comunicarse a distintas aplicaciones |
| SOAP | Protocolo para intercambiar información mediante XML |
| XML | Lenguaje utilizado para estructurar datos |
| NuSOAP | Biblioteca PHP para trabajar con SOAP |
| soap_server | Clase que crea el servidor SOAP |
| WSDL | Documento que describe el servicio web |
| namespace | Identificador único para evitar conflictos |
| register() | Método que publica funciones del servicio |
| service() | Método que procesa las peticiones recibidas |
| $HTTP_RAW_POST_DATA | Variable que contiene los datos enviados por el cliente |

---

# Ejercicios de reflexión

1. ¿Cuál es la diferencia entre una aplicación normal y un Web Service?

2. ¿Por qué es necesario que aplicaciones diferentes puedan comunicarse entre sí?

3. ¿Qué función tiene el documento WSDL dentro de un servicio SOAP?

4. ¿Qué ocurriría si una función existe en PHP pero no se registra mediante `register()`?

5. En la analogía del restaurante:
   - ¿Quién sería el cliente SOAP?
   - ¿Quién sería el servidor SOAP?
   - ¿Qué elemento representa al WSDL?
