# Introducción a las APIs y REST

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Entender qué es una API y por qué es tan importante en las aplicaciones web modernas.
- Comprender qué significa el concepto de interfaz.
- Conocer qué es una arquitectura de software.
- Diferenciar una API local de una API remota.
- Entender cómo se comunican las aplicaciones mediante solicitudes y respuestas.
- Conocer qué es REST y qué características tiene una API RESTful.
- Identificar endpoints y métodos HTTP.
- Interpretar los principales códigos de estado HTTP.
- Conocer los formatos más utilizados para intercambiar información: JSON, XML y texto plano.
- Aprender las principales buenas prácticas al diseñar y utilizar APIs.
- Utilizar servicios web públicos para realizar pruebas y prácticas.

## Introducción

Las aplicaciones modernas rara vez trabajan de forma aislada. Normalmente necesitan intercambiar información con otros programas, aplicaciones móviles, bases de datos o servicios en Internet.

Por ejemplo:

- Una tienda online obtiene información de productos.
- Una aplicación meteorológica consulta el tiempo.
- Un sistema de reservas consulta habitaciones disponibles.
- Una aplicación móvil consulta los pedidos de un cliente.

Para que estas aplicaciones puedan comunicarse entre sí necesitan un mecanismo común. Ese mecanismo es una API.

Las APIs permiten que diferentes programas colaboren sin necesidad de conocer cómo están construidos internamente.

## Conceptos teóricos

### ¿Qué es una interfaz?

Una interfaz es un conjunto de reglas que permite la comunicación entre dos elementos.

En informática, una interfaz define:

- Qué acciones se pueden realizar.
- Qué información se puede enviar.
- Qué información se puede recibir.

#### Ejemplo sencillo

Cuando utilizas un cajero automático:

- Tú pulsas botones.
- Introduces una tarjeta.
- Solicitas dinero.

No necesitas conocer cómo funciona el banco internamente.

El cajero actúa como una interfaz entre el cliente y el sistema bancario.

### ¿Qué es una API?

API significa:

**Application Programming Interface**

O traducido:

**Interfaz de Programación de Aplicaciones**

Una API es un conjunto de reglas que permite que dos aplicaciones intercambien información.

#### ¿Para qué sirve?

Permite que una aplicación:

- Obtenga datos.
- Envíe información.
- Modifique información.
- Elimine información.

#### Ejemplo sencillo

Una aplicación de compra online necesita mostrar productos.

En lugar de guardar todos los productos en la propia aplicación, consulta una API.

La API responde con la información solicitada.

### ¿Qué es una arquitectura de software?

La arquitectura de software es la forma en que se organiza una aplicación.

Es como el plano de una casa.

Antes de construir una casa hay que decidir:

- Dónde estarán las habitaciones.
- Dónde estarán las puertas.
- Cómo se conectarán las distintas zonas.

La arquitectura define:

- Cómo se organizan los componentes.
- Cómo se comunican.
- Qué responsabilidades tiene cada parte.

### ¿Qué es un servicio web?

Un servicio web es un programa accesible a través de una red que permite intercambiar información entre sistemas.

Normalmente:

- Recibe peticiones.
- Procesa información.
- Devuelve respuestas.

Una API suele estar implementada mediante servicios web.

### API local y API remota

#### API local

Está disponible dentro del mismo equipo o aplicación.

Ejemplo:

Un programa utiliza funciones de una biblioteca instalada en el ordenador.

#### API remota

Se encuentra en otro servidor accesible mediante Internet o una red.

Ejemplo:

Una tienda online consulta productos almacenados en un servidor externo.

### Request y Response

La comunicación con una API funciona mediante:

#### Request (Solicitud)

Es el mensaje que un cliente envía al servidor.

Puede incluir:

- Qué información se necesita.
- Qué acción se desea realizar.

#### Response (Respuesta)

Es la respuesta que devuelve el servidor.

Puede contener:

- Datos.
- Mensajes.
- Errores.

#### Ejemplo

Cliente:

```text
Muéstrame el producto número 3
```

Servidor:

```text
Aquí tienes los datos del producto
```

### ¿Qué es REST?

REST significa:

**Representational State Transfer**

Es un conjunto de principios para diseñar APIs de manera sencilla y organizada.

