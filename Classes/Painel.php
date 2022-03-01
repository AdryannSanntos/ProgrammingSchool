<?php 

    class Painel
    {
        
        public static function logado(){
            return isset($_SESSION['logado'])? true : false;
        }

        public static function loggout(){
            session_unset();
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
        }

        public static function carregarPagina(){
			if(isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				if(file_exists('Pages/Aulas/'.$url[0].'.php')){
					include('Pages/Aulas/'.$url[0].'.php');
				}else if(file_exists('Pages/Painel/'.$url[0].'.php')){
                    include('Pages/Painel/'.$url[0].'.php');
                }else if(file_exists('Pages/'.$url[0].'.php')){
                    include('Pages/'.$url[0].'.php');
                }else{
					//Página não existe!
					header('Location: '.INCLUDE_PATH_PAINEL);
				}
			}else{
				include('Pages/home.php');
			}
		}

    }
?>