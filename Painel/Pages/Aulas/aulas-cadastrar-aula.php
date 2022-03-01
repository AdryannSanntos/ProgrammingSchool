<?php include('aulas-header.php'); ?>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
  <?php
    if(isset($_POST['aula-submit'])){
      $aula_name = $_POST['aula-name'];
      $aula_tec = $_POST['aula-tec'];
      $aula_link = $_POST['aula-link'];
      if($aula_name == ''){
        Painel::alert('erro', 'Insira um nome para aula');
      }else if($aula_tec == ''){
        Painel::alert('erro', 'Insira uma tecnologia para aula');
      }else if($aula_link == ''){
        Painel::alert('erro', 'Insira um link para aula');
      }else{
        $sql = MySQL::Connnect()->prepare("INSERT INTO `tb.admin.aulas` (name,tecnologia,link) VALUES (?,?,?)");
        $sql->execute(array($aula_name,$aula_tec,$aula_link));
      }
    }
  ?>
  <h2>CADASTRO DE AULA</h2>
  <form method="POST">
    <input type="text" name="aula-name" placeholder="Titulo da aula">
    <label style="font-size: 14px;" for="tecs">Selecione uma tecnologia</label>
    <select name="aula-tec" id="tecs">
      <?php
        $sql = MySQL::Connnect()->prepare("SELECT * FROM `tb.admin.tecnologias`");
        $sql->execute();
        while($dados = $sql->fetch(PDO::FETCH_ASSOC)):
      ?>
        <option name="aula-tec" value="<?php echo $dados['name'];?>"><?php echo $dados['name'];?></option>
      <?php endwhile; ?>
    </select>
    <input type="text" name="aula-link" placeholder="Link da aula">
    <input type="submit" name="aula-submit" value="Cadastrar aula">
  </form>
</div>