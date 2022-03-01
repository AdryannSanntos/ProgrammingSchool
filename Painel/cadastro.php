<?php include_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a8563284e2.js" crossorigin="anonymous"></script>
  <title>Cadastro</title>
</head>
<body>
  <a href="<?php echo INCLUDE_PATH;?>">Voltar</a>
  <div class="container-login">
    <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = MySQL::Connnect()->prepare("INSERT INTO `tb.admin.users` (name,email,password) VALUES (?,?,?)");
        $sql->execute(array($name,$email,$password));
        Painel::alert('sucesso', 'cadastro realizado');
      }
    ?>
    <header>
      <h1>Cadastro</h1>
    </header>
    <main>
      <form method="POST">
        <input name="name" type="text" placeholder="Insira seu nome" required>
        <input name="email" type="email" placeholder="Insira seu email" required>
        <input name="password" type="password" placeholder="Insira sua senha" required>
        <input name="submit" type="submit" value="Cadastrar">
      </form>
      <p>Já tem uma conta? <a href="<?php echo INCLUDE_PATH_PAINEL;?>login.php">Clique aqui</a></p>
    </main>
  </div>
</body>
</html>