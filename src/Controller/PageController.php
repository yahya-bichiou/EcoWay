<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LivraisonRepository;
use App\Repository\CommandeRepository;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use App\Form\CommandeType;


final class PageController extends AbstractController
{
    #[Route('/back/order', name: 'back_order')]
    public function indexo(CommandeRepository $commandeRepository, LivraisonRepository $livraisonRepository): Response
    {
        return $this->render('backend/order.html.twig', [
            'controller_name' => 'PageController',
            'commandes' => $commandeRepository->findAll(),
            'livraisons' => $livraisonRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/back/dropoff', name: 'back_dropoff')]
    public function indexd(): Response
    {
        return $this->render('backend/dropoff.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/back/blog', name: 'back_blog')]
    public function indexb(PostRepository $postRepository, CommentaireRepository $commentaireRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $commentForm = $this->createForm(CommentaireType::class, $commentaire);
        $commentForm->handleRequest($request);
        $post = new Post();
        $postForm = $this->createForm(PostType::class, $post);
        $postForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        if ($postForm->isSubmitted() && $postForm->isValid()) {
            $entityManager->persist($post);
            $entityManager->flush();
            $imageFile = $postForm->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
                $post->setImage($newFilename);
            }
    
            $entityManager->persist($post);
            $entityManager->flush();
        }

        return $this->render('backend/blog.html.twig', [
            'controller_name' => 'PageController',
            'posts' => $postRepository->findAll(),
            'commentaires' => $commentaireRepository->findAll(),
            'post' => $post,
            'postForm' => $postForm,
            'commentaire' => $commentaire,
            'commentForm' => $commentForm,
        ]);
    }

    //Change controller
    #[Route('/back/event', name: 'back_event')]
    public function indexe(): Response
    {
        return $this->render('backend/event.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/back/products', name: 'back_products')]
    public function indexp(): Response
    {
        return $this->render('backend/products.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/back/user', name: 'back_user')]
    public function index(): Response
    {
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/blog', name: 'back_blog')]
    public function indexbf(PostRepository $postRepository, CommentaireRepository $commentaireRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $commentForm = $this->createForm(CommentaireType::class, $commentaire);
        $commentForm->handleRequest($request);
        $post = new Post();
        $postForm = $this->createForm(PostType::class, $post);
        $postForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        if ($postForm->isSubmitted() && $postForm->isValid()) {
            $entityManager->persist($post);
            $entityManager->flush();
            $imageFile = $postForm->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('uploads_directory'), $newFilename);
                $post->setImage($newFilename);
            }
    
            $entityManager->persist($post);
            $entityManager->flush();
        }

        return $this->render('frontend/blog.html.twig', [
            'controller_name' => 'PageController',
            'posts' => $postRepository->findAll(),
            'commentaires' => $commentaireRepository->findAll(),
            'post' => $post,
            'postForm' => $postForm,
            'commentaire' => $commentaire,
            'commentForm' => $commentForm,
        ]);
    }
}
