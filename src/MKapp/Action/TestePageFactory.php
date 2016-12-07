<?php

namespace MKapp\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Doctrine\ORM\EntityManager;

class TestePageFactory
{
    public function __invoke(ContainerInterface $container)
    {
        
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new TestePageAction($container->get(EntityManager::class), $template);
    }
}
