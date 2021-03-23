<?php

namespace App\Repository;

use App\Entity\Movie;

/**
 * Class MovieRepository.
 */
class MovieRepository
{
    public function getMovies(): array
    {
        //This data are unlimited
        //Just for example you are 3 choices
        return [
            $this->createMovie(1),
            $this->createMovie(2),
            $this->createMovie(3),
        ];
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
