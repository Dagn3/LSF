<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Fromage;
use App\Entity\Message;
use App\Form\MessageType;
use App\Form\SearchForm;
use App\Repository\FromageRepository;
use Doctrine\ORM\EntityManagerInterface;
use PharIo\Manifest\Email;
use PHPUnit\Framework\Constraint\IsEmpty;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(FromageRepository $fromageRepository, Request $request): Response
    {

        $allFromages = $fromageRepository->findAll();
        $rand_keys = array_rand($allFromages, 5);
        $fromages[] = new Fromage();

        for ($i = 0; $i <= 4; $i++) {
            $fromages[$i] = $allFromages[$rand_keys[$i]];
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'fromages' => $fromages,

        ]);
    }

    /**
     * @Route("/fromages", name="app_fromages")
     */
    public function fromages(FromageRepository $fromageRepository, Request $request): Response
    {

        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        $fromages = $fromageRepository->findSearch($data);
        
        if (count($fromages ) === 0) {
            $this->addFlash('EmptyFrom', 'YA R');
            ;
        } 


        return $this->render('home/fromages.html.twig', [
            'controller_name' => 'FromagesController',
            'fromages' => $fromages,
            'form' => $form->createView()
        ]);
    }

      /**
     * Matches /fromages/*
     *
     * @Route("/fromages/{slug}", name="app_fromages_show")
     */
    public function show($slug, FromageRepository $fromageRepository)
    {
        $fromage = $fromageRepository->findOneBySlug($slug);

        return $this->render('home/fromageView.html.twig', [
            'fromage'=>$fromage
        ]);
    }


    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact(Request $request, EntityManagerInterface $entityManager): Response
    {
        $mess = new Message;
        $form = $this->createForm(MessageType::class, $mess);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var Message $message */
            $mess = $form->getData();

            //Check honeypot
            if ($mess->getEmail()) {
                return new JsonResponse("Acces restreint");            }
            ;

            //If honeypot not set swap the hidden email input
            if ($mess->getFhjgiz48()) {
                $mess->setEmail($mess->getFhjgiz48());
            }

            
            $entityManager->persist($mess);
            $entityManager->flush();
            $this->addFlash('successMess', 'Message envoyé avec succés.');
            return $this->redirectToRoute('app_contact');
        };
        

        return $this->render('home/contact.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mentions", name="app_mentions")
     */
    public function mentions(): Response
    {



        return $this->render('home/mentions.html.twig', [
            'controller_name' => 'mentionsController',

        ]);
    }
}
