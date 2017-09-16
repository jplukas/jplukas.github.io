<h2>Sobre nós</h2>
<?php
                        include_once('../../Classes/Fixos_texto_pagina.php');
                        include_once('../../DAO/Fixos_texto_paginaDAO.php');
                        include_once('../../DB/Factory.php');
                        $titulo = Fixos_texto_paginaDAO::read(array("pagina" => "/about-us.php",
                            "nome_campo" => "lead h2"));
                        $texto = Fixos_texto_paginaDAO::read(array("pagina" => "/about-us.php",
                            "nome_campo" => "lead p"));
                        $titulo = $titulo[0]['valor'];
                        $texto = $texto[0]['valor'];
?>
                            <form class="formulario-slideshow" method="POST" action ="controller/sobrenos_texto_controller.php">
                                <p>Titulo</p>
                                <textarea name="lead h2" class="area-text-titulo"><?php echo $titulo; ?></textarea><br><br>
                                <p>Texto</p>
                                <textarea name = "lead p"><?php echo $texto; ?></textarea><br><br>
                            </form>