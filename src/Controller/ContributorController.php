<?php


namespace App\Controller;


use App\Repository\ContributorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContributorController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     * @param ContributorRepository $repository
     * @return Response
     */
    public function home(ContributorRepository $repository): Response{
        $contributors = $repository->findAll();
        return $this->render('contributor/index.html.twig',[
            'contributors'=>$contributors
        ]);
    }
}