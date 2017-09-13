				<h2>Dúvidas</h2>
<?php
	include_once('../../DAO/Fixos_texto_paginaDAO.php');
    include_once('../../DB/factory.php');
    $h2 = Fixos_texto_paginaDAO::read(Array("pagina" => "/index.php", "nome_campo" => "contato h2")); 
    $p = Fixos_texto_paginaDAO::read(Array("pagina" => "/index.php", "nome_campo" => "contato p")); 
?>
                            <form class="formulario-slideshow" action = "controller/duvida_controller.php" method = "POST">
                                <p>Texto dúvida</p>
                                <textarea name="contato h2"><?php echo $h2[0]['valor']; ?></textarea><br><br>
                                <p>Texto contato</p>
                                <textarea name="contato p"><?php echo $p[0]['valor']; ?></textarea><br><br>
                            </form><br><br>