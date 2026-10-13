# Arquitecturas SOA y Microservicios en Aplicaciones Web Distribuidas

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es una Arquitectura Orientada a Servicios (SOA).
- Entender los principios fundamentales de SOA.
- Identificar los componentes principales de una solución SOA.
- Comprender qué es BPM (Business Process Management).
- Conocer las ventajas y desventajas de SOA.
- Entender qué son los microservicios y por qué surgieron.
- Identificar las partes principales de un microservicio.
- Comprender los conceptos de Arquitectura Hexagonal, API Gateway y Serverless.
- Diferenciar una arquitectura SOA de una arquitectura basada en microservicios.

---

## Introducción

A medida que una empresa crece, también crecen sus aplicaciones informáticas. Una pequeña tienda puede comenzar utilizando una única aplicación para gestionar clientes, productos y pedidos. Sin embargo, cuando la empresa aumenta su tamaño, aparecen nuevos departamentos, nuevas aplicaciones y nuevas necesidades de comunicación entre sistemas.

Surge entonces una pregunta importante:

**¿Cómo conseguimos que aplicaciones diferentes colaboren entre sí sin tener que estar completamente unidas?**

Para resolver este problema aparecieron diferentes modelos arquitectónicos, entre los que destacan:

- SOA (Service Oriented Architecture).
- Arquitectura de Microservicios.

Ambos enfoques buscan dividir un sistema grande en partes más pequeñas, organizadas e independientes que faciliten el mantenimiento, la reutilización y la evolución de las aplicaciones.

---

## Conceptos teóricos

### ¿Qué es SOA?

SOA significa:

**Service Oriented Architecture** (Arquitectura Orientada a Servicios).

Es una forma de diseñar sistemas informáticos en la que las funcionalidades se organizan como servicios independientes.

Un **servicio** es una funcionalidad concreta que puede ser utilizada por otras aplicaciones.

Por ejemplo:

- Servicio de clientes.
- Servicio de productos.
- Servicio de pedidos.
- Servicio de facturación.

Cada servicio realiza una tarea específica y puede ser utilizado desde diferentes aplicaciones.

---

### ¿Para qué sirve SOA?

SOA permite:

- Compartir funcionalidades entre sistemas.
- Evitar duplicar código.
- Facilitar el mantenimiento.
- Integrar aplicaciones desarrolladas con tecnologías diferentes.
- Hacer que las aplicaciones sean más flexibles.

---

### ¿Cuándo se utiliza SOA?

SOA suele utilizarse cuando:

- Existen muchas aplicaciones dentro de una organización.
- Varios sistemas necesitan compartir información.
- Se desea reutilizar funcionalidades comunes.

---

### Ejemplo sencillo

Imaginemos una empresa con:

- Una aplicación web.
- Una aplicación móvil.
- Un sistema interno de gestión.

Las tres necesitan consultar datos de clientes.

En lugar de programar la funcionalidad tres veces, se crea un único Servicio de Clientes.

```text
Aplicación Web
       |
Aplicación Móvil ----> Servicio de Clientes
       |
Sistema Interno
```

Todas las aplicaciones utilizan el mismo servicio.

---

## Principios fundamentales de SOA

### Independencia

Cada servicio debe funcionar de forma independiente.

Esto significa que puede:

- Desarrollarse por separado.
- Actualizarse por separado.
- Mantenerse por separado.

#### Ejemplo

El servicio de clientes puede seguir funcionando aunque exista un problema en el servicio de pedidos.

---

### Reutilización

Un servicio puede ser utilizado por múltiples aplicaciones.

#### Ejemplo

El servicio de clientes puede ser utilizado por:

- Web de ventas.
- Aplicación móvil.
- Aplicación de soporte técnico.

La funcionalidad se desarrolla una sola vez.

---

### Comunicación por red

Los servicios se comunican a través de una red.

Puede ser:

- Internet.
- Red corporativa.
- Red privada.

Los sistemas intercambian mensajes para solicitar y devolver información.

---

### Contrato definido

Un contrato especifica:

- Qué datos recibe un servicio.
- Qué datos devuelve.
- Cómo debe utilizarse.

Es parecido a un manual de instrucciones.

#### Ejemplo

Servicio:

```text
ObtenerCliente
```

Entrada:

```text
IdCliente = 25
```

Salida:

```text
Nombre = Ana Ruiz
```

