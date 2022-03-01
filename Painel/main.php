<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL;?>Css/painel.css">
  <script src="https://kit.fontawesome.com/a8563284e2.js" crossorigin="anonymous"></script>
  <title>Dashboard</title>
</head>
<body>
  <div class="container-all">
    <!-- SIDEBAR MENU -->
    <div id="side" class="sidebar-menu">
      <header style="display: flex; flex-direction: column;">
        <h1><?php echo strtoupper($_SESSION['name']);?></h1>
        <p><?php echo strtoupper(pegaCargo($_SESSION['cargo'])); ?></p>
      </header>
      <main>
        <nav>
          <ul>
            <a <?php selecionadoMenu('home');?> href="<?php echo INCLUDE_PATH_PAINEL ?>home"><i class="fa fa-home"></i> HOME</a>
            <a <?php  selecionadoMenu('painel-home');?> <?php verificaPermissaoMenu(1);?> href="<?php echo INCLUDE_PATH_PAINEL ?>painel-home"><i class="fa fa-newspaper-o"></i> PAINEL</a>
            <a <?php selecionadoMenu('aulas-home');?> href="<?php echo INCLUDE_PATH_PAINEL ?>aulas-home"><i class="fas fa-book"></i> AULAS</a>
            <a <?php selecionadoMenu('statistics-home');?> <?php verificaPermissaoMenu(1);?> href="#"><i class="fas fa-sticky-note"></i> ESTATÍSTICAS</a>
            <a <?php selecionadoMenu('config-home');?> href="#"><i class="fas fa-gear"></i> CONFIGURAÇÕES</a>
            <a <?php selecionadoMenu('users-home');?> <?php verificaPermissaoMenu(1);?> href="#"><i class="fa-regular fa-user"></i> USUÁRIOS</a>
          </ul>
        </nav>
      </main>
      <footer>
        <div class="footer-text">
          <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-right-to-bracket"></i> DESCONECTAR</a>
        </div>
      </footer>
    </div>
    <!-- SIDEBAR MENU -->
    <!-- CONTENT -->
    <div class="content-container">
      <header>
        <div class="container-left">
          <button title="Abrir/fechar sidebar" class="menu-button" id="button2"><i class="fa-solid fa-bars"></i></button>
          <h3>DASHBOARD</h3>
        </div>
        <div class="container-right">
          <div style="display: flex;" class="buttons">
            <div class="square"> </div>
            <div class="square"> </div>
            <button <?php verificaPermissaoMenu(1);?> title="Abrir modificações" id="button3" class="menu-button"><i class="fa-regular fa-address-card"></i></button>
          </div>
        </div>
      </header>
      <main>
      <div id="container-left" class="container-left">
          <?php Painel::carregarPagina(); ?>
        </div>
        <div id="container-right" class="container-right"> a</div>
      </main>
      <footer></footer>
    </div>
    <!-- CONTENT -->
  </div>
  <script src="JavaScript/menus.js"></script>
</body>
</html>