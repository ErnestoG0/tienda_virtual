 <?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function home($parems)
        {
            echo "Mensaje desde el controlador";
        }
        public function($spares)
        {
            echo "Datos recibidos:",$params;
        }
    }
?>