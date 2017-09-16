<?php
    include_once('header.php');
    include_once('../../DAO/ServicoDAO.php');
    include_once('../../DB/factory.php');
    $servicos = ServicoDAO::readAll();  
?>
                        <div class="conteudo col-md-9">
                            <h2>Serviços</h2>
<?php
    foreach ($servicos as $key => $value) {
        echo '<form class="formulario-slideshow" method="POST" action="controller/servicosController.php">
                                    <input type = "hidden" name="id" value="'. $value['id'] .'">
                                    <input type = "hidden" name="imagem_principal" value="'. $value['imagem_principal'] .'">
                                    <input type = "hidden" name="imagem_portfolio" value="'. $value['imagem_portfolio'] .'">
                                    <p>Nome</p>
                                    <textarea class="area-text-titulo" name="nome">'. $value['nome'] .'</textarea><br><br>
                                    <p>Imagem principal</p><br><br>
                                    <img style="width: 150px; height: 100px;" src="../../'. $value['imagem_principal'] .'"><br><br>
                                    <input type="file" name="imagem_principal" class="btn files"/><br><br>
                                    <p>Texto principal</p>
                                    <textarea class="" name="texto_principal">'. $value['texto_principal'] .'</textarea><br><br>
                                    <p>Imagem portfolio</p><br><br>
                                    <img style="width: 150px; height: 100px;" src="../../'. $value['imagem_portfolio'] .'"><br><br>
                                    <input type="file" name="imagem_portfolio" class="btn files"/><br><br>
                                    <p>Texto portfolio</p>
                                    <textarea class="" name="texto_portfolio">'. $value['texto_portfolio'] .'</textarea><br>
                                    Excluir registro? <input type="checkbox" name="delete_registry"><br><br>
                                </form>
                                <br><br>
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
    novo.setAttribute("action", "controller/servicosController.php");
    novo.innerHTML = '<input type = "hidden" name="id" value="-1">\n<input type = "hidden" name="imagem_principal" value="">\n<input type = "hidden" name="imagem_portfolio" value="">\n<p>Nome</p>\n<textarea class="area-text-titulo" name="nome"></textarea><br><br>\n<p>Imagem principal</p><br><br>\n<img style="width: 150px; height: 100px;" src=""><br><br>\n<input type="file" name="imagem_principal" class="btn files"/><br><br>\n<p>Texto principal</p>\n<textarea class="" name="texto_principal"></textarea><br><br>\n<p>Imagem portfolio</p><br><br>\n<img style="width: 150px; height: 100px;" src=""><br><br>\n<input type="file" name="imagem_portfolio" class="btn files"/><br><br>\n<p>Texto portfolio</p>\n<textarea class="" name="texto_portfolio"></textarea><br>\nExcluir registro? <button class="btn " onclick="exclui(this.parentNode)">Excluir</button><br><br><br><br>\n';
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