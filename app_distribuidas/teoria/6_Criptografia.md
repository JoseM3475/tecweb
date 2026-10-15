# Criptografía: Protección de la Información en Aplicaciones Web

## Objetivos de aprendizaje

Al finalizar esta sesión serás capaz de:

- Comprender qué es la criptografía y por qué es fundamental en las aplicaciones web.
- Diferenciar entre cifrado simétrico y cifrado asimétrico.
- Entender las ventajas e inconvenientes de ambos enfoques.
- Conocer los algoritmos AES, RSA y ECC.
- Comprender qué es una firma digital y para qué sirve.
- Entender el papel de las entidades certificadoras.
- Conocer el funcionamiento del cifrado híbrido.
- Comprender qué es una función hash.
- Diferenciar entre MD5, SHA-2 y BCRYPT.
- Identificar casos de uso reales en aplicaciones web modernas.

---

## Introducción

Cada vez que iniciamos sesión en una aplicación web, realizamos una compra online o consultamos nuestra cuenta bancaria, estamos enviando datos a través de Internet.

Sin mecanismos de protección, cualquier persona que pudiera interceptar esa información tendría acceso a nuestros datos personales, contraseñas o información bancaria.

La criptografía es la tecnología que permite proteger la información mediante técnicas matemáticas para que solamente las personas autorizadas puedan acceder a ella.

Gracias a la criptografía, hoy podemos:

- Navegar de forma segura.
- Utilizar aplicaciones bancarias.
- Comprar en tiendas online.
- Proteger contraseñas.
- Firmar documentos electrónicamente.
- Verificar la identidad de sitios web y usuarios.

---

## Conceptos teóricos

### ¿Qué es la criptografía?

La criptografía es el conjunto de técnicas utilizadas para proteger información.

Su objetivo es transformar datos legibles en datos protegidos para que solamente puedan ser comprendidos por las personas autorizadas.

#### ¿Para qué sirve?

Permite:

- Mantener la privacidad de la información.
- Evitar modificaciones no autorizadas.
- Identificar a los participantes en una comunicación.
- Proteger datos sensibles.

#### Ejemplo sencillo

Texto original:

```text
Pedido aprobado
```

Texto cifrado:

```text
83A4F9D01C6B...
```

Una persona sin la clave adecuada verá únicamente una secuencia incomprensible de caracteres.

---

### Cifrado simétrico

#### ¿Qué es?

El cifrado simétrico es un sistema que utiliza una única clave para proteger y recuperar la información.

La misma clave se utiliza tanto para cifrar como para descifrar.

#### ¿Para qué sirve?

Se utiliza para proteger información de forma rápida y eficiente.

#### ¿Cuándo se utiliza?

- Archivos protegidos.
- Bases de datos.
- Discos duros cifrados.
- Comunicaciones seguras.

#### Funcionamiento

```text
Mensaje original
       ↓
Clave secreta
       ↓
Mensaje cifrado
       ↓
Clave secreta
       ↓
Mensaje original
```

#### Ejemplo sencillo

Ana y Luis acuerdan utilizar la clave:

```text
1234
```

Ana cifra el mensaje:

```text
Cliente confirmado
```

Luis utiliza la misma clave para recuperar el mensaje.

#### Ventajas

- Muy rápido.
- Consume pocos recursos.
- Ideal para grandes volúmenes de información.

#### Inconvenientes

- La clave debe compartirse.
- Si alguien obtiene la clave, podrá leer toda la información.

---

### AES (Advanced Encryption Standard)

#### ¿Qué es?

AES es uno de los algoritmos de cifrado simétrico más utilizados en el mundo.

#### ¿Para qué sirve?

Permite proteger:

- Datos almacenados.
- Archivos.
- Aplicaciones.
- Comunicaciones seguras.

#### Ejemplo conceptual

```text
Documento
     ↓
AES + Clave
     ↓
Documento protegido
```

#### ¿Dónde se utiliza?

- HTTPS.
- Redes WiFi.
- Aplicaciones empresariales.
- Servicios en la nube.

AES es actualmente uno de los estándares de seguridad más utilizados.

---

### Cifrado asimétrico

#### ¿Qué es?

