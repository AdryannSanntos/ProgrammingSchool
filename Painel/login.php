<?php include_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Css/painel.css">
  <script src="https://kit.fontawesome.com/a8563284e2.js" crossorigin="anonymous"></script>
  <title>Login</title>
</head>
<body>
  <a href="<?php echo INCLUDE_PATH;?>">Voltar</a>
  <div class="container-login">
    <?php
      if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = MySQL::Connnect()->prepare("SELECT * FROM `tb.admin.users` WHERE email = ? AND password = ?");
        $sql->execute(array($email,$password));
        if($sql->rowCount() == 1){
          $info = $sql->fetch();
          $_SESSION['logado'] = true;
          $_SESSION['name'] = $info['name'];
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;
          $_SESSION['image_perfil'] = $info['image_perfil'];
          $_SESSION['cargo'] = $info['cargo'];
          header('Location: '.INCLUDE_PATH_PAINEL);
          die();
        }else{
          Painel::alert('erro', 'Email ou senha errado');
        }
      }
    ?>
    <header>
      <h1>Login</h1>
    </header>
    <main>
      <form method="POST">
        <input name="email" type="email" placeholder="Insira seu email">
        <input name="password" type="password" placeholder="Insira sua senha">
        <input name="submit" type="submit" value="Entrar">
      </form>
      <p>Não tem uma conta? <a href="<?php echo INCLUDE_PATH_PAINEL;?>cadastro.php">Clique aqui</a></p>
    </main>
  </div>
</body>
</html>