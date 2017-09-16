<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>O que fazemos!</h2>
            </div>
            <div class="row">
                <div class="portfolio-items">
                <?php
                    include_once('../Classes/Servico.php');
                    include_once('../DAO/ServicoDAO.php');
                    $servico = ServicoDAO::readAll();
                    foreach ($servico as $key => $value) {
                       echo '
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="' . $value['imagem_portfolio'] .'" alt="' . $value['nome'] .'">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">' . $value['nome'] .'</a></h3>
                                    <p>' . $value['texto_portfolio'] .'</p>
                                    <a class="preview" href="services.html" ><i class="fa fa-eye"></i> Visualizar</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                    ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->