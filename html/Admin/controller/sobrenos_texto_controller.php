<?php
	if((isset($_POST['lead_h2'])) && (isset($_POST['lead_p']))){
		include_once('../../../Classes/Fixos_texto_pagina.php');
		include_once('../../../DAO/Fixos_texto_paginaDAO.php');
	    include_once('../../../DB/factory.php');
	    $titulo = $_POST['lead_h2'];
	    $texto = $_POST['lead_p'];
	    $fixo_t = new Fixos_texto_pagina("/about-us.php", "lead h2", $titulo, 6);
	    Fixos_texto_paginaDAO::update($fixo_t);
	    $fixo_t = new Fixos_texto_pagina("/about-us.php", "lead p", $texto, 1);
	    Fixos_texto_paginaDAO::update($fixo_t);
	}
?>