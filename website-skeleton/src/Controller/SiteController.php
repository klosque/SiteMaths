<?php

namespace App\Controller;


use App\Entity\Classe;
use App\Form\ClasseType;
use App\Repository\CLasseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class SiteController extends AbstractController
{

	/**
    * @Route("/",name="home")
    */

    public function Home()
    {

        $repository = $this->getDoctrine()->getRepository(Classe::class);
// look for *all* Product objects
        $classe = $repository->findAll(); 
        return $this-> render('site/home.html.twig',$classe);
    }
    

    /**
    * @Route("/admin",name="admin")
    * @IsGranted("ROLE_ADMIN")
    */
    public function admin()
    {

       return $this-> render('site/admin.html.twig');
   }

    /**
    * @Route("/loged",name="loged")
    */
    public function loged()
    {

       return $this-> render('site/loged.html.twig');
   }
}
