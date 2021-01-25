<?php require 'pages/header.php'; ?>
    <?php
        require 'classes/anuncios.php';
        require 'classes/usuarios.php';
        $a = new Anuncios();
        $u = new Usuarios();

        $total_anuncios=$a-> getTotalAnuncios();
        $total_usuarios=$u->getTotalUsuarios();

        $anuncios= $a->getUltimosAnuncios();
    ?>

        <div class="container-fluid">
            <div class="jumbotron">
            
                <h2> Temos <?php echo $total_anuncios; ?> Anuncios</h2>
                <h4> E mais de <?php echo $total_usuarios ?> usuarios cadastrados </h4>

            </div>

            <div class="row">
                <div class="col-sm-3"><h4>Pesquisa Avançada</h4></div>
                <div class="col-sm-9"><h4>Ultimos anuncios</h4></div>
                <table class="table table-striped">
                    <tbody>
                        <?php foreach ($anuncios as $anuncio): ?> 
                            <tr>
                                <td>
                                <td>
                                    <?php if(!empty($anuncio['url'])): ?>   
                                    <img src="assets/images/anuncios/<?php echo $anuncios['url']; ?> "  height="25" border="0" />
                                    <?php else: ?>
                                        <img src="assets/images/default.jpg" height="25" border="0" />a
                                    <?php endif; ?>
                                </td>
                                <td>
                                        <a href="produto.php?id=<?php echo $anuncio['id']; ?> "><?php echo $anuncio['titulo']; ?> </a>
                                        </br>
                                        <?php echo $anuncio['categoria']; ?>
                                </td>
                                <td>
                                        R$:<?php echo number_format($anuncios['valor'],2); ?>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>

                
                
                </table>
            </div>



        </div>


    <!-- Fim topo --> 


<?php require 'pages/footer.php';  ?>