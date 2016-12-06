<?php

namespace MKapp\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Expressive\Twig\TwigRenderer;

class TestePageAction
{


    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {

        return new HtmlResponse("<h3>Está é uma página de teste</h3>");
    }
}