Cualquier aplicación sabe exactamente cómo utilizar este servicio.

---

## Motor de SOA

Una solución SOA suele estar formada por varios componentes.

### Proveedor del servicio

Es quien ofrece una funcionalidad.

Por ejemplo:

```text
Servicio de Clientes
```

Puede proporcionar información como:

- Nombre.
- Dirección.
- Teléfono.
- Correo electrónico.

---

### Consumidor del servicio

Es la aplicación que utiliza el servicio.

Por ejemplo:

```text
Aplicación de Pedidos
```

Necesita consultar información del cliente antes de registrar una compra.

---

### ESB (Enterprise Service Bus)

ESB significa:

**Enterprise Service Bus** (Bus de Servicio Empresarial).

Su objetivo es facilitar la comunicación entre aplicaciones y servicios.

Actúa como intermediario.

---

#### Sin ESB

```text
Aplicación A -----> Servicio B
Aplicación A -----> Servicio C
Aplicación A -----> Servicio D
```

La aplicación debe conocer todos los servicios.

---

#### Con ESB

```text
Aplicación A
      |
      v
     ESB
   /  |  \
  v   v   v
Serv B Serv C Serv D
```

La aplicación solo necesita comunicarse con el ESB.

---

### BPM (Business Process Management)

BPM significa:

**Business Process Management** (Gestión de Procesos de Negocio).

Se centra en analizar, modelar y mejorar los procesos de una organización.

Un proceso es una secuencia de actividades que permiten conseguir un objetivo.

---

#### Ejemplo de proceso de negocio

Proceso de compra online:

```text
Cliente realiza pedido
         ↓
Verificar stock
         ↓
Generar factura
         ↓
Preparar pedido
         ↓
Enviar producto
```

BPM permite estudiar y optimizar este flujo de trabajo.

---

## Ventajas de SOA

### Reutilización

Las funcionalidades pueden utilizarse en distintos sistemas.

### Mantenimiento más sencillo

Cada servicio puede modificarse de manera independiente.

### Integración

Permite conectar aplicaciones diferentes.

### Flexibilidad

Es más sencillo añadir nuevas aplicaciones o servicios.

### Mejor organización

Cada servicio tiene una responsabilidad concreta.

---

## Desventajas de SOA

### Mayor complejidad

Existen más elementos que gestionar.

### Dependencia de la red

Si la comunicación falla, los servicios pueden dejar de funcionar correctamente.

### Coste inicial elevado

Diseñar una arquitectura SOA requiere planificación.

### Posibles retrasos

La comunicación entre servicios puede aumentar los tiempos de respuesta.

---

# Microservicios

## ¿Qué son los microservicios?

Los microservicios son una evolución de las arquitecturas distribuidas.

Consisten en dividir una aplicación en pequeños servicios totalmente independientes.

Cada microservicio tiene una responsabilidad específica.

---

### Ejemplo

En una tienda online podríamos tener:

```text
Microservicio de Clientes
Microservicio de Productos
Microservicio de Pedidos
Microservicio de Facturación
Microservicio de Envíos
```

Cada uno se encarga de una tarea concreta.

---

## ¿Por qué surgieron los microservicios?

Las aplicaciones modernas presentan nuevos retos.

### Alta demanda

Deben soportar miles o millones de usuarios.

Ejemplos:

- Plataformas de vídeo.
- Redes sociales.
- Tiendas online.

---

### Alta disponibilidad

Los usuarios esperan que los servicios estén disponibles las 24 horas.

---

### Alta complejidad

Las aplicaciones crecen continuamente.

Gestionar una única aplicación gigante resulta complicado.

---

## Elementos de un microservicio

### Controller

El Controller recibe solicitudes externas.

También suele llamarse endpoint.

Un endpoint es una dirección a través de la cual otros sistemas pueden acceder al servicio.

Ejemplo:

```text
/api/clientes
```

---

### Validator

Comprueba que los datos recibidos son correctos.

Ejemplo:

```text
Nombre = ""
```

El Validator detectará que el nombre está vacío.

---

### Business Logic

Significa:

**Lógica de Negocio**

Contiene las reglas reales del negocio.

Ejemplo:

```text
No se puede enviar un pedido
que todavía no ha sido pagado.
```

---

### Data Access

Se encarga de acceder a los datos almacenados.

Por ejemplo:

