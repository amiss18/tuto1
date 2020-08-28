<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
	public const ITEMS =[
		[
			'title' 	  => "The Best Years of Our Lives (1946)",
			"description" => " landmark, classic drama about three WWII veterans attempting readjustment to peacetime life and discovering that they have fallen behind. ",
			"picture"  	 =>"image-1.jpg",
		],
		[
			'title' 	  => "All Quiet On The Western Front (1930)",
			"description" => " Based on Erich Maria Remarque's timeless, pacifistic anti-war novel, this poetically brilliant epic about the horrors of war was hugely popular in its day ",
			"picture"  	 =>"image-2.jpg",
		],
		[
			'title' 	  => "Citizen Kane (1941)",
			"description" => " his is Welles' greatest achievement, and a landmark of cinema history - often voted the greatest film ever made ",
			"picture"  	 =>"image-3.jpg",
		],

		[
			'title' 	  => "he 400 Blows (Les Quatre cents coups) (1959)",
			"description" => " The 400 Blows marks the birth of legendary nouvelle vague character Antoine Doinel; his is the story of a 13-year-old ",
			"picture"  	 =>"image-1.jpg",
		],

		[
			'title' 	  => "The Adventures of Priscilla, Queen of the Desert (1994)",
			"description" => "The usually menacing British actor Terence Stamp does a complete turnaround as Bernadette, an aging transsexual who tours the backwaters...",
			"picture"  	 =>"image-3.jpg",
		],

		[
			'title' 	  => "Airplane! (1980)",
			"description" => " his spoof of the Airport series of disaster movies relies on ridiculous sight gags, groan-inducing dialogue, and deadpan acting... ",
			"picture"  	 =>"image-2.jpg",
		],

		];
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
			"items" => self::ITEMS,
        ]);
    }
}
