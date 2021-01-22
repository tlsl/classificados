<?php require 'pages/header.php'; ?>
  

    <?php
    /*
        if(empty($_session['cLogin'])){
            ?>
                <script type="text/javascript">window.location.href="login.php";</script>
            <?php
            exit;
        }
    */
    ?>


    <div class="container">
    <h1> Meus anuncios</h1>

        <a href="add-anuncio.php" class="btn btn-default">Adicionar Anuncio </a>

    <table class="table table-striped">
        <thead>
            <tr> 
                <th>Foto</th>
                <th>Titulo</th>
                <th>valor</th>
                <th>ações</th>
            </tr>

        </thead>

        <?php
            require 'classes/anuncios.php';
            $a =new Anuncios();
            $anuncios= $a->getMeusAnuncios();

        foreach($anuncios as $anuncios):
        ?>

                <tr>
                    <td>
                        <?php if(!empty($anuncio['url'])): ?>   
                           <img src="assets/images/anuncios/<?php echo $anuncios['url']; ?> "  height="25" border="0" />
                        <?php else: ?>
                            <img src="assets/images/default.jpg" height="25" border="0" />a
                        <?php endif; ?>
                    </td>
                    <td><?php echo $anuncios['titulo']; ?></td>
                    <td><?php echo number_format($anuncios['valor'],2); ?></td>
                    <td>
                            <a href="editar-anuncio.php?id=<?php echo $anuncios['id']; ?>" class="btn btn-info"> Editar </a>
                            <a href="exluir-anuncio.php?id=<?php echo $anuncios['id']; ?>" class="btn btn-danger"> Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>

</table>

<?php require 'pages/footer.php'; ?>