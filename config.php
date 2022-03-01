<?php
  session_start();
  $autoload = function($class){
    include('Classes/'.$class.'.php');
  };

  spl_autoload_register($autoload);

  //INCLUDE PATH
  define('INCLUDE_PATH', 'http://localhost/ProgrammingSchool/');
  define('INCLUDE_PATH_PAINEL', INCLUDE_PATH. 'Painel/');

  //NOMES

  define('NOME_EMPRESA', ' Programming School - Painel de controle');

  //BANCO DE DADOS
  define('HOST', 'Localhost');
  define('DATABASE', 'prj_ProgrammingSchool');
  define('USER', 'root');
  define('PASSWORD', '');

  //PEGAR CARGO
  function pegaCargo($cargo){
		$arr = [
			'0' => 'Normal',
			'1' => 'Moderador',
			'2' => 'Administrador'
		];
		return $arr[$cargo];
	}

	function selecionadoMenu($par){
		/*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="menu-active"';
			echo 'style="color: #fff"';
		}
	}

	function selecionadoSubMenu($par){
		/*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="sub-menu-active"';
			echo 'style="font-weight: bold; color: #26282d"';
		}
	}

	function verificaPermissaoMenu($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			echo 'style="display:none;"';
		}
	}

	function verificaPermissaoPagina($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			include('Painel/Pages/permissao_negada.php');
			die();
		}
	}
?>