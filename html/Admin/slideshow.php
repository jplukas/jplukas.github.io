                <h2>SlideShow</h2>
<?php
    include_once('../../DAO/Slide_homeDAO.php');
    include_once('../../DB/factory.php');
    $slides = Slide_homeDAO::readAll();
    $last = $slides[count($slides) - 1]['id'];
    foreach ($slides as $key => $value) {
        echo '                            <h3>Slide '.$value['id'].'</h3>
                            <form class="formulario-slideshow" method = "post" id="'.$value['id'].'" action="controller/slide_home_controller.php">
                                <input type="hidden" name="id" value="'.$value['id'].'">
                                <p>Imagem principal (obrigatório)</p>
                                <p class="flutuar">Imagem menor</p><br><br>

                                <img style="width: 150px; height: 100px;" src="'.$value['imagem_grande'].'">
                                <img class="flutuar" style="width: 100px; height: 100px;" src="'.$value['imagem_pequena'].'"><br><br>
                                <input type="file" name="imagem_grande" onclick="anula(this)" onchange="" class="btn files"/>
                                
                                <input type="file" name="imagem_pequena" onclick="anula(this)" onchange="" class="btn files"/><br><br>

                                <input type="hidden" name="imagem_grande" value="'.$value['imagem_grande'].'">
                                <input type="hidden" name="imagem_pequena" value="'.$value['imagem_pequena'].'">

                                 <p>Slide Show - Texto maior</p>
                                <textarea name="texto_grande">'.$value['texto_grande'].'</textarea><br><br>
                                <p>Slide Show - Texto menor</p>
                                <textarea name="texto_pequeno">'.$value['texto_pequeno'].'</textarea><br><br>
                                <textarea name="link">'.$value['link'].'</textarea><br><br>
                            </form><br><br>
                            ';
    }
?>
<button class="btn botao" onclick="adiciona(this)">Adicionar novo slide</button><br><br>
<script>
var ult = (<?php echo $last ;?> + 1);
function adiciona(btn_add){
    var novo = document.createElement("FORM");
    novo.setAttribute("class", "formulario-slideshow");
    novo.setAttribute("method", "POST");
    novo.setAttribute("id", "-1");
    novo.setAttribute("action", "controller/slide_home_controller.php");
    novo.innerHTML = '<input type="hidden" name="id" value="-1">\n<p>Imagem principal (obrigatório)</p>\n<p class="flutuar">Imagem menor</p><br><br>\n<img style="width: 150px; height: 100px;" src="">\n<img class="flutuar" style="width: 100px; height: 100px;" src=""><br><br>\n<input type="file" name="imagem_grande" class="btn files" onclick="anula(this)" onchange=""/>\n<input type="file" name="imagem_pequena" class="btn files" onclick="anula(this)" onchange=""/><br><br>\n<input type="hidden" name="imagem_grande" value="/images/no_photo.jpg">\n<input type="hidden" name="imagem_pequena" value="/images/no_photo.jpg">\n<p>Slide Show - Texto maior</p>\n<textarea name="texto_grande"></textarea><br><br>\n<p>Slide Show - Texto menor</p>\n<textarea name="texto_pequeno"></textarea><br><br>\n<textarea name="link"></textarea>\n';
    btn_add.parentNode.insertBefore(novo, btn_add);
    var b1 = document.createElement("BR");
    var b2 = document.createElement("BR");
    var h3 = document.createElement("H3");
    h3.innerHTML = "Slide " + ult;
    btn_add.parentNode.insertBefore(h3, novo);
    btn_add.parentNode.insertBefore(b1, btn_add);
    btn_add.parentNode.insertBefore(b2, btn_add);
    ult++;
}
</script>