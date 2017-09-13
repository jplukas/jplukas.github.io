<?php
	include_once('../../../Classes/Parceiro.php');
	include_once('../../../DAO/ParceiroDAO.php');
	include_once('../../../DB/factory.php');
	if(isset($_POST['id'])){
		$img_old = $_POST['arq_old'];
		$img_path = "../../" . $img_old;
  		if(isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == 0){
			unlink($img_path);
			$img_old = "images/partners/". $_FILES['arquivo']['name'];
			move_uploaded_file($_FILES['arquivo']["tmp_name"], "../../".$img_old);
		}
		$parceiro = new Parceiro($_POST['nome'], $_POST['link'], $img_old, $_POST['id']);
		if(($_POST['delete_registry'] != null) && ($_POST['delete_registry'] == "on")){
			unlink($img_path);
			ParceiroDAO::delete($parceiro);
		}
			else{
				if($_POST['id'] > 0)ParceiroDAO::update($parceiro);
				else ParceiroDAO::create($parceiro);
			}
	}
?>