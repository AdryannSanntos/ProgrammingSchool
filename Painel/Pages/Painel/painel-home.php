<header id="header">
    <nav>
        <ul>
            <a <?php selecionadoSubMenu('painel-home');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-home">Home</a>
            <a <?php selecionadoSubMenu('painel-editar-painel');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-editar-painel">Editar painel</a>
            <a href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-editar-usuarios">Editar usuarios</a>
            <a href="<?php echo INCLUDE_PATH_PAINEL; ?>painel-criar-usuarios">Criar usuarios</a>
        </ul>
    </nav>
</header>
<button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
    <h2>OLÁ <?php echo strtoupper($_SESSION['name']); ?>, SEJÁ BEM-VINDO AO PAINEL</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim modi, consequuntur tempora delectus sequi cumque ullam pariatur placeat expedita porro laborum eligendi molestias labore amet. Libero, quis nulla! Ea, pariatur.</p>
</div>