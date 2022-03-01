<?php include('aulas-header.php'); ?>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
    <form method="POST">
      <label style="font-size: 14px;" for="tecs">Selecione uma aula</label>
      <select name="aula-name" id="tecs">
        <?php
          $sql = MySQL::Connnect()->prepare("SELECT * FROM `tb.admin.aulas`");
          $sql->execute();
          while($dados = $sql->fetch(PDO::FETCH_ASSOC)):
        ?>
          <option name="aula-name" value="<?php echo $dados['name'];?>"><?php echo $dados['name'];?></option>
        <?php endwhile; ?>
        <input name="aula-check" type="submit" value="✓">
      </form>
      <?php
        if(isset($_POST['aula-check'])){
          $aula_name = $_POST['aula-name'];
          $_SESSION['aula-edit'] = $aula_name;
          $sql = MySQL::Connnect()->prepare("SELECT * FROM `tb.admin.aulas` WHERE name = ?");
          $sql->execute(array($aula_name));
        }
          while($dados = $sql->fetch(PDO::FETCH_ASSOC)):
      ?>
      <form method="POST">
        <input name="name-aula" type="text" value="<?php echo $dados['name'];?>" placeholder="<?php echo $dados['name'];?>">
        <input name="tec-aula" type="text" value="<?php echo $dados['tecnologia'];?>" placeholder="<?php echo $dados['tecnologia'];?>">
        <input name="link-aula" type="text" value="<?php echo $dados['link'];?>" placeholder="<?php echo $dados['link'];?>">
        <div style="display: flex; align-items: center; justify-content: space-around;" class="buttons">
          <button style="background-color: #a5d6a7;" name="save">SALVAR</button>
          <button style="background-color: #F75353;" name="delete">DELETAR</button>
        </div>
      </form>
      <?php endwhile; ?>
      <?php
        if(isset($_POST['save'])){
          $name_aula = $_POST['name-aula'];
          $tec_aula = $_POST['tec-aula'];
          $link_aula = $_POST['link-aula'];
          $aula_name_old = $_SESSION['aula-edit'];
          $sql = MySQL::Connnect()->prepare("UPDATE `tb.admin.aulas` SET name = ?, tecnologia = ?, link = ? WHERE name = ?");
          $sql->execute(array($name_aula,$tec_aula,$link_aula,$aula_name_old));
          header('Location: '.INCLUDE_PATH_PAINEL.'aulas-editar-aula');
        }else if(isset($_POST['delete'])){
          $name_aula = $_POST['name-aula'];
          $sql2 = MySQL::Connnect()->prepare("DELETE FROM `tb.admin.aulas` WHERE name = ?");
          $sql2->execute(array($name_aula));
          header('Location: '.INCLUDE_PATH_PAINEL.'aulas-editar-aula');
        }
      ?>
    </select>
</div>