<?php

class Movie
{
    public $title;
    public $director;
    public $year;
    public $music;

    public function __construct(string $title, string $director,int $year, string $music)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->music = $music;
    }

    public function getInfo()
    {
        return "$this->title, è un film di $this->director del $this->year, colonna sonora di $this->music";
    }

}