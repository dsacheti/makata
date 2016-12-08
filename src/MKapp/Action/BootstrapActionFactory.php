<?php

namespace MKapp\Action;

use Interop\Container\ContainerInterface;
use MKapp\Infrastructure\Bootstrap;

class BootstrapActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $bootstrap = new Bootstrap;
        return new BootstrapAction($bootstrap);
    }
}
