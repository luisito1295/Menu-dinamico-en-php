<?php

    class EnlacesPaginas{
        
        public function enlacesPaginasModelos($enlaces){
            if($enlaces == "nosotros" || $enlaces == "servicios" || $enlaces == "contactenos"){
                $module = "views/modules/".$enlaces.".php";
            }else if($enlaces == "index"){
                $module = "views/modules/inicio.php";
            }else{
                $module = "views/modules/inicio.php";
            }

            return $module;
        }
    }