<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbsractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome"/{name}, name="welcome")
     * @param string &name
     * @return Response
     */
    public function index(string $name)
    {
        return $this->render('welcome/index.html.twig';
        }
}

/**
 * ("/", name="hello_page")

 */
public function homepage()
 {$name = $request->query->get(key:"name");
    return $this->render('hello_page.html.twig',[
        'some_var'=>$name,
         'some_var01'=>'World01',
]);
}
