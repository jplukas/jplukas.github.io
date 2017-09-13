				<h2>Parceiros</h2>
<?php
    include_once('../../DAO/ParceiroDAO.php');
    include_once('../../DB/factory.php');
    $parceiro = ParceiroDAO::readAll();
    foreach ($parceiro as $key => $value) {
        echo '<form class="formulario-slideshow" method="POST" action="controller/parceiros_controller.php">
                                <input type="hidden" name="id" value="'.$value['id'].'">
                                <input type="hidden" name="arq_old" value="'.$value['logo'].'">
                                <p>Imagem de fundo</p><br><br>
                                <img src="../../'.$value['logo'].'"><br><br>
                                <input type="file" name="arquivo" class="btn files"/><br><br>
                                <p>Nome</p>
                                <textarea name="nome">'.$value['nome'].'</textarea><br><br>
                                <p>Link</p>
                                <textarea name="link">'.$value['link'].'</textarea><br><br>
                                Excluir registro? <input type="checkbox" name="delete_registry"><br><br>
                            </form><br><br>
                            ';
    }
?>
<button class="btn botao" onclick="adicionaParceiro(this)">Adicionar parceiro</button><br><br>
<script>
function adicionaParceiro(btn_add){
    var novo = document.createElement("FORM");
    novo.setAttribute("class", "formulario-slideshow"); 
    novo.setAttribute("method", "POST");
    novo.setAttribute("id", "-1");
    novo.setAttribute("action", "controller/parceiros_controller.php");
    novo.innerHTML = '<form class="formulario-slideshow" method="POST" action="controller/parceiros_controller.php">\n<input type="hidden" name="id" value="-1">\n<p>Imagem de fundo</p><br><br>\n<img src=""><br><br>\n<input type="file" name="arquivo" class="btn files"/><br><br>\n<p>Nome</p>\n<textarea name="nome"></textarea><br><br>\n<p>Link</p>\n<textarea name="link"></textarea><br><br>\nExcluir registro? <button class="btn " onclick="exclui(this.parentNode)">Excluir</button><br><br><br><br>\n';
    btn_add.parentNode.insertBefore(novo, btn_add);
    var b1 = document.createElement("BR");
    var b2 = document.createElement("BR");
    btn_add.parentNode.insertBefore(b1, btn_add);
    btn_add.parentNode.insertBefore(b2, btn_add);
}
</script>