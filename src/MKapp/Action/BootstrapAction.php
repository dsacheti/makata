<?php

namespace MKapp\Action;

use MKapp\Service\BootstrapInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class BootstrapAction
{

    /**
     * @var BootstrapInterface
     */
    private $boot;
   

    public function __construct(BootstrapInterface $boot)
    {
        $this->boot = $boot;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
       $this->boot->create();
       $next($request,$response);
    }
}
