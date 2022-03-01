<header id="header">
    <nav>
        <ul>
        <a <?php selecionadoSubMenu('aulas-home');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-home">Home</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-cadastrar-aula');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-cadastrar-aula">Cadastrar aula</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-cadastrar-tecnologia');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-cadastrar-tecnologia">Cadastrar tecnologia</a>
        <a <?php selecionadoSubMenu('aulas-listar-aula');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-listar-aula">Listar aulas</a>
        <a <?php verificaPermissaoMenu(1);?> <?php selecionadoSubMenu('aulas-editar-aula');?> href="<?php echo INCLUDE_PATH_PAINEL; ?>aulas-editar-aula">Editar aulas</a>
        </ul>
    </nav>
</header>