- Guardar clientes.
- Consultar pedidos.
- Modificar productos.

---

## Requisitos de un microservicio

### Debe cumplir una única función

Cada microservicio debe tener una responsabilidad concreta.

Correcto:

```text
Microservicio de Productos
```

Incorrecto:

```text
Microservicio de Productos,
Clientes y Facturación
```

---

### Debe ser autónomo

Debe poder ejecutarse de forma independiente.

---

### Debe estar aislado

Los cambios realizados en un microservicio deben afectar lo menos posible al resto.

---

## Arquitectura Hexagonal

La arquitectura hexagonal es un modelo de diseño que ayuda a separar la lógica de negocio de los elementos externos.

Su objetivo es que las reglas del negocio sean independientes de:

- Bases de datos.
- Interfaces gráficas.
- APIs.
- Sistemas externos.

---

### Núcleo de la aplicación

En el centro se encuentra la lógica de negocio.

```text
Lógica de Negocio
```

Es la parte más importante.

---

### Puertos

Los puertos definen cómo puede comunicarse el núcleo con el exterior.

Actúan como contratos de comunicación.

---

### Adaptadores

Los adaptadores conectan el sistema con elementos externos.

Por ejemplo:

- Base de datos.
- Aplicación web.
- Servicio de correo.
- Pasarela de pago.

---

### Esquema simplificado

```text
Usuario
   ↓
Adaptador Web
   ↓
Puerto
   ↓
Lógica de Negocio
   ↓
Puerto
   ↓
Adaptador Base de Datos
   ↓
Base de Datos
```

---

## Principios SOLID

SOLID es un conjunto de buenas prácticas para diseñar software más fácil de mantener.

---

### S - Single Responsibility Principle

Responsabilidad Única.

Cada clase debe tener una única responsabilidad.

---

### O - Open Closed Principle

Abierto para ampliación y cerrado para modificación.

Se deben poder añadir nuevas funcionalidades sin modificar las existentes.

---

### L - Liskov Substitution Principle

Los componentes derivados deben poder sustituir a los originales.

---

### I - Interface Segregation Principle

Es mejor utilizar interfaces pequeñas y específicas.

---

### D - Dependency Inversion Principle

La lógica de negocio debe depender de abstracciones y no de implementaciones concretas.

---

## API Gateway

Cuando existen muchos microservicios, resulta difícil que los clientes se comuniquen directamente con todos ellos.

Para resolver este problema se utiliza un API Gateway.

---

### ¿Qué es un API Gateway?

Es un punto único de entrada para acceder a todos los microservicios.

---

### Funcionamiento

```text
Cliente
   |
   v
API Gateway
   |
   +----> Clientes
   |
   +----> Productos
   |
   +----> Pedidos
   |
   +----> Facturación
```

---

### Ventajas

- Simplifica el acceso.
- Aumenta la seguridad.
- Permite controlar usuarios.
- Centraliza la autenticación.
- Facilita el seguimiento de peticiones.

---

## Serverless

Serverless significa:

**Sin gestión directa de servidores.**

No significa que no existan servidores.

Los servidores siguen existiendo, pero son administrados automáticamente por un proveedor cloud.

---

### ¿Para qué sirve?

Permite que los desarrolladores se concentren en escribir código.

La infraestructura se gestiona automáticamente.

---

### Ejemplo

Cuando un usuario realiza una compra:

```text
Compra realizada
        ↓
Función Serverless
        ↓
Generar factura
        ↓
Enviar correo
```

La función solo se ejecuta cuando es necesaria.

---

## Analogía del mundo real

Imaginemos una gran biblioteca.

Si una única persona realizara todas las tareas tendría que:

- Registrar lectores.
- Gestionar préstamos.
- Organizar libros.
- Cobrar multas.
- Atender consultas.

Con el tiempo el trabajo sería inmanejable.

La biblioteca decide dividir las tareas:

- Empleado de préstamos.
- Empleado de información.
- Empleado de catalogación.
- Empleado de administración.

Cada persona se especializa en una única función.

Los microservicios funcionan exactamente igual.

Cada servicio realiza una tarea concreta y especializada.

---

## Ejemplos prácticos

### Ejemplo 1. Servicio de Clientes

```text
Aplicación de Pedidos
        ↓
Servicio de Clientes
        ↓
Información del Cliente
```

#### Paso a paso

