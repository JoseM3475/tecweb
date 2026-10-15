# Seguridad en Servicios Web y Arquitecturas Orientadas a Servicios

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender por qué la seguridad es fundamental en los servicios web.
- Entender qué riesgos existen cuando diferentes aplicaciones intercambian información.
- Conocer qué es la seguridad en arquitecturas orientadas a servicios.
- Comprender el papel de WS-Security.
- Identificar los principales componentes de WS-Security: tokens, encriptación y firma digital.
- Entender qué es SAML y para qué se utiliza.
- Comprender el concepto de SSO (Single Sign-On).
- Conocer qué es XACML y cuál es su función en el control de acceso.
- Relacionar todos estos conceptos con situaciones reales del día a día.

## Introducción

Actualmente muchas aplicaciones intercambian información constantemente.

Por ejemplo:

- Una tienda online consulta datos de clientes.
- Un hospital comparte información entre aplicaciones.
- Una universidad permite acceder a varios sistemas usando una única cuenta.
- Una empresa conecta aplicaciones de recursos humanos, contabilidad y ventas.

Cuando la información viaja entre aplicaciones aparecen preguntas importantes:

- ¿Quién está enviando los datos?
- ¿Quién puede acceder a ellos?
- ¿Alguien podría leerlos durante el viaje?
- ¿Se han modificado antes de llegar a su destino?

La seguridad en servicios web intenta responder a todas estas preguntas.

Su objetivo es garantizar que la información llegue a la persona correcta, sin ser alterada y sin que terceros puedan verla.

## Conceptos teóricos

### ¿Qué es la seguridad en servicios web?

La seguridad en servicios web consiste en aplicar mecanismos que protejan la información que intercambian las aplicaciones.

### ¿Para qué sirve?

Sirve para:

- Evitar accesos no autorizados.
- Proteger datos confidenciales.
- Garantizar que la información no ha sido modificada.
- Identificar quién está utilizando un servicio.

### ¿Cuándo se utiliza?

Se utiliza siempre que dos o más aplicaciones intercambien información sensible.

Por ejemplo:

- Datos bancarios.
- Información médica.
- Datos de empleados.
- Pedidos de clientes.

### Ejemplo sencillo

Imagina que una tienda online envía información de un pedido:

```text
Cliente: Ana García
Producto: Portátil
Importe: 950 €
```

Si esta información viaja sin protección, otra persona podría leerla o modificarla.

Por eso se aplican mecanismos de seguridad.

---

### ¿Qué es una Arquitectura Orientada a Servicios (SOA)?

SOA significa:

**Service-Oriented Architecture**

o en español:

**Arquitectura Orientada a Servicios**.

Es una forma de organizar aplicaciones para que trabajen mediante servicios independientes.

### ¿Para qué sirve?

Permite:

- Reutilizar funcionalidades.
- Conectar sistemas diferentes.
- Facilitar la integración entre aplicaciones.

### Ejemplo sencillo

Una empresa puede tener:

- Un servicio para clientes.
- Un servicio para pedidos.
- Un servicio para facturas.

Cada servicio realiza una tarea específica, pero todos colaboran entre sí.

### ¿Por qué necesita seguridad?

Porque varios sistemas están intercambiando información constantemente.

Si un atacante consigue acceder a uno de ellos, podría intentar acceder al resto.

Por eso la seguridad es una parte fundamental de SOA.

---

### ¿Qué es WS-Security?

WS-Security significa:

**Web Services Security**.

Es un conjunto de normas que permite añadir seguridad a los servicios web.

### ¿Para qué sirve?

Permite:

- Identificar a los usuarios.
- Proteger los datos.
- Verificar que la información es auténtica.
- Detectar modificaciones no autorizadas.

### Componentes principales

- Tokens
- Encriptación
- Firma digital

---

### Tokens

#### ¿Qué son?

Un token es una credencial digital que identifica a un usuario o aplicación.

Es similar a una tarjeta de identificación.

#### ¿Para qué sirve?

Permite demostrar quién está realizando la petición.

#### Ejemplo sencillo

Cuando una aplicación accede a un servicio puede enviar un token:

```text
TOKEN_ABC123
```

Ese token indica quién está realizando la operación.

#### Explicación

- El usuario inicia sesión.
- El sistema genera un token.
- El token acompaña las solicitudes posteriores.
- El servidor verifica que sea válido.

