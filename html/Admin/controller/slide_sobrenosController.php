<?php
	include_once('../../../Classes/Slide_SobreNos.php');
	include_once('../../../DAO/Slide_SobreNosDAO.php');
	include_once('../../../DB/factory.php');
	if(!(isset($_POST['id']))){
		echo'<div class="alert alert-danger">
  <strong>FALHA NA OPERAÇÃO!</strong>
  </div>
  ';
	}
	else{
		$id = $_POST['id'];
		$legenda = $_POST['legenda'];
		$imagem = $_POST['imagem'];
		if(isset($_FILES['imagem']) && ($_FILES['imagem']['error'] == 0)){
			$imagem = "images/" . $_FILES['imagem']['name'];
			move_uploaded_file($_FILES['imagem']['tmp_name'], "../../" . $imagem);
		}
		$slide_sobrenos = new Slide_SobreNos($imagem, $legenda, $id);
		if(($_POST['delete_registry'] != null) && ($_POST['delete_registry'] == "on")){
			unlink("../../" . $imagem);
			Slide_SobreNosDAO::delete($slide_sobrenos);
		}
		else{
			if($id > 0) Slide_SobreNosDAO::update($slide_sobrenos);
			else Slide_SobreNosDAO::create($slide_sobrenos);
		}
	}
?>
