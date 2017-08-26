				<h2>Parceiros</h2>
<?php
    include_once('../../DAO/ParceiroDAO.php');
    include_once('../../DB/factory.php');
    $parceiro = ParceiroDAO::readAll();
    foreach ($parceiro as $key => $value) {
        echo '<form class="formulario-slideshow" method="POST" action="teste.php">
                                <input type="hidden" name="id" value="'.$value['id'].'">
                                <p>Nome</p>
                                <textarea name="nome">'.$value['nome'].'</textarea><br><br>
                                <p>Imagem de fundo</p><br><br>
                                <img src="'.$value['logo'].'"><br><br>
                                <input type="file" name="arquivos" class="btn files"/><br><br>
                            </form><br><br>
                            ';
    }
?>
<button class="btn botao">Adicionar parceiro</button><br><br>