<?php
    class ViewHandler{
        
        static public function render($viewPath, $data=array()){
            include($viewPath);
        }
    }
?>