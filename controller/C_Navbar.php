<?php
    require_once 'views/ViewHandler.php';

    class C_Navbar{

        public function __construct(){

        }

        public function getNavbar($datos = array()){
            //echo 'Esto es el menú';
            //echo ($datos['User']['pic']);
            ViewHandler::render('views/navbar/V_Navbar.php');   
        }

        public function getStart(){
            ViewHandler::render('views/start/V_Start.php'); 
        }
    }
?>