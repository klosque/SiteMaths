<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\ORM\EntityManagerInterface;

use App\Controller\FrontController;
class SiteController extends FrontController
{

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em);
    }

	/**
    * @Route("/",name="home")
    */
    public function Home()
    {
        return $this->render('site/home.html.twig', [
            'menu' => $this->menu
        ]);
      
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
