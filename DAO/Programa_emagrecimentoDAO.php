<?php
	include_once('../Classes/Programa_emagrecimento.php');
	include_once('../DB/factory.php');
	class Programa_emagrecimentoDAO{
		public static function create($programa_emagrecimento){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO programa_emagrecimento (nome, descricao, imagem) VALUES (?, ?, ?);");
			$stmt->bind_param("sss", $programa_emagrecimento->getNome(), $programa_emagrecimento->getDescricao(), $programa_emagrecimento->getImagem());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM programa_emagrecimento;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}
		public static function update($programa_emagrecimento){
			$c = getConn();
			$stmt = $c->prepare("UPDATE programa_emagrecimento SET nome = ?, descricao = ?, imagem = ? WHERE id = ?;");
			$stmt->bind_param("sssi", $programa_emagrecimento->getNome(), $programa_emagrecimento->getDescricao(), $programa_emagrecimento->getImagem(), $programa_emagrecimento->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($programa_emagrecimento){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM programa_emagrecimento WHERE id = ?;");
			$stmt->bind_param("i", $programa_emagrecimento->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>