<?php 
    class Movie {
        public $title;
        public $year_movie;
        public $vote;
        public $price;
        public $age;
        public $sconto;
        function __construct($title, $year_movie, $vote, $price,$age, $sconto = 0)
        {
            $this->title = $title;
            $this->tiyear_movietle = $year_movie;
            $this->vote = $vote;
            $this->price = $price;
            $this->age = $age;
            $this->sconto = $sconto;
        }
    }
?>