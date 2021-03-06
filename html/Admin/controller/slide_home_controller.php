<?php
	include_once('../../../Classes/Slide_home.php');
	include_once('../../../DAO/Slide_homeDAO.php');
	include_once('../../../DB/factory.php');
	if(!(isset($_POST['id']))){
		echo'<div class="alert alert-danger">
  <strong>FALHA NA OPERAÇÃO!</strong>
  </div>
  ';
}
	else{
		$id = $_POST['id'];
		$img_grande = $_POST['imagem_grande'];
		$img_pequena = $_POST['imagem_pequena'];
		$link = $_POST['link'];
		$texto_grande = $_POST['texto_grande'];
		$texto_pequeno = $_POST['texto_pequeno'];
		if(isset($_FILES['imagem_grande']) && $_FILES['imagem_grande']['error'] == 0){
			unlink($img_grande);
			$img_grande = "images/slider/" . $_FILES['imagem_grande']['name'];
		}
		if(isset($_FILES['imagem_pequena']) && $_FILES['imagem_pequena']['error'] == 0){
			unlink($img_pequena);
			$img_pequena = "images/slider/" . $_FILES['imagem_pequena']['name'];
		}
		$slide = new Slide_home($img_grande, $img_pequena, $texto_grande, $texto_pequeno, $link, $id);
		if(($_POST['delete_registry'] != null) && ($_POST['delete_registry'] == "on")){
			unlink("../../" . $img_grande);
			unlink("../../" . $img_pequena);
			Slide_homeDAO::delete($slide);
		}
		else{	
		if(isset($_FILES)){
			foreach ($_FILES as $key => $value) {
				$fname = "../../images/slider/" . $value['name'];
				if(! move_uploaded_file($value["tmp_name"], $fname)){
				}  
			}
		}
		else echo '$_FILES is not set!!';
		if($id > 0){
			Slide_homeDAO::update($slide);
		}
		else{
			Slide_homeDAO::create($slide);	
		}
		}
	}
?>
