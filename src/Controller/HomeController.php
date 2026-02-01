<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\RateLimiter\RateLimiterFactory;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        Request $request,
        MailerInterface $mailer,
        RateLimiterFactory $contactFormLimiter
    ): Response    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // honeypot
            if ($form->get('website')->getData()) {
                return new Response('Spam détecté', 400);
            }

            // rate limit
            $limit = $contactFormLimiter->create($request->getClientIp());
            if (!$limit->consume()->isAccepted()) {
                return new Response('Too many attempts', 429);
            }

            $data = $form->getData();

            $email = (new Email())
                ->from($data['email'])
                ->to('ton@email.fr')
                ->subject('Message portfolio')
                ->text($data['message']);

            $mailer->send($email);
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
