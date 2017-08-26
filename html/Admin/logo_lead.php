                <h2>Logo lead</h2>
<?php
	include_once('../../DAO/Fixos_imagem_paginaDAO.php');
	include_once('../../DAO/Fixos_texto_paginaDAO.php');
    include_once('../../DB/factory.php');
    $logo = Fixos_imagem_paginaDAO::read(Array("pagina" => "/index.php", "nome_campo" => "lead")); 
    $texto = Fixos_texto_paginaDAO::read(Array("pagina" => "/index.php", "nome_campo" => "lead")); 

?>
                            <form class="formulario-slideshow" method="POST" action="teste.php">
                            	<img style="width: 150px; height: 100px;" <?php echo 'src="'.$logo[0]['src'].'"'; ?>><br>
                                <input type="file" name="arquivos" class="btn files"/><br><br>
                                <p>Texto Lead</p>
                                <textarea><?php echo $texto[0]['valor']; ?></textarea><br><br>
                            </form><br><br>