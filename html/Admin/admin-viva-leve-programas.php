<?php
    include_once('header.php');
    include_once('../../DAO/Programa_emagrecimentoDAO.php');
    include_once('../../DB/factory.php');
    $programa_emagrecimento = Programa_emagrecimentoDAO::readAll();  
?>
                        <div class="conteudo col-md-9">
                            <h2>Programa de Emagrecimento</h2>
<?php
    foreach ($programa_emagrecimento as $key => $value) {
        echo'               <form class="formulario-slideshow" method="POST" action="controller/programa_emagrecimentoController.php">
                                <input type = "hidden" name = "id" value = "'.$value['id'].'">
                                <input type = "hidden" name = "imagem" value = "'.$value['imagem'].'">
                                <p>Titulo</p>
                                <textarea name="nome" class="area-text-titulo">'.$value['nome'].'</textarea><br>
                                <p>Imagem</p><br><br>
                                <img style="width: 150px; height: 100px;" src="../../'. $value['imagem'] .'"><br><br>
                                <input type="file" name="imagem" class="btn files"/><br><br>
                                <p>Descrição</p>
                                <textarea name="descricao">'.$value['descricao'].'</textarea><br><br>
                                Excluir registro? <input type="checkbox" name="delete_registry"><br><br>
                            </form>
                            ';
    }
?>
<br>
                        <button class="btn botao" onclick="adiciona(this)">Adicionar novo slide</button><br><br>
<button onClick="salvar()" class="btn btn-primary">Salvar</button>
<br>
<br>                        
                        </div>
<script src="jquery.js">
</script>
<script src = "js/formControls.js">
</script>
<script>
function adiciona(btn_add){
    var novo = document.createElement("FORM");
    novo.setAttribute("class", "formulario-slideshow");
    novo.setAttribute("method", "POST");
    novo.setAttribute("id", "-1");
    novo.setAttribute("action", "controller/programa_emagrecimentoController.php");
    novo.innerHTML = '<input type = "hidden" name = "id" value = "-1">\n<input type = "hidden" name = "imagem" value = "">\n<p>Titulo</p>\n<textarea name="nome" class="area-text-titulo"></textarea><br>\n<p>Imagem</p><br><br>\n<img style="width: 150px; height: 100px;" src=""><br><br>\n<input type="file" name="imagem" class="btn files"/><br><br>\n<p>Descrição</p>\n<textarea name="descricao"></textarea><br><br>\nExcluir registro? <button class="btn " onclick="exclui(this.parentNode)">Excluir</button><br><br><br><br>\n';
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
<?php include_once('footer.php');?>