REST no es un lenguaje ni una tecnología.

Es una forma de organizar la comunicación entre aplicaciones.

#### ¿Por qué se utiliza?

Porque permite crear APIs:

- Simples.
- Escalables.
- Fáciles de entender.
- Fáciles de mantener.

### ¿Qué es una API RESTful?

Una API RESTful es una API que sigue las reglas y principios de REST.

Generalmente:

- Utiliza HTTP.
- Utiliza URLs para identificar recursos.
- Utiliza métodos HTTP para realizar acciones.

### Recursos

Un recurso es cualquier dato que la API puede gestionar.

Ejemplos:

- Clientes
- Productos
- Pedidos
- Empleados
- Libros

### Endpoints

Un endpoint es una dirección específica de una API.

Cada endpoint representa un recurso o una acción.

#### Ejemplos

```text
/api/clientes
/api/productos
/api/pedidos
```

### Métodos HTTP

Los métodos HTTP indican qué operación queremos realizar.

#### GET

Sirve para obtener información.

```http
GET /api/clientes
```

Significa:

```text
Muéstrame todos los clientes
```

#### POST

Sirve para crear información nueva.

```http
POST /api/clientes
```

Significa:

```text
Crear un nuevo cliente
```

#### PUT

Sirve para actualizar información existente.

```http
PUT /api/clientes/5
```

Significa:

```text
Actualizar el cliente número 5
```

#### DELETE

Sirve para eliminar información.

```http
DELETE /api/clientes/5
```

Significa:

```text
Eliminar el cliente número 5
```

### Formatos de intercambio de información

Cuando dos aplicaciones se comunican necesitan un formato común.

#### JSON

JSON significa:

**JavaScript Object Notation**

Es el formato más utilizado actualmente.

```json
{
  "id": 1,
  "nombre": "Juan",
  "ciudad": "Salamanca"
}
```

Explicación:

- `"id"` identifica al cliente.
- `"nombre"` contiene el nombre.
- `"ciudad"` almacena la ciudad.

#### XML

XML es un formato basado en etiquetas.

```xml
<cliente>
   <id>1</id>
   <nombre>Juan</nombre>
   <ciudad>Salamanca</ciudad>
</cliente>
```

Explicación:

- Cada dato se encuentra dentro de una etiqueta.
- Fue muy utilizado antes de la popularización de JSON.

#### Texto plano

```text
Cliente creado correctamente
```

### Códigos de estado HTTP

Cuando una API responde, normalmente incluye un código de estado.

#### 1xx - Información

```text
100 Continue
```

Indican que la comunicación continúa.

#### 2xx - Éxito

```text
200 OK
201 Created
```

- 200: operación correcta.
- 201: recurso creado correctamente.

#### 3xx - Redirección

```text
301 Moved Permanently
```

Indican que el recurso se encuentra en otra ubicación.

#### 4xx - Error del cliente

```text
400 Bad Request
401 Unauthorized
404 Not Found
```

- 400: petición incorrecta.
- 401: acceso no autorizado.
- 404: recurso no encontrado.

#### 5xx - Error del servidor

```text
500 Internal Server Error
503 Service Unavailable
```

### Buenas prácticas

#### HATEOAS

Significa:

**Hypermedia As The Engine Of Application State**

La respuesta incluye enlaces relacionados para facilitar la navegación.

#### Seguridad

Una API debe proteger los datos.

Algunas medidas habituales:

- Autenticación.
- Autorización.
- HTTPS.
- Control de permisos.

#### Testear

Antes de publicar una API es importante realizar pruebas.

Permite detectar:

- Errores.
- Fallos de lógica.
- Problemas de rendimiento.

#### Documentar

La documentación explica:

- Qué endpoints existen.
- Qué datos reciben.
- Qué respuestas devuelven.

## Analogía del mundo real

Imagina un restaurante.

1. El cliente realiza un pedido.
2. El camarero recoge la petición.
3. La cocina procesa el pedido.
4. El camarero devuelve el plato preparado.

Correspondencia:

- Cliente = Aplicación que solicita datos.
- Camarero = API.
- Cocina = Sistema interno.
- Plato servido = Respuesta.

Gracias al camarero, el cliente no necesita entrar en la cocina ni conocer cómo funciona.

## Ejemplos prácticos

