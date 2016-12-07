<?php

/* 
 * Criado no NetBeans
 * por Dalcinei Sacheti
 * dalcinei@gmail.com
 * pode usar este arquivo, mas deixe este cabeçalho
 */

ini_set('display_errors', true);
chdir(__DIR__);
require 'vendor/autoload.php';
/** @var \Interop\Container\ContainerInterface $container */
$container = require 'config/container.php';

/** @var \Zend\Expressive\Application $app */
$app = $container->get(\Zend\Expressive\Application::class);
$cli = $app->getContainer()->get('doctrine.cli');

require __DIR__.'/src/MKapp/Infrastructure/config/doctrine.php';

exit($cli->run());