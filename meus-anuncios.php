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
                    <td><img src="assets/images/anuncios/<?php echo $anuncio['url']; ?> " border="0" /></td>
                    <td><?php echo $anuncio['titulo']; ?></td>
                    <td><?php echo number_format($anuncio['valor'],2); ?></td>
                    <td></td>
                </tr>

            <?php endforeach; ?>

</table>















<?php require 'pages/footer.php'; ?>