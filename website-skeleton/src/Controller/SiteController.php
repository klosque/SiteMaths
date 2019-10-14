<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
    * @Route("/",name="home")
    */

    public function Home()
    {
    	return $this-> render('site/home.html.twig');
    }

    /**
    * @Route("/add",name="add")
    */

    public function ajout()
    {

    	    return $this-> render('site/ajout.html.twig');
    }
}
