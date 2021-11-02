<?php
    class Movie{
        private $name;
        private $releaseDate;
        private $director;
        private $genres;
        private $description;

        public function setName($_name){
            if(strlen($_name)<80){
                $this->name=strtolower($_name);
            }
        }
        public function getName(){
            return $this->name;
        }
        public function setDate($_releaseDate){
            if(strlen($_releaseDate)==10){
                $this->releaseDate=$_releaseDate;
            }
        }
        public function getDate(){
            return $this->releaseDate;
        }
        public function setDirector($_director){
            if(strlen($_director)<50){
                $this->director=strtolower($_director);
            }
        }
        public function getDirector(){
            return $this->director;
        }
        public function setGenres($_genres){
            if(count($_genres)>0){
                foreach($_genres as $element){
                    if(strlen($element)<80){
                        $this->genres[]=$element;
                    }    
                }
            }
        }
        public function addGenre($_genre){
            $_genre=strtolower($_genre);
            foreach($this->genres as $element){
                if($_genre==$element){
                    return false;
                }
            }
            $this->genres[]=$_genre;
        }
        public function removeGenre($_genre){
            $_genre=strtolower($_genre);
            foreach($this->genres as $index=>$element){
                if($_genre==$element){
                    unset($this->genres[$index]);
                    return true;
                }
            }
            return false;
        }
        public function getGenres(){
            return $this->genres;
        }
        public function setDescription($_description){
            if(strlen($_description)<250){
                $this->description=strtolower($_description);
            }
        }
        public function getDescription(){
            return $this->description;
        }

        /**
         * Initializes this xyzRequest.
         *
         * Available options:
         *
         *  * logging: Whether to enable logging or not (false by default)
         *
         * @param  string $_name  name
         * @param  string $_releasesDate  name
         * @param  string $_director  name
         * @param  array $_genres  name
         * @param  string $_description  name
         *
         */
        public function __construct($_name,$_releaseDate,$_director,$_genres,$_description){
            $this->setName($_name);
            $this->setDate($_releaseDate);
            $this->setDirector($_director);
            $this->setGenres($_genres);
            $this->setDescription($_description);
        }
    }
?>