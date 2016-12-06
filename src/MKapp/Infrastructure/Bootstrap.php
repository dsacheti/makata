<?php

/*
 * Criado no NetBeans
 * por Dalcinei Sacheti
 * dalcinei@gmail.com
 * pode usar este arquivo, mas deixe este cabeçalho
 */

namespace MKapp\Infrastructure;

use \MKapp\Service\BoostrapInterface;

/**
 * Description of Bootstrap
 *
 * @author DELL
 */
class Bootstrap implements BoostrapInterface{
    //put your code here
    public function create() {
        require __DIR__.'/config/doctrine.php';
    }

}
