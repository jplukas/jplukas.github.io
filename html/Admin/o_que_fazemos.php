                <h2>SlideShow</h2>
<?php
    include_once('../../DAO/Slide_homeDAO.php');
    include_once('../../DB/factory.php');
    $slides = Slide_homeDAO::readAll();
    foreach ($slides as $key => $value) {
        echo '                            <form class="formulario-slideshow">
                                <p>Titulo da imagem</p>
                                <textarea></textarea><br><br>
                                <p>Descrição</p>
                                <textarea></textarea><br><br>
                                <p>Imagem de fundo</p><br><br>
                                <input type="file" name="arquivos" class="btn files"/><br><br>
                                <button class="btn ">Adicionar novo serviço</button>
                            </form>
                            ';
    }
?>
<button class="btn botao">Adicionar novo slide</button><br><br>
<h2>O que fazemos</h2>
                            <form class="formulario-slideshow">
                                <p>Titulo da imagem</p>
                                <textarea></textarea><br><br>
                                <p>Descrição</p>
                                <textarea></textarea><br><br>
                                <p>Imagem de fundo</p><br><br>
                                <input type="file" name="arquivos" class="btn files"/><br><br>
                                <button class="btn ">Adicionar novo serviço</button>
                            </form>