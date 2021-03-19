<?php

namespace App\Entity;

/**
 * Class User.
 */
class User
{
    protected string $name;
    protected array $movie;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getMovie(): array
    {
        return $this->movie;
    }

    public function setMovie(array $movie): self
    {
        $this->movie = $movie;

        return $this;
    }
}