---

### Encriptación

#### ¿Qué es?

La encriptación consiste en transformar la información para que solo pueda ser entendida por quien tenga permiso.

También suele llamarse cifrado.

#### ¿Para qué sirve?

Sirve para impedir que terceras personas lean los datos.

#### Ejemplo sencillo

Mensaje original:

```text
Pedido número 150
```

Mensaje cifrado:

```text
X9#A7L!83PQ
```

#### Explicación

- La aplicación cifra el mensaje.
- El mensaje viaja por la red.
- Si alguien lo intercepta, verá datos incomprensibles.
- El destinatario autorizado lo descifra.

---

### Firma Digital

#### ¿Qué es?

Una firma digital es un mecanismo que permite verificar:

- Quién envió la información.
- Que no ha sido modificada.

#### ¿Para qué sirve?

Garantiza la integridad y autenticidad de los datos.

#### Ejemplo sencillo

Supongamos que una empresa envía el siguiente mensaje:

```text
Transferir 100 €
```

La firma digital permite comprobar que:

- El mensaje proviene realmente de la empresa.
- Nadie ha cambiado la cantidad durante el envío.

#### Explicación

- Se genera una firma asociada al mensaje.
- El mensaje y la firma se envían juntos.
- El receptor valida la firma.
- Si algo ha cambiado, la validación falla.

---

### SAML

SAML significa:

**Security Assertion Markup Language**.

### ¿Qué es?

Es un estándar que permite intercambiar información de autenticación entre sistemas.

### ¿Para qué sirve?

Permite que un sistema confíe en la identidad validada por otro sistema.

### ¿Cuándo se utiliza?

Cuando una organización tiene varias aplicaciones y quiere que el usuario se identifique una sola vez.

### Ejemplo sencillo

Un empleado inicia sesión en el portal corporativo.

Posteriormente accede a:

- Correo electrónico.
- Aplicación de recursos humanos.
- Gestión de proyectos.

Sin volver a introducir usuario y contraseña.

SAML permite compartir la información de autenticación de forma segura.

---

### SSO (Single Sign-On)

SSO significa:

**Inicio de Sesión Único**.

### ¿Qué es?

Un sistema que permite acceder a varias aplicaciones realizando una sola autenticación.

### ¿Para qué sirve?

Permite:

- Mayor comodidad.
- Menos contraseñas.
- Mejor experiencia de usuario.

### Ejemplo sencillo

Un alumno accede al portal de la universidad.

Después puede entrar en:

- Aula virtual.
- Biblioteca digital.
- Correo institucional.

Sin volver a identificarse.

### Relación entre SAML y SSO

SAML es una tecnología que puede utilizarse para implementar SSO.

Podemos decir que:

- SSO es la funcionalidad.
- SAML es una de las tecnologías que permite conseguirla.

---

### XACML

XACML significa:

**eXtensible Access Control Markup Language**.

### ¿Qué es?

Es un estándar para definir reglas de acceso.

### ¿Para qué sirve?

Permite decidir quién puede realizar cada acción.

### ¿Cuándo se utiliza?

Cuando diferentes usuarios tienen distintos niveles de permisos.

### Ejemplo sencillo

En una biblioteca:

- El bibliotecario puede crear libros.
- El bibliotecario puede eliminar libros.
- El lector puede consultar libros.
- El lector no puede eliminar libros.

XACML permite definir estas reglas de forma estructurada.

### Ejemplo de regla

```text
Rol: Bibliotecario
Permiso: Eliminar libros
```

Explicación:

- El usuario tiene el rol de bibliotecario.
- El sistema le permite ejecutar la acción indicada.

---

## Analogía del mundo real

Imagina un edificio de oficinas.

Para entrar existen varias medidas de seguridad:

- Una tarjeta identificativa.
- Puertas de acceso restringido.
- Vigilantes.
- Cámaras de seguridad.

Relación con los conceptos estudiados:

| Situación real | Concepto |
|---------------|-----------|
| Tarjeta de empleado | Token |
| Caja fuerte cerrada | Encriptación |
| Firma manuscrita | Firma digital |
| Entrar una sola vez al edificio | SSO |
| Comprobación de identidad | SAML |
| Permisos según el cargo | XACML |

De esta forma el edificio puede saber:

- Quién entra.
- A qué zonas accede.
- Qué acciones puede realizar.

Lo mismo ocurre en los sistemas informáticos.

