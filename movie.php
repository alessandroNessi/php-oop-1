<?php
    class Movie{

        private $name;
        private $releaseDate;
        private $director;
        private $genres;
        private $description;

        public function setName($_name){
            if(strlen($_name)<80){
                $this->name=$_name;
            }
        }
        public function setDate($_releaseDate){
            if(strlen($_releaseDate)==10){
                $this->releaseDate=$_releaseDate;
            }
        }
        public function setDirector($_director){
            if(strlen($_director)<50){
                $this->director=$_director;
            }
        }
        public function setGenres($_genres){
            if(strlen($_genres)<80){
                $this->genres=$_genres;
            }
        }
        public function setDescription($_description){
            if(strlen($_description)<250){
                $this->description=$_description;
            }
        }
        public function __construct($_name,$_releaseDate,$_director,$_genres,$_description){
            $this->setName($_name);
            $this->setDate($_releaseDate);
            $this->setDirector($_director);
            $this->setGenres($_genres);
            $this->setDescription($_description);
        }
    }
?>