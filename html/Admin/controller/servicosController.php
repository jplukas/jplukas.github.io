<?php
	include_once('../../../Classes/Servico.php');
	include_once('../../../DAO/ServicoDAO.php');
	include_once('../../../DB/factory.php');
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$imagem_principal = $_POST['imagem_principal'];
		$imagem_portfolio = $_POST['imagem_portfolio'];
		$nome = $_POST['nome'];
		$texto_principal = $_POST['texto_principal'];
		$texto_portfolio = $_POST['texto_portfolio'];
		if(isset($_FILES['imagem_principal']) && $_FILES['imagem_principal']['error'] == 0){
			unlink("../../".$imagem_principal);
			$imagem_principal = "images/".$_FILES['imagem_principal']['name'];
			move_uploaded_file($_FILES['imagem_principal']['tmp_name'], "../../".$imagem_principal);
		}
		if(isset($_FILES['imagem_portfolio']) && $_FILES['imagem_portfolio']['error'] == 0){
			unlink("../../".$imagem_portfolio);
			$imagem_portfolio = "images/".$_FILES['imagem_portfolio']['name'];
			move_uploaded_file($_FILES['imagem_portfolio']['tmp_name'], "../../".$imagem_portfolio);
		}
		$servico = new Servico($nome, $texto_principal, $imagem_principal, $texto_portfolio, $imagem_portfolio, $id);
		if(($_POST['delete_registry'] != null) && ($_POST['delete_registry'] == "on")){
			unlink("../../".$imagem_principal);
			unlink("../../".$imagem_portfolio);
			ServicoDAO::delete($servico);
		}
		else{
			if($id > 0)ServicoDAO::update($servico);
			else ServicoDAO::create($servico);
		}
	}
?>