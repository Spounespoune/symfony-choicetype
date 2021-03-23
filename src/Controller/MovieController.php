<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{

    /**
     * @var MovieRepository
     */
    private MovieRepository $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    /**
     * @Route("/movie", name="movie_page", methods={"POST", "GET"})
     */
    public function MovieList(): JsonResponse
    {
        $data = $this->movieRepository->getMovies();

        return $this->json($data);
    }
}
