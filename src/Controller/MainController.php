<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param Request request
     * @return Response
     */
    public function index()
    {
        //Old method to return data
        // return new Response('<h1>Welcome</h1>');

        //using views:
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     */
    public function custom(Request $request)
    {
        //old way just for study purposes
        // return new Response("<h1>Custom! $name</h1>");
        $name = $request->get('name');
        
        return $this->render('home/custom.html.twig',
                                [
                                    'name' => $name,
                                ]
                            );
    }
}
