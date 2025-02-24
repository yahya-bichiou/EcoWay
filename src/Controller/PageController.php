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

    //gestion produit back  /////////////////////////////////////////////////////////////////
               //add//
#[Route('/back/products', name: 'back_products', methods: ['GET', 'POST'])]
public function manageProductsAndCategories(
    Request $request, 
    EntityManagerInterface $entityManager, 
    ProduitRepository $produitRepository, 
    CategorieRepository $categorieRepository
): Response {
    // Gestion du produit
    $produit = new Produit();
    $form = $this->createForm(Produit1Type::class, $produit);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $uploadsDir = $this->getParameter('uploads_directory');

            if (!is_dir($uploadsDir)) {
                mkdir($uploadsDir, 0775, true);
                chmod($uploadsDir, 0775);
            }

            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move($uploadsDir, $newFilename);
            $produit->setImage($newFilename);
        }

        $entityManager->persist($produit);
        $entityManager->flush();

        return $this->redirectToRoute('back_products');
    }

    // Gestion de la catégorie
    $categorie = new Categorie();
    $categorieForm = $this->createForm(CategorieType::class, $categorie);
    $categorieForm->handleRequest($request);

    if ($categorieForm->isSubmitted() && $categorieForm->isValid()) {
        $entityManager->persist($categorie);
        $entityManager->flush();

        return $this->redirectToRoute('back_products');
    }

    return $this->render('backend/products.html.twig', [
        'produits' => $produitRepository->findAll(),
        'categories' => $categorieRepository->findAll(),
        'form' => $form->createView(),
        'categorieForm' => $categorieForm->createView(),
    ]);
}
               ///supprimer catégorie///////////
#[Route('/cat/delet/{id}', name: 'back_categorie_delete', methods: ['POST'])]
public function deletecat(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete' . $categorie->getId(), $request->request->get('_token'))) {
        $entityManager->remove($categorie);
        $entityManager->flush();
    }

    return $this->redirectToRoute('back_products');
}
            ///////supprimer produit///
#[Route('/back/products/{id}', name: 'back_produit_delete', methods: ['POST'])]
public function deletepro(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
        $entityManager->remove($produit);
        $entityManager->flush();
    }

    return $this->redirectToRoute('back_products');
}

        /////////modifier produit///////////
#[Route('/back/products/{id}/edit', name: 'back_produit_edit', methods: ['GET', 'POST', 'PUT'])]
public function editpro(Request $request,Produit $produit, EntityManagerInterface $entityManager): Response
{
    if (!$produit) {
        return $this->redirectToRoute('back_products');
    }
    $form = $this->createForm(Produit1Type::class, $produit);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush(); 
        return $this->redirectToRoute('back_products'); 
    }

    return $this->render('produitcon/backedit.html.twig', [
        'form' => $form->createView(),
        'produit' => $produit,
    ]);
}
                    /////////////modifier categorie/////////////
#[Route('/back/categorie/{id}/edit', name: 'back_categorie_edit', methods: ['GET', 'POST'])]
public function editcat(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
{  $form = $this->createForm(CategorieType::class, $categorie);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        return $this->redirectToRoute('back_products', [], Response::HTTP_SEE_OTHER);
    }
    return $this->render('categorie/backedit.html.twig', [
        'categorie' => $categorie,
        'form' => $form->createView(),
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
    #[Route('/front/products', name: 'front_products', methods: ['GET'])]
    public function frontIndex(
        ProduitRepository $produitRepository,
        CategorieRepository $categorieRepository
    ): Response {
        return $this->render('frontend/products.html.twig', [
            'produits' => $produitRepository->findAll(),
            'categories' => $categorieRepository->findAll(),
        ]);
    }
    #[Route('/front/showproduit', name: 'app_produitcon_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produitcon/frontshow.html.twig', [
            'produit' => $produit,
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
