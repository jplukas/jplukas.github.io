<?php $title = "Sobre nós | Viva Leve"; ?>
<?php include_once('header.php'); ?>

    <section id="about-us">
        <div class="container">
            
           <?php include_once('slider_about_us.php'); ?>
            
            
            <!-- Our Skill -->
            
            <div class="center wow fadeInDown">
                <h2><?php
                        include_once('../Classes/Fixos_texto_pagina.php');
                        include_once('../DAO/Fixos_texto_paginaDAO.php');
                        $a = Fixos_texto_paginaDAO::read(array("pagina" => $_SERVER['PHP_SELF'],
                            "nome_campo" => "lead h2"));
                        echo $a[0]['valor']; 
                    ?>
                </h2>
                <p class="lead"><?php
                        include_once('../Classes/Fixos_texto_pagina.php');
                        include_once('../DAO/Fixos_texto_paginaDAO.php'); 
                        $a = Fixos_texto_paginaDAO::read(array("pagina" => $_SERVER['PHP_SELF'],
                            "nome_campo" => "lead p"));
                        echo $a[0]['valor'];
                    ?></p>
                            </div>
            

            <!-- our-team -->
            
        </div><!--/.container-->
    </section><!--/about-us-->
    
  <?php include_once('footer.php'); ?>