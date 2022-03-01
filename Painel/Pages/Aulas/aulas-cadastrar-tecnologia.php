<?php include('aulas-header.php'); ?>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
  <?php
    if(isset($_POST['tec-submit'])){
      $tec_name = $_POST['tec-name'];
      $tec_desc = $_POST['tec-desc'];
      if($tec_name == ''){
        Painel::alert('erro', 'Insira o nome da tecnologia');
      }else if($tec_desc == ''){
        Painel::alert('erro', 'Insira a descrição da tecnologia');
      }else{
        $sql = MySQL::Connnect()->prepare("INSERT INTO `tb.admin.tecnologias` (name,descricao) VALUES (?,?)");
        $sql->execute(array($tec_name,$tec_desc));
        Painel::alert('sucesso','TECNOLOGIA CADASTRADA COM SUCESSO!');
      }
    }
  ?>
  <h2>CADASTRO DE TECNOLOGIA</h2>
  <form method="POST">
    <input type="text" name="tec-name" placeholder="Nome da tecnologia">
    <input type="text" name="tec-desc" placeholder="Descrição da tecnologia">
    <input type="submit" name="tec-submit" value="Cadastrar tecnologia">
  </form>
</div>