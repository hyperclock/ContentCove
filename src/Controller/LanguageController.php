<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LanguageController
{
    #[Route('/switch-language/{locale}', name: 'switch_language')]
    public function switchLanguage($locale, Request $request, SessionInterface $session): RedirectResponse
    {
        $session->set('_locale', $locale);
        $referer = $request->headers->get('referer');
        
        return new RedirectResponse($referer ?: '/');
    }
}
