<?php include_once('../config.php'); ?>
<header id="header">
    <nav>
        <ul>
        <a <?php selecionadoSubMenu('aulas-home');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-home">Home</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-cadastrar-aula');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-cadastrar-aula">Cadastrar aula</a>
        <a <?php selecionadoSubMenu('aulas-listar-aula');?> href="#">Listar aulas</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-editar-aula');?> href="#">Editar aulas</a>
        </ul>
    </nav>
</header>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
  <?php
    $sql = MySQL::Connnect()->prepare("SELECT * FROM `tb.admin.aulas`");
    $sql->execute();
    while($dados = $sql->fetch(PDO::FETCH_ASSOC)):
      if(sizeof($dados) > 0){
  ?>

      <h1><?php echo $dados['name'];?></h1>
      <p><?php echo $dados['tecnologia'];?></p>
      <iframe width="560" height="315" src="<?php echo $dados['link'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <?php }else{ ?>

    <h1>NÃO EXISTE AULAS</h1>
   
   <?php } endwhile; ?>
</div>