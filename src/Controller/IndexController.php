<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Company;
use App\Form\CompanyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class IndexController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        $company = new Company();
        $company->addresses[] = Address::forCompany('Hamburg');
        $company->addresses[] = Address::forCompany('New York');

        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        return $this->render('index.html.twig', ['form' => $form->createView()]);
    }
}