El cifrado asimétrico utiliza dos claves distintas:

- Clave pública.
- Clave privada.

Estas claves están relacionadas matemáticamente.

#### ¿Para qué sirve?

Permite proteger comunicaciones sin necesidad de compartir previamente una clave secreta.

#### ¿Cuándo se utiliza?

- HTTPS.
- Certificados digitales.
- Firma digital.
- Intercambio seguro de información.

#### Funcionamiento

```text
Clave pública
      ↓
Cifrar
      ↓
Mensaje protegido
      ↓
Clave privada
      ↓
Descifrar
```

#### Ejemplo sencillo

Luis publica su clave pública.

Ana cifra un mensaje utilizando esa clave.

Solamente Luis, mediante su clave privada, podrá descifrarlo.

#### Ventajas

- No requiere compartir una clave secreta.
- Facilita la autenticación.

#### Inconvenientes

- Es más lento que el cifrado simétrico.
- Requiere más recursos de procesamiento.

---

### RSA

#### ¿Qué es?

RSA es uno de los algoritmos de cifrado asimétrico más conocidos y utilizados.

#### ¿Para qué sirve?

Se utiliza para:

- Intercambio seguro de claves.
- Certificados digitales.
- Firma digital.

#### Ejemplo conceptual

```text
Mensaje
    ↓
Clave pública RSA
    ↓
Mensaje cifrado
    ↓
Clave privada RSA
    ↓
Mensaje original
```

---

### ECC (Elliptic Curve Cryptography)

#### ¿Qué es?

ECC es un algoritmo de cifrado asimétrico basado en curvas elípticas.

#### ¿Para qué sirve?

Permite obtener altos niveles de seguridad utilizando claves más pequeñas que RSA.

#### ¿Dónde se utiliza?

- Teléfonos móviles.
- Dispositivos IoT.
- Aplicaciones web modernas.

#### Ventajas

- Menor tamaño de claves.
- Mayor eficiencia.
- Menor consumo de recursos.

---

### Comparación entre cifrado simétrico y asimétrico

| Característica | Cifrado Simétrico | Cifrado Asimétrico |
|---|---|---|
| Número de claves | 1 | 2 |
| Velocidad | Muy alta | Menor |
| Consumo de recursos | Bajo | Más alto |
| Compartir claves | Necesario | No necesario |
| Uso habitual | Datos y archivos | Identidad y autenticación |

---

### Firma digital

#### ¿Qué es?

La firma digital es un mecanismo que permite demostrar:

- Quién ha enviado un documento.
- Que el documento no ha sido modificado.

No se trata de una imagen con una firma manuscrita.

Es una prueba matemática.

#### ¿Para qué sirve?

Garantiza:

##### Autenticidad

Permite saber quién generó el documento.

##### Integridad

Permite comprobar que el documento no ha sido alterado.

##### No repudio

Impide que el autor niegue posteriormente haber enviado el documento.

#### Ejemplo

Una empresa genera una factura:

```text
Factura Nº 1001
Importe: 250 €
```

La factura se firma digitalmente.

El cliente puede verificar que:

- La factura fue emitida por la empresa.
- El importe no fue modificado.

---

### Entidad certificadora

#### ¿Qué es?

Una entidad certificadora es una organización de confianza encargada de verificar identidades digitales.

#### ¿Para qué sirve?

Permite confiar en que una clave pública pertenece realmente a quien afirma ser su propietario.

#### Ejemplo cotidiano

Cuando una administración pública emite un DNI, confiamos en la identidad de una persona porque una autoridad la ha verificado previamente.

Las entidades certificadoras realizan una función similar en Internet.

#### Ejemplo en la web

Cuando visitamos una página HTTPS y vemos el icono del candado en el navegador, normalmente existe un certificado digital emitido por una entidad certificadora de confianza.

---

### Cifrado híbrido

#### ¿Qué es?

El cifrado híbrido combina:

- Cifrado simétrico.
- Cifrado asimétrico.

#### ¿Por qué se utiliza?

Porque aprovecha las ventajas de ambos sistemas.

##### Del cifrado simétrico

- Rapidez.

##### Del cifrado asimétrico

