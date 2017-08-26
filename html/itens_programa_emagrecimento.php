<?php
    include_once('../DAO/Programa_emagrecimentoDAO.php');
    $programa = Programa_emagrecimentoDAO::readAll();
?>
<section id="feature" class="margin-h2-h3">
        <div class="container">
            <div class="row">
            <?php
                foreach ($programa as $key => $value) {
                    echo'<div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap fundo">
                            <h2>'. $value['nome'] .'</h2>
                            <img class="img-rounded image-programa" src="'. $value['imagem'] .'">
                            <h3 class="conteudo_programa">'. $value['descricao'] .'</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services--> 
';
                }
            ?>
            </div><!--/.row--> 

        </div><!--/.container-->
    </section><!--/#feature-->