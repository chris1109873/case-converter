# chris1109873/case-converter

A package for converting camel case to snake case and vice versa.

## Installation

```bash
composer require chris1109873/case-converter
```

## Usage

```php

use Chris\CaseConverter;

$converter = new CaseConverter('snake_to_camel');
echo $converter->snakeToCamel(); // 'snakeToCamel'

$converter = new CaseConverter('camelToSnake');
echo $converter->camelToSnake(); // 'camel_to_snake'
```