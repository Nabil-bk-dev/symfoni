<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\MusicRepository;
=======
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MusicRepository;
use App\Form\MusicType;
use App\Entity\Music;

>>>>>>> 80fffa8 (ajout des fichiers)
final class MusicController extends AbstractController
{
    #[Route('/', name: 'app_music')]
    public function index(
        MusicRepository $musicRepo
    ): Response
    {
        $musics = $musicRepo->findAll();

        return $this->render('music/index.html.twig', [
<<<<<<< HEAD
            'musicList' => $musics,
=======
            'musicsList' => $musics,
        ]);
    }

    #[ROUTE('/music/new', name: "app_music_new")]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $music = new Music();
        $form = $this->createForm(MusicType::class, $music);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $music = $form->getData();

            $entityManager->persist($music);
            $entityManager->flush();

            return $this->redirectToRoute('app_music');
        }

        return $this->render('music/new.html.twig', [
            'form' => $form,
>>>>>>> 80fffa8 (ajout des fichiers)
        ]);
    }
}
