<?php


namespace App\Controller;

use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use App\Form\ProgramType;
use App\Service\Slugify;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/programs", name="program_")
 */
class ProgramController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(): Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();

        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
            'programs' => $programs,
        ]);
    }

    /**
     * @Route ("/new", name="new")
     */
    public function new(Request $request, Slugify $slugify): Response
    {
        $program = new Program();
        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($program);
            $entityManager->flush();
            $slug = $slugify->generate($program->getTitle());
            $program->setSlug($slug);
            return $this->redirectToRoute('program_index');
        }

        return $this->render('program/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{programSlug}", name="show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
     * @return Response
     */
    public function show(Program $program): Response
    {
        if (!$program) {
            throw $this->createNotFoundException(
                'No program found in program\'s table.'
            );
        }
        return $this->render('program/show.html.twig', [
            'program' => $program,
        ]);
    }

    /**
     * @Route("/{programSlug}/seasons/{seasonNumber}", name="season_show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonNumber": "number"}})
     */
    public function showSeason(Program $program, Season $season): Response
    {
        return $this->render('program/season_show.html.twig', [
            'program' => $program,
            'season' => $season
        ]);
    }

    /**
     * @Route("/{programSlug}/seasons/{seasonNumber}/episodes/{episodeSlug}", name="episode_show")
     * @ParamConverter("program", class="App\Entity\Program", options={"mapping": {"programSlug": "slug"}})
     * @ParamConverter("season", class="App\Entity\Season", options={"mapping": {"seasonNumber": "number"}})
     * @ParamConverter("episode", class="App\Entity\Episode", options={"mapping": {"episodeSlug": "slug"}})
     */
    public function showEpisode(Program $program, Season $season, Episode $episode): Response
    {
        return $this->render('program/episode_show.html.twig', [
            'program' => $program,
            'season' => $season,
            'episode' => $episode,
        ]);
    }
}