1. La aplicación necesita información de un cliente.
2. Envía una solicitud al servicio.
3. El servicio busca los datos.
4. Devuelve la información encontrada.

---

### Ejemplo 2. Uso de un API Gateway

#### Sin API Gateway

```text
Cliente Web → Servicio Clientes
Cliente Web → Servicio Productos
Cliente Web → Servicio Pedidos
Cliente Web → Servicio Facturación
```

#### Con API Gateway

```text
Cliente Web
      ↓
API Gateway
      ↓
Clientes
Productos
Pedidos
Facturación
```

#### Explicación

El cliente solo necesita conocer una dirección.

El API Gateway se encarga de distribuir las solicitudes.

---

### Ejemplo 3. Microservicios para una biblioteca

```text
Microservicio Libros
Microservicio Usuarios
Microservicio Préstamos
Microservicio Multas
```

#### Función de cada uno

- Libros: gestiona el catálogo.
- Usuarios: almacena los datos de los lectores.
- Préstamos: registra préstamos y devoluciones.
- Multas: controla sanciones y pagos.

---

## Errores frecuentes

### Crear servicios demasiado grandes

Un microservicio debe tener una única responsabilidad.

---

### No definir correctamente los contratos

Los consumidores deben saber exactamente cómo utilizar el servicio.

---

### Acoplar demasiado los servicios

Los servicios deben ser independientes.

---

### Mezclar responsabilidades

La lógica de negocio debe permanecer separada del acceso a datos o las interfaces.

---

### Crear demasiados microservicios

Dividir excesivamente un sistema puede aumentar la complejidad.

---

## Resumen

- SOA divide las aplicaciones en servicios reutilizables.
- Los servicios se comunican a través de una red.
- Los contratos definen cómo se utilizan los servicios.
- En SOA encontramos proveedores, consumidores y ESB.
- BPM ayuda a modelar y mejorar procesos de negocio.
- Los microservicios son servicios pequeños y especializados.
- Cada microservicio debe tener una única responsabilidad.
- Los Controllers reciben solicitudes.
- Los Validators verifican los datos de entrada.
- La lógica de negocio contiene las reglas del sistema.
- La arquitectura hexagonal separa la lógica de negocio de la infraestructura.
- SOLID proporciona buenas prácticas de diseño.
- El API Gateway actúa como punto único de entrada.
- Serverless permite ejecutar código sin administrar servidores directamente.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| SOA | Arquitectura basada en servicios reutilizables e independientes |
| Servicio | Funcionalidad que puede ser utilizada por otras aplicaciones |
| Independencia | Capacidad de un servicio para funcionar por separado |
| Reutilización | Posibilidad de usar un servicio desde múltiples sistemas |
| Contrato | Reglas que describen cómo utilizar un servicio |
| Proveedor | Sistema que ofrece un servicio |
| Consumidor | Sistema que utiliza un servicio |
| ESB | Intermediario que facilita la comunicación entre servicios |
| BPM | Gestión y optimización de procesos de negocio |
| Microservicio | Servicio pequeño con una única responsabilidad |
| Controller | Componente que recibe solicitudes externas |
| Endpoint | Dirección de acceso a una funcionalidad |
| Validator | Componente que valida datos de entrada |
| Business Logic | Reglas de negocio de la aplicación |
| Data Access | Acceso a los datos almacenados |
| Arquitectura Hexagonal | Arquitectura que separa la lógica de negocio de la infraestructura |
| Puerto | Contrato de comunicación entre el núcleo y el exterior |
| Adaptador | Conector entre el sistema y elementos externos |
| SOLID | Conjunto de principios para crear software mantenible |
| API Gateway | Punto único de entrada a los microservicios |
| Serverless | Modelo donde la infraestructura es administrada por el proveedor cloud |

---

## Ejercicios de reflexión

1. ¿Por qué es mejor reutilizar un único servicio de clientes en lugar de crear uno en cada aplicación?

2. ¿Qué ventajas aporta que cada microservicio tenga una única responsabilidad?

3. ¿Qué papel realiza un API Gateway dentro de una arquitectura de microservicios?

4. ¿Cuál es la diferencia entre un proveedor y un consumidor de servicios en SOA?

5. Si estuvieras diseñando una aplicación para una biblioteca, ¿qué microservicios crearías y qué responsabilidad tendría cada uno?