### Ejemplo 1: Obtener productos

```http
GET /api/productos
```

Explicación:

- GET consulta datos.
- `/api/productos` identifica el recurso solicitado.

Posible respuesta:

```json
[
  {
    "id": 1,
    "nombre": "Portátil"
  },
  {
    "id": 2,
    "nombre": "Ratón"
  }
]
```

### Ejemplo 2: Crear un cliente

```http
POST /api/clientes
```

Datos enviados:

```json
{
  "nombre": "Ana",
  "ciudad": "Madrid"
}
```

Posible respuesta:

```json
{
  "id": 12,
  "nombre": "Ana",
  "ciudad": "Madrid"
}
```

### Ejemplo 3: Actualizar un producto

```http
PUT /api/productos/3
```

Datos enviados:

```json
{
  "nombre": "Monitor 27 pulgadas"
}
```

Explicación:

- PUT actualiza información existente.
- El producto identificado con el número 3 se modifica.

### Ejemplo 4: Eliminar un pedido

```http
DELETE /api/pedidos/10
```

Posible respuesta:

```text
Pedido eliminado correctamente
```

### Ejemplo 5: Relación con bases de datos

Consulta SQL:

```sql
SELECT * FROM Clientes;
```

Explicación línea por línea:

- `SELECT` indica que queremos consultar datos.
- `*` significa todos los campos.
- `FROM Clientes` indica la tabla de origen.

Posible respuesta de la API:

```json
[
  {
    "id": 1,
    "nombre": "Juan"
  },
  {
    "id": 2,
    "nombre": "Ana"
  }
]
```

## Webs para practicar

### JSONPlaceholder

https://jsonplaceholder.typicode.com

Permite practicar:

- GET
- POST
- PUT
- DELETE

### PokeAPI

https://pokeapi.co

Permite trabajar con una API real utilizando información de Pokémon.

## Errores frecuentes

### Confundir API con base de datos

La API normalmente actúa como intermediaria.

### Pensar que GET modifica información

GET únicamente consulta datos.

### Utilizar el método HTTP incorrecto

Ejemplos:

- Usar GET para crear registros.
- Usar DELETE para consultar información.

### Ignorar los códigos de estado

Los códigos HTTP indican si la operación ha tenido éxito o ha fallado.

### No leer la documentación

La documentación suele explicar exactamente cómo utilizar una API.

## Resumen

- Una API permite que aplicaciones diferentes se comuniquen.
- Una interfaz define cómo interactuar con un sistema.
- Un servicio web intercambia información a través de una red.
- REST proporciona una forma organizada de diseñar APIs.
- Una API RESTful sigue los principios REST.
- Los endpoints identifican recursos.
- GET consulta.
- POST crea.
- PUT actualiza.
- DELETE elimina.
- JSON es el formato más utilizado.
- Los códigos HTTP indican el resultado de una petición.
- Una API debe ser segura, probada y documentada.

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| API | Conjunto de reglas que permite la comunicación entre aplicaciones |
| Interfaz | Forma de interacción entre dos sistemas |
| Arquitectura de Software | Organización interna de una aplicación |
| Servicio Web | Programa accesible mediante red |
| REST | Estilo arquitectónico para diseñar APIs |
| RESTful | API que sigue los principios REST |
| Endpoint | Dirección específica de acceso a un recurso |
| Request | Solicitud enviada al servidor |
| Response | Respuesta enviada por el servidor |
| JSON | Formato ligero de intercambio de datos |
| XML | Formato basado en etiquetas |
| HTTP | Protocolo de comunicación web |
| GET | Consultar información |
| POST | Crear información |
| PUT | Actualizar información |
| DELETE | Eliminar información |
| Código 200 | Operación correcta |
| Código 404 | Recurso no encontrado |
| Código 500 | Error interno del servidor |
| HATEOAS | Navegación mediante enlaces incluidos en las respuestas |

## Ejercicios de reflexión

1. ¿Qué es una API y para qué sirve?
2. ¿Qué diferencia existe entre una API local y una API remota?
3. ¿Qué método HTTP utilizarías para crear un nuevo cliente?
4. ¿Qué significa recibir un código HTTP 404?
5. ¿Qué ventajas ofrece JSON para intercambiar información entre aplicaciones?
