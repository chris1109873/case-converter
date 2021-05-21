<?php 

require_once 'vendor/autoload.php';

use Chris\CaseConverter;

$converter = new CaseConverter('snake_to_camel');
echo $converter->snakeToCamel();

$converter = new CaseConverter('camelToSnake');
echo $converter->camelToSnake();
