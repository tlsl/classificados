<?php require 'pages/header.php'; ?>

<?php 
if(empty($_SESSION['cLogin'])){
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php
    exit;
}
?>

<div class="container">
    <h1> Meus Anuncios-Adidionar Anuncios</h1>

    <form method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
			<label for="categoria">Categoria:</label>
			<select name="categoria" id="categoria" class="form-control">
				<?php
				require 'classes/categorias.class.php';
				$c = new Categorias();
				$cats = $c->getLista();
				foreach($cats as $cat):
				?>
				<option value="<?php echo $cat['id']; ?>"><?php echo utf8_encode($cat['nome']); ?></option>
                
				<?php
				endforeach;
				?>
			</select>
		</div>

            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <select name="titulo" id="titulo" class="form-control"> 
                    <option></option>
                </select>
            </div>

            <div class="form-group">
                <label for="valor">Valor:</label>
                <select name="valor" id="valor" class="form-control"> 
                    <option></option>
                </select>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                    <textarea class="form-control" name="descricao"></textarea>
                    
                </select>
            </div>


            <div class="form-group">
                <label for="estado">Estado de conservação:</label>
                <select name="estado" id="estado" class="form-control"> 
                    <option value="1">ótimo</option>
                    <option value="2">Bom</option>
                    <option value="3">Ruim</B></option>
                 
                </select>
            </div>

            <input type="submit" value="Adicionar" class="btn btn-default"/>

    </form>
</div>

<?php require 'pages/footer.php'; ?>    