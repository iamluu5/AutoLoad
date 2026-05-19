# AutoLoad

Proyecto PHP simple con carga automática de clases mediante Composer.

**Alumno:** Luisa De Gracia

**Curso:** Desarrollo de Software VII

**Profesora:** Irina Fong

## Estructura del proyecto

- `App/` — Clases de la aplicación, por ejemplo `App\User`
- `Database/` — Modelos y clases relacionadas con datos, por ejemplo `Database\Model\ProductModel`
- `Prueba.php` — Archivo de prueba para usar la carga automática
- `composer.json` — Configuración de autoload PSR-4
- `vendor/` — Dependencias y autoload generados por Composer
- `img/terminal.png` — Imagen incluida en este README

## Uso

1. Ejecutar `composer dump-autoload` si se hacen cambios en las clases o el autoload.
2. Incluir `vendor/autoload.php` en tu archivo PHP principal.
3. Crear instancias de clases usando los namespaces definidos en `composer.json`.

## Ejemplo de carga automática

```php
require __DIR__ . '/vendor/autoload.php';

use App\User;
use Database\Model\ProductModel;

$user = new User();
$product = new ProductModel();
```

## Imagen
Ejecución de prueba.php
![Terminal](img/terminal.png)

Ejecución de index.php 
![Index] (img/index.jpeg)