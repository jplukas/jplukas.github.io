<?php
	include_once('../../../Classes/Fixos_texto_pagina.php');
	include_once('../../../DAO/Fixos_texto_paginaDAO.php');
	include_once('../../../DB/factory.php');
	if(isset($_POST['contato_h2'])){
		$txt = new Fixos_texto_pagina("/index.php", "contato h2", $_POST['contato_h2'], 4);
		Fixos_texto_paginaDAO::update($txt);
		$txt = new Fixos_texto_pagina("/index.php", "contato p", $_POST['contato_p'], 5);
		Fixos_texto_paginaDAO::update($txt);
	}
?>
