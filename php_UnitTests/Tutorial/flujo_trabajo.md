# Flujo de trabajo para configurar y trabajar con phpUnit

# La carpeta Tutorial contiene un directorio llamado src que contiene el fichero Operations.php

```php
<?php

class Operations {

    public function _constructor() {}

    public function sum($a, $b) {
        return $a + $b;
    }

    public function division($a, $b) {
        return $a / $b;
    }
}
```

## En la carpeta Tutorial, ejecutar

```bash
composer require --dev phpunit/phpunit ^9
```

## Modificar composer.json

```JSON
{
    "autoload": {
        "classmap": [
            "src/"
        ]
    },
    "require-dev": {
        "phpunit/phpunit": "^9"
    }
}
```

## Ejecutar

```bash
composer dump-autoload -o
```
## Crear la carpeta tests

## Crear el archivo OperationsTests.php en la carpeta tests

```php
<?php
use PHPUnit\Framework\TestCase;
require_once 'src/Operations.php';

class OperationsTest extends TestCase {

    private $op;

    public function setUp(): void {
        $this->op = new Operations();
    }

    public function testSumWithTwoValues() {
       
        $this->assertEquals(5, $this->op->sum(2, 3));
    }

}
?>
```


## Ejecutar test

```bash
./vendor/bin/phpunit test
```