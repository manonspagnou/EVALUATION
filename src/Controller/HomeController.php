<?php

namespace App\Controller;

use App\Repository\DegreeRepository;
use App\Repository\UserRepository;
use App\Repository\YearRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home.index")
     */
    public function index(DegreeRepository $degreeRepo, YearRepository $yearRepo, Request $request, UserRepository $userRepo)
    {
        $degrees = $degreeRepo->findAll();
        $years = $yearRepo->findAll();
        $users = [];
        if($request->request->count())
        {
            $degree = $request->request->get('degree');
            $year = $request->request->get('year');

            //dd($degree, $year);

            $users = $userRepo->search($degree, $year);
            //dd($users);

        }

        return $this->render('home.html.twig', ['degrees'=>$degrees, 'years'=>$years, 'users'=>$users]);

    }
}