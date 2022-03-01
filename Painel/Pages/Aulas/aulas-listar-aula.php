<?php include('aulas-header.php'); ?>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
  <div class="FlexWrap">
  <?php
    $sql = MySQL::Connnect()->prepare("SELECT * FROM `tb.admin.aulas`");
    $sql->execute();
    while($dados = $sql->fetch(PDO::FETCH_ASSOC)):
  ?>
    <div class="container-aula">
      <h1><?php echo $dados['name'];?></h1>
      <p><?php echo $dados['tecnologia'];?></p>
      <iframe width="560" height="315" src="<?php echo $dados['link'];?>" title="Aula" frameborder="0" allow="" allowfullscreen></iframe>
    </div>
   <?php endwhile; ?>
   </div>
</div>