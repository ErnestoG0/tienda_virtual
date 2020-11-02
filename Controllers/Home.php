 <?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function home($parems)
        {
        //echo "Mensaje desde el controlador";
        }
        public function datos($spares)
        {
            echo "Datos recibidos:",$params;
        }
        public function carrito($spares)
        {
            $carrito = $this ->model ->getCarrito($params);
            echo $carrito;
        }

    }
?>