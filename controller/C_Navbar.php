<?php
    //require_once 'views/ViewHandler.php';

    class C_Navbar{

        public function __construct(){

        }

        public function getNavbar($datos = array()){
            //echo 'Esto es el menú';
            //echo ($datos['User']['pic']);
            ViewHandler::render('views/menu/V_Navbar.php');   
        }
    }
?>