<?php

    class PagesController{

        //Llamando a la plantilla principal        
        public function template(){
            
            include "views/template.php";

        }

        //Interaccion del usuario
        public function LinkPagesController(){

            if(isset($_GET["action"])){
                $link = $_GET["action"];
            }else{
                $link = "index";
            }

            $resquet = EnlacesPaginas::enlacesPaginasModelos($link);

            include $resquet;
            
        }
    }