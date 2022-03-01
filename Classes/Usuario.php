<?php
	
	class Usuario{

		public function atualizarUsuario($nome,$senha,$imagem){
			$sql = MySql::Connnect()->prepare("UPDATE `tb.admin.users` SET nome = ?,password = ?,img = ? WHERE user = ?");
			if($sql->execute(array($nome,$senha,$imagem,$_SESSION['user']))){
				return true;
			}else{
				return false;
			}
		}

		public static function userExists($user){
			$sql = MySql::Connnect()->prepare("SELECT `id` FROM `tb.admin.users` WHERE user=?");
			$sql->execute(array($user));
			if($sql->rowCount() == 1)
				return true;
			else
				return false;
		}

		public static function cadastrarUsuario($user,$senha,$imagem,$nome,$cargo){
			$sql = MySql::Connnect()->prepare("INSERT INTO `tb.admin.users` VALUES (null,?,?,?,?,?)");
			$sql->execute(array($user,$senha,$imagem,$nome,$cargo));
		}
	}
?>