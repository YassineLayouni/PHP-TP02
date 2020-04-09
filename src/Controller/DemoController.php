<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/")
     */
    
     /*public function test(){
        return $this->render('demo/test.html.twig',[
            'title' => 'Les amies',
            'age' =>19,
        ]);
    }*/
    
    public function index()
    {

        return $this->render('demo/index.html.twig',[
            'controller_name' => 'DemoController',
        ]);
    }

    /*public function testIndex()
    {

        return $this->render('demo/testIndex.html.twig',[
            'controller_name' => 'DemoController',
        ]);
    }*/
}