- Seguridad en el intercambio de claves.

#### Funcionamiento simplificado

```text
Datos
 ↓
AES
 ↓
Datos cifrados
```

```text
Clave AES
 ↓
RSA o ECC
 ↓
Clave protegida
```

#### Beneficio

Se obtiene:

- Seguridad.
- Rapidez.
- Eficiencia.

Por esta razón, HTTPS utiliza este enfoque.

---

### Hashing

#### ¿Qué es?

El hashing es un proceso que transforma información en una huella digital denominada hash.

#### Características

- No está diseñado para recuperar el valor original.
- Produce siempre una salida de tamaño fijo.
- Cambios muy pequeños generan hashes completamente distintos.

#### Ejemplo

Texto original:

```text
Producto
```

Hash generado:

```text
A94F23D981A3...
```

Si cambiamos una única letra:

```text
producto
```

Nuevo hash:

```text
8BB6C102FA77...
```

El resultado cambia completamente.

#### ¿Para qué sirve?

- Comprobar integridad.
- Verificar archivos.
- Almacenar contraseñas.

---

### MD5

#### ¿Qué es?

MD5 es una función hash muy conocida que fue ampliamente utilizada durante años.

#### Ventajas

- Muy rápida.
- Fácil de implementar.

#### Inconvenientes

Actualmente presenta vulnerabilidades conocidas.

Por ello ya no se recomienda para proteger información crítica ni contraseñas.

#### Uso actual

Principalmente en sistemas heredados o verificaciones básicas de archivos.

---

### SHA-2

#### ¿Qué es?

SHA-2 es una familia de algoritmos hash más segura que MD5.

#### Versiones más conocidas

- SHA-224
- SHA-256
- SHA-384
- SHA-512

#### ¿Para qué sirve?

- Certificados digitales.
- Firmas digitales.
- Verificación de integridad.

#### Ejemplo

```text
Documento
      ↓
SHA-256
      ↓
Hash de seguridad
```

Actualmente es uno de los algoritmos hash más utilizados.

---

### BCRYPT

#### ¿Qué es?

BCRYPT es un algoritmo especialmente diseñado para almacenar contraseñas de forma segura.

#### ¿Por qué es importante?

Los atacantes suelen intentar descubrir contraseñas realizando millones de intentos automáticos.

BCRYPT está diseñado para ralentizar significativamente esos ataques.

#### Funcionamiento

```text
Contraseña
      ↓
BCRYPT
      ↓
Hash seguro
```

#### Ventaja principal

Nunca se almacena la contraseña original.

Solamente se almacena el resultado generado por BCRYPT.

---

## Analogía del mundo real

Imaginemos una biblioteca.

- Los libros representan la información.
- Un candado representa el cifrado.
- Una llave representa una clave.
- Un carnet oficial representa un certificado digital.
- La firma del bibliotecario representa una firma digital.
- La huella única de cada libro representa un hash.

Si alguien modifica una página de un libro, la huella cambiará y podremos detectarlo inmediatamente.

De la misma forma, la criptografía permite detectar modificaciones y proteger la información.

---

## Ejemplos prácticos

### Ejemplo 1: Protección de datos de un cliente mediante AES

```text
Cliente: Juan Pérez
```

#### Explicación

- El nombre del cliente es información sensible.
- Se cifra utilizando AES y una clave secreta.
- Solo quien posea la clave podrá leer los datos.

---

### Ejemplo 2: Almacenamiento seguro de contraseñas

```text
Contraseña: MiClave123
```

Resultado almacenado:

```text
$2b$12$P8X4K6z...
```

#### Explicación línea por línea

- El usuario introduce una contraseña.
- La contraseña se procesa mediante BCRYPT.
- El sistema guarda únicamente el hash generado.
- La contraseña real no queda almacenada.

---

### Ejemplo 3: Firma digital de un pedido

```text
Pedido Nº 2001
Producto: Monitor
Cantidad: 2
```

#### Explicación

- La empresa firma digitalmente el pedido.
- El cliente recibe el documento.
- Puede verificar quién lo envió.
- Puede comprobar que nadie cambió los datos del pedido.

---

### Ejemplo 4: Conexión segura a una tienda online

