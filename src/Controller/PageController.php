<?php

namespace App\Controller;
use App\Entity\Livraison;
use App\Form\LivraisonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Produit;
use App\Form\Produit1Type;
use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository; 
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LivraisonRepository;
use App\Repository\CollecteRepository;
use App\Repository\DepotRepository;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use App\Form\CommandeType;


final class PageController extends AbstractController
{
    #[Route('/back/order', name: 'back_order')]
    public function indexo(
        CommandeRepository $commandeRepository,
        LivraisonRepository $livraisonRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        // Handling Commande Form
        $commande = new Commande();
        $commandeForm = $this->createForm(CommandeType::class, $commande);
        $commandeForm->handleRequest($request);

        if ($commandeForm->isSubmitted() && $commandeForm->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('back_order', [], Response::HTTP_SEE_OTHER);
        }

        // Handling Livraison Form
        $livraison = new Livraison();
        $livraisonForm = $this->createForm(LivraisonType::class, $livraison);
        $livraisonForm->handleRequest($request);

        if ($livraisonForm->isSubmitted() && $livraisonForm->isValid()) {
            // Assign Commande to Livraison (Ensure it's linked)
            $commandeId = $request->request->get('commande_id'); // Get selected Commande ID from form
            if ($commandeId) {
                $commande = $commandeRepository->find($commandeId);
                if ($commande) {
                    $livraison->setCommande($commande);
                }
            }

            // Ensure type is set before calculating prix
            if (!$livraison->getMode()) {
                throw new \Exception('Type of delivery must be selected');
            }

            // Calculate price
            $livraison->calculatePrix();

            $entityManager->persist($livraison);
            $entityManager->flush();

            return $this->redirectToRoute('back_order', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backend/order.html.twig', [
            'controller_name' => 'PageController',
            'commandes' => $commandeRepository->findAll(),
            'livraisons' => $livraisonRepository->findAll(),
            'commandeForm' => $commandeForm->createView(),
            'livraisonForm' => $livraisonForm->createView(),
        ]);
    }


    //Change controller
    #[Route('/back/dropoff', name: 'back_dropoff')]
    public function indexd(CollecteRepository $collecteRepository, DepotRepository $depotRepository): Response
    {
        return $this->render('backend/dropoff.html.twig', [
            'controller_name' => 'PageController',
            'depots' => $depotRepository->findAll(),
            'collectes' => $collecteRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/back/blog', name: 'back_blog')]
    public function indexb(): Response
    {
        return $this->render('backend/blog.html.twig', [
            'controller_name' => 'PageController',
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
    
    #[Route('/back/products', name: 'back_products', methods:['GET'])]
    public function indexp1(
        ProduitRepository $produitRepository,
        CategorieRepository $categorieRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        // Gestion du formulaire Produit
        $produit = new Produit();
        $produitForm = $this->createForm(Produit1Type::class, $produit);
        $produitForm->handleRequest($request);
    
        if ($produitForm->isSubmitted() && $produitForm->isValid()) {
            $entityManager->persist($produit);
            $entityManager->flush();
            return $this->redirectToRoute('back_products', [], Response::HTTP_SEE_OTHER);
        }
    
        // Gestion du formulaire Catégorie
        $categorie = new Categorie();
        $categorieForm = $this->createForm(CategorieType::class, $categorie);
        $categorieForm->handleRequest($request);
    
        if ($categorieForm->isSubmitted() && $categorieForm->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();
            return $this->redirectToRoute('back_products', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('backend/products.html.twig', [
            'controller_name' => 'PageController',
            'produits' => $produitRepository->findAll(),
            'categories' => $categorieRepository->findAll(),
            'produitForm' => $produitForm->createView(),
            'categorieForm' => $categorieForm->createView(),
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



    //front
    #[Route('/front/order', name: 'front_order')]
    public function indexof(CommandeRepository $commandeRepository, LivraisonRepository $livraisonRepository): Response
    {
        return $this->render('frontend/order.html.twig', [
            'controller_name' => 'PageController',
            'commandes' => $commandeRepository->findAll(),
            'livraisons' => $livraisonRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/front/dropoff', name: 'front_dropoff')]
    public function indexdf(CollecteRepository $collecteRepository, DepotRepository $depotRepository): Response
    {
        return $this->render('frontend/dropoff.html.twig', [
            'controller_name' => 'PageController',
            'depots' => $depotRepository->findAll(),
            'collectes' => $collecteRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/front/blog', name: 'front_blog')]
    public function indexbf(): Response
    {
        return $this->render('backend/blog.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/event', name: 'front_event')]
    public function indexef(): Response
    {
        return $this->render('backend/event.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    //Change controller
    #[Route('/front/products', name: 'front_products')]
    public function indexpf(ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {

        return $this->render('frontend/products.html.twig', [
            'controller_name' => 'PageController',
            'produits' => $produitRepository->findAll(),
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    //Change controller
    #[Route('/front/user', name: 'back_user')]
    public function indexf(): Response
    {
        return $this->render('backend/user.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
