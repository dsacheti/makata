<?php

namespace MKapp\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;
use Doctrine\ORM\EntityManager;
use MKapp\Entity\Category;

class TestePageAction
{

    /**
     * @var Template\TemplateRendererInterface
     */
    private $template;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    public function __construct(EntityManager $em, Template\TemplateRendererInterface $template){
        
        $this->em = $em;
        $this->template = $template;
    }


    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $category = new Category();
        $category->setName("Minha categoria de teste");
        $this->em->persist($category);
        $this->em->flush();
        
        $categorias = $this->em->getRepository(\MKapp\Entity\Category::class)->findAll();
        return new HtmlResponse($this->template->render("app::teste",[
            'data' => 'Dados passados para o template',
            'categorias' => $categorias
            
        ]));
    }
}