```text
https://tiendaonline.com
```

#### Explicación paso a paso

1. El navegador solicita el certificado digital.
2. Comprueba que el certificado es válido.
3. Intercambia claves de forma segura.
4. Se establece una comunicación cifrada.
5. Los datos viajan protegidos.

---

## Errores frecuentes

### Confundir hash con cifrado

Error:

Pensar que un hash puede descifrarse.

Realidad:

Las funciones hash no están diseñadas para recuperar el texto original.

---

### Almacenar contraseñas en texto plano

Error:

```text
juan123
```

guardado directamente en una base de datos.

Realidad:

Las contraseñas deben almacenarse utilizando algoritmos especializados como BCRYPT.

---

### Compartir claves privadas

Error:

Enviar la clave privada por correo electrónico o mensajería.

Realidad:

La clave privada nunca debe compartirse.

---

### Utilizar MD5 para proteger contraseñas

Error:

Seguir utilizando algoritmos antiguos.

Realidad:

Se recomienda utilizar BCRYPT o algoritmos modernos equivalentes.

---

### Pensar que HTTPS solo es necesario en tiendas online

Error:

Creer que únicamente es útil para pagos.

Realidad:

Protege cualquier intercambio de información entre navegador y servidor.

---

## Resumen

- La criptografía protege información frente a accesos no autorizados.
- El cifrado simétrico utiliza una única clave.
- AES es el algoritmo simétrico más utilizado.
- El cifrado asimétrico utiliza una clave pública y una clave privada.
- RSA y ECC son algoritmos asimétricos muy utilizados.
- La firma digital garantiza autenticidad e integridad.
- Las entidades certificadoras validan identidades digitales.
- El cifrado híbrido combina seguridad y rendimiento.
- El hashing genera una huella digital de los datos.
- MD5 es un algoritmo antiguo que ya no se considera seguro para usos críticos.
- SHA-2 es una familia de algoritmos hash ampliamente utilizada.
- BCRYPT es una excelente opción para proteger contraseñas.

---

## Conceptos clave

| Concepto | Descripción |
|-----------|-------------|
| Criptografía | Técnicas para proteger información mediante algoritmos matemáticos. |
| Cifrado | Proceso de transformar información legible en información protegida. |
| Clave | Valor utilizado para cifrar o descifrar datos. |
| Cifrado Simétrico | Sistema que utiliza una única clave. |
| AES | Algoritmo de cifrado simétrico ampliamente utilizado. |
| Cifrado Asimétrico | Sistema basado en clave pública y clave privada. |
| RSA | Algoritmo asimétrico tradicional. |
| ECC | Algoritmo asimétrico eficiente basado en curvas elípticas. |
| Firma Digital | Mecanismo para garantizar autenticidad e integridad. |
| Certificado Digital | Documento electrónico que asocia una identidad a una clave pública. |
| Entidad Certificadora | Organización que valida identidades digitales. |
| Cifrado Híbrido | Combinación de cifrado simétrico y asimétrico. |
| Hash | Huella digital generada a partir de datos. |
| MD5 | Algoritmo hash antiguo con vulnerabilidades conocidas. |
| SHA-2 | Familia moderna de algoritmos hash seguros. |
| BCRYPT | Algoritmo diseñado para almacenar contraseñas de forma segura. |

---

## Ejercicios de reflexión

1. ¿Por qué es necesario utilizar criptografía cuando enviamos información por Internet?

2. ¿Cuál es la principal diferencia entre una clave pública y una clave privada?

3. ¿Por qué el cifrado simétrico suele utilizarse para proteger grandes cantidades de información?

4. ¿Qué ventajas ofrece el cifrado híbrido frente al uso exclusivo de cifrado simétrico o asimétrico?

5. ¿Por qué se recomienda utilizar BCRYPT para almacenar contraseñas en lugar de guardarlas directamente en la base de datos?

6. ¿Qué función cumple una entidad certificadora cuando visitamos una página web segura mediante HTTPS?

7. ¿Cuál es la diferencia entre cifrar información y calcular un hash?

8. ¿Qué problemas podría ocasionar compartir una clave privada con otras personas?
