<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoogleController extends AbstractController
{
    public function __construct(
        ClientRegistry $clientRegistry
    ){
        $this->clientRegistry = $clientRegistry;
    }

    #[Route('/connect/google', name: 'connect_google')]
    public function connectAction(): Response
    {
        return $this->clientRegistry->getClient('google')->redirect([], []);
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectCheckAction(): RedirectResponse
    {
        return $this->redirectToRoute('app_home');
    }
}