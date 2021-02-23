<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/home")
     */
    public function home(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/home/dashboard")
     */
    public function dashboard() : Response
    {
        $title = "Environmental Data Dashboard";

        return $this->render('dashboard/dashboard.html.twig', [
            'title' => $title
        ]);

    }

}
