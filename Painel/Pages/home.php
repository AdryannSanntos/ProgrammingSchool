<header id="header">
    <nav>
        <ul>
            <a <?php selecionadoSubMenu('home');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>home">Home</a>
            <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('painel-home');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-home">Painel</a>
            <a <?php selecionadoSubMenu('aulas-home');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-home">Aulas</a>
            <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('painel-editar-painel');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-editar-usuarios">Estatisticas</a>
            <a <?php selecionadoSubMenu('painel-editar-painel');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-criar-usuarios">Configurações</a>
            <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('painel-editar-painel');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-criar-usuarios">Usuarios</a>
        </ul>
    </nav>
</header>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div style="display: flex; justify-content: center; align-items: center;" class="box-content W100">
    <?php
        if($_SESSION['image_perfil'] == ''){
    ?>
    <div class="avatar-usuario">
        <i class="fa fa-user"></i>
    </div>
    <?php
        }else{
    ?>
    <div class="imagem-usuario">
        <img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['image_perfil'];?>" alt="">
    </div>
    <?php
    }
    ?>
  <h2><?php echo strtoupper($_SESSION['name']);?></h2>
  <p><?php echo strtoupper(pegaCargo($_SESSION['cargo']));?></p>
</div>