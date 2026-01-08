<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Carrega o autoload do Composer
$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    throw new RuntimeException("vendor/autoload.php não encontrado. Rode: composer install");
}
require $autoload;

// Timezone padrão (ajuste se quiser)
date_default_timezone_set('America/Sao_Paulo');
