<?php

namespace MKapp\Infrastructure;

use \MKapp\Service\BootstrapInterface;

/**
 * Description of Bootstrap
 *
 * @author DELL
 */
class Bootstrap implements BootstrapInterface{
    //put your code here
    public function create() {
        require __DIR__.'/config/doctrine.php';
    }

}
