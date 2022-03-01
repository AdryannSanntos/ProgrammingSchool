<?php include_once('../config.php'); ?>
<header id="header">
    <nav>
        <ul>
        <a <?php selecionadoSubMenu('aulas-home');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-home">Home</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-cadastrar-aula');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-cadastrar-aula">Cadastrar aula</a>
        <a <?php selecionadoSubMenu('aulas-listar-aula');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-listar-aula">Listar aulas</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-editar-aula');?> href="#">Editar aulas</a>
        </ul>
    </nav>
</header>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
  <?php
    if(isset($_POST['aula-submit'])){
      $aula_name = $_POST['aula-name'];
      $aula_tec = $_POST['aula-tec'];
      $aula_link = $_POST['aula-link'];
      $sql = MySQL::Connnect()->prepare("INSERT INTO `tb.admin.aulas` (name,tecnologia,link) VALUES (?,?,?)");
      $sql->execute(array($aula_name,$aula_tec,$aula_link));
    }
  ?>
  <h2>CADASTRO DE AULA</h2>
  <form method="POST">
    <input type="text" name="aula-name" placeholder="Titulo da aula" required>
    <input type="text" name="aula-tec" placeholder="Tecnologia da aula" required>
    <input type="text" name="aula-link" placeholder="Link da aula" required>
    <input type="submit" name="aula-submit" value="Cadastrar aula">
  </form>
</div>