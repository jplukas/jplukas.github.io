<?php
	include_once('../../../Classes/Programa_emagrecimento.php');
	include_once('../../../DAO/Programa_emagrecimentoDAO.php');
	include_once('../../../DB/factory.php');
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$imagem = $_POST['imagem'];
		if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
			unlink("../../".$imagem);
			$imagem = "images/".$_FILES['imagem']['name'];
			move_uploaded_file($_FILES['imagem']['tmp_name'], "../../".$imagem);
		}
		$programa_emagrecimento = new Programa_emagrecimento($nome, $descricao, $imagem, $id);
		if(($_POST['delete_registry'] != null) && ($_POST['delete_registry'] == "on")){
			unlink("../../".$imagem);
			Programa_emagrecimentoDAO::delete($programa_emagrecimento);
		}
		else{
			if($id > 0)Programa_emagrecimentoDAO::update($programa_emagrecimento);
			else Programa_emagrecimentoDAO::create($programa_emagrecimento);
		}
	}
?>