<header id="header">
    <nav>
        <ul>
        <a <?php selecionadoSubMenu('aulas-home');?> href="#">Home</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-cadastrar-aula');?> href="#">Cadastrar aula</a>
        <a <?php selecionadoSubMenu('aulas-listar-aula');?> href="#">Listar aulas</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-editar-aula');?> href="#">Editar aulas</a>
        </ul>
    </nav>
</header>
          <button title="Abrir/fechar abas" class="menu-button" id="button" style="align-self: flex-start;"><i class="fa-solid fa-book-open"></i></button>
<div class="box-content W100">
    <h2>OLÁ <?php echo strtoupper($_SESSION['name']); ?>, SEJÁ BEM-VINDO AO PAINEL DE AULAS</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim modi, consequuntur tempora delectus sequi cumque ullam pariatur placeat expedita porro laborum eligendi molestias labore amet. Libero, quis nulla! Ea, pariatur.</p>
</div>