## Ejemplos prácticos

### Ejemplo 1: Uso de un Token

Solicitud:

```text
Usuario: empleado01
Token: ABC123XYZ
```

Explicación línea por línea:

- `Usuario: empleado01` identifica a la persona.
- `Token: ABC123XYZ` demuestra que ya ha iniciado sesión.

El servidor valida el token antes de permitir el acceso.

---

### Ejemplo 2: Información cifrada

Mensaje original:

```text
Pedido 250 - Cliente Ana
```

Explicación:

- Este es el texto real que queremos proteger.

Mensaje cifrado:

```text
7D9K#1XPQ2L
```

Explicación:

- El contenido ya no puede entenderse fácilmente.
- Solo el destinatario autorizado podrá recuperarlo.

---

### Ejemplo 3: Firma Digital

Mensaje:

```text
Importe: 500 €
Firma: F8X2A91
```

Explicación línea por línea:

- `Importe: 500 €` es la información enviada.
- `Firma: F8X2A91` permite verificar autenticidad e integridad.

El receptor comprueba que la firma sigue siendo válida.

---

### Ejemplo 4: SSO en una empresa

Proceso:

```text
1. Inicio sesión.
2. Accedo al correo.
3. Accedo a recursos humanos.
4. Accedo al portal interno.
```

Explicación:

- Solo se realiza una autenticación inicial.
- El usuario puede acceder al resto de aplicaciones sin volver a introducir credenciales.

---

### Ejemplo 5: Control de acceso mediante XACML

Reglas:

```text
Empleado -> Consultar pedidos
Supervisor -> Consultar y modificar pedidos
Administrador -> Control total
```

Explicación línea por línea:

- El empleado tiene permisos básicos.
- El supervisor tiene más permisos.
- El administrador dispone del nivel más alto de acceso.

## Errores frecuentes

### Confundir autenticación con autorización

Autenticación significa:

```text
¿Quién eres?
```

Autorización significa:

```text
¿Qué puedes hacer?
```

Son conceptos diferentes.

---

### Pensar que un token es una contraseña

El token no sustituye necesariamente a la contraseña.

Normalmente se genera después de autenticarse.

---

### Creer que la encriptación verifica la identidad

La encriptación protege la información.

La identificación suele realizarse mediante otros mecanismos.

---

### Pensar que SSO elimina la seguridad

SSO simplifica el inicio de sesión.

No elimina los controles de seguridad.

---

### Conceder permisos excesivos

Un usuario debe tener únicamente los permisos necesarios para realizar su trabajo.

## Resumen

- La seguridad protege los datos que intercambian las aplicaciones.
- SOA organiza una aplicación mediante servicios independientes.
- WS-Security añade mecanismos de protección a los servicios web.
- Los tokens permiten identificar usuarios o aplicaciones.
- La encriptación protege la confidencialidad de la información.
- La firma digital garantiza autenticidad e integridad.
- SAML permite compartir información de autenticación entre sistemas.
- SSO permite acceder a varias aplicaciones iniciando sesión una sola vez.
- XACML define reglas de autorización y control de acceso.
- La seguridad es esencial cuando se intercambian datos sensibles.

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Seguridad en Servicios Web | Protección de la información intercambiada entre aplicaciones |
| SOA | Arquitectura basada en servicios independientes |
| WS-Security | Estándar de seguridad para servicios web |
| Token | Credencial digital utilizada para identificar usuarios o aplicaciones |
| Encriptación | Transformación de datos para impedir accesos no autorizados |
| Firma Digital | Mecanismo para verificar autenticidad e integridad |
| SAML | Estándar de intercambio de información de autenticación |
| SSO | Inicio de sesión único para varias aplicaciones |
| XACML | Estándar para definir reglas de acceso y permisos |
| Autenticación | Proceso para verificar la identidad de un usuario |
| Autorización | Proceso para decidir qué acciones puede realizar un usuario |

## Ejercicios de reflexión

1. ¿Por qué es importante proteger la información que intercambian las aplicaciones?
2. ¿Qué diferencia existe entre un token y una firma digital?
3. ¿Cómo ayuda la encriptación a proteger los datos durante una comunicación?
4. ¿Qué ventaja ofrece SSO a los usuarios de una organización?
5. En una biblioteca, ¿cómo podría utilizarse XACML para controlar lo que puede hacer cada usuario?
