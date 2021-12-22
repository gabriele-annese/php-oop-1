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
            $this->year_movie = $year_movie;
            $this->vote = $vote;
            $this->price = $price;
            $this->age = $age;
            $this->sconto = $sconto;
        }

        public function getSconto(){
            if($this->vote > 5 ){
                $this->sconto = 10;
            }
            if($this->vote >= 8 ){
                $this->sconto = 20;
            }
            if($this->vote == 10 ){
                $this->sconto = 50;
            }
            return $this->sconto;
        }
    }
?>