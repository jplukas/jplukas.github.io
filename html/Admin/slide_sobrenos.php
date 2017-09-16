	<h2>Slide Show</h2>
<?php
    include_once('../../DAO/Slide_SobreNosDAO.php');
    include_once('../../Classes/Slide_SobreNos.php');
    include_once('../../DB/factory.php');
    $slides = Slide_SobreNosDAO::readAll();
    foreach ($slides as $key => $value) {
        echo '<form class="formulario-slideshow" method = "POST" action="controller/slide_sobrenosController.php">
                                <input type="hidden" name="id" value="'.$value['id'].'">
                                <input type="hidden" name="imagem" value="'.$value['imagem'].'">
                                <p>Imagem</p><br><br>
                                <img style="width: 200px; height: 150px;" src="../../'.$value['imagem'].'"><br>
                                <input type="file" name="imagem" class="btn files"/><br><br>
                                 <p>Legenda</p>
                                <textarea name = "legenda">'.$value['legenda'].'</textarea><br><br>
                                Excluir registro? <input type="checkbox" name="delete_registry"><br><br>
                            </form><br><br>
                            ';
    }
?>
<button class="btn botao">Adicionar novo slide</button><br><br>
<script>
function adicionaSobreNos(btn_add){
    var novo = document.createElement("FORM");
    novo.setAttribute("class", "formulario-slideshow");
    novo.setAttribute("method", "POST");
    novo.setAttribute("id", "-1");
    novo.setAttribute("action", "controller/slide_sobrenos_controller.php");
    novo.innerHTML = '<form class="formulario-slideshow" method = "POST">\n<input type="hidden" name="id" value="-1">\n<p>Imagem</p><br><br>\n<img style="width: 200px; height: 150px;" src=""><br>\n<input type="file" name="imagem" class="btn files"/><br><br>\n<p>Legenda</p>\n<textarea></textarea><br><br>\n<button class="btn " onclick="exclui(this.parentNode)">Excluir</button><br><br><br><br>\n';
    btn_add.parentNode.insertBefore(novo, btn_add);
    var b1 = document.createElement("BR");
    var b2 = document.createElement("BR");
    btn_add.parentNode.insertBefore(b1, btn_add);
    btn_add.parentNode.insertBefore(b2, btn_add);
}
function exclui(form){
    //Apaga um form criado pelo JS, que nao foi para o DB ainda.
    form.parentNode.removeChild(form);
}
</script>