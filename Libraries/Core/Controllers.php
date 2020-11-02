<?php
    class Controllers
    {
        public function __constructor()
        {

        }
        public function loadModel()
        {
            //HomeModel
            $class = get_class($this)."Model"; 
            $routclass  = "Models/".$model.".php";
            if(file_exists($routClass)){
                require_once($routClass);
                $this->model = new  $model();
            }
        }
    }
?>