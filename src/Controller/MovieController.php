<?php

namespace App\Controller;

use App\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    /**
     * @Route("/movie", name="movie_page", methods={"POST", "GET"})
     */
    public function MovieList(): JsonResponse
    {
        //This data are unlimited
        //Just for example you are 3 choices
        $data = [
            $this->createMovie(1),
            $this->createMovie(2),
            $this->createMovie(3),
        ];

        return $this->json($data);
    }

    private function createMovie(int $id)
    {
        $movie = new Movie();
        $movie
            ->setId($id)
            ->setText('movie ' . $id)
            ;

        return $movie;
    }
}
