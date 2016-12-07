<?php

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
