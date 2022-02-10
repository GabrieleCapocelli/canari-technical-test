<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcodechetsController extends AbstractController
{
    #[Route('/ecodechets', name: 'ecodechets')]
    public function index(): Response
    {
        return $this->render('ecodechets/index.html.twig', [
            'controller_name' => 'EcodechetsController',
        ]);
    }

    #[Route('/ecodechets/employee-list', name: 'ecodechets_employee-list')]
    public function employeeList(): Response
    {
        return $this->render('ecodechets/employee-list.html.twig');
    }

    #[Route('/ecodechets/employee', name: 'ecodechets_employee')]
    public function employee(): Response
    {
        return $this->render('ecodechets/employee.html.twig');
    }
}
