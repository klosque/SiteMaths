<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Classe;

class FrontController extends AbstractController
{
	public $menu;

	function __construct(EntityManagerInterface $em)
	{
		$this->menu = $em->getRepository(Classe::class)->findAll();
	}
    
}
