<?php
	include_once('../../../Classes/Fixos_imagem_pagina.php');
	include_once('../../../DAO/Fixos_imagem_paginaDAO.php');
	include_once('../../../Classes/Fixos_texto_pagina.php');
	include_once('../../../DAO/Fixos_texto_paginaDAO.php');
	include_once('../../../DB/factory.php');
	if(isset($_POST['arq_old'])){
		$img_old = $_POST['arq_old'];
		$img_path = "../../" . $img_old;
  if(isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == 0){
			unlink($img_path);
			$img_old = "images/". $_FILES['arquivo']['name'];
			move_uploaded_file($_FILES['arquivo']["tmp_name"], $img_path);
		}
		$img = new Fixos_imagem_pagina("/index.php", "lead", $img_old, "logo", 1);
		Fixos_imagem_paginaDAO::update($img);
		$txt = new Fixos_texto_pagina("/index.php", "lead", $_POST['texto'], 2);
		Fixos_texto_paginaDAO::update($txt);
	}
?>
