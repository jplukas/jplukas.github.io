	<h2>Slide Show</h2>
<?php
    include_once('../../DAO/Slide_SobreNosDAO.php');
    include_once('../../DB/factory.php');
    $slides = Slide_SobreNosDAO::readAll();
    foreach ($slides as $key => $value) {
        echo '                            <h3>Slide '.$value['id'].'</h3>
                            <form class="formulario-slideshow" method = "POST" action="teste.php">
                                <input type="hidden" name="id" value="'.$value['id'].'">
                                <p>Imagem</p><br><br>
                                <img style="width: 200px; height: 150px;" src="'.$value['imagem'].'"><br>
                                <input type="file" name="imagem" class="btn files"/><br><br>
                                 <p>Legenda</p>
                                <textarea>'.$value['legenda'].'</textarea><br><br>
                                <input class="btn " type="submit" value="Salvar">
                            </form><br><br>
                            ';
    }
?>
<button class="btn botao">Adicionar novo slide</button><br><br>