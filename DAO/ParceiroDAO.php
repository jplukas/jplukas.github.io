<?php
	include_once('../Classes/Parceiro.php');
	include_once('../DB/factory.php');
	class ParceiroDAO{
		public static function create($parceiro){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO parceiro (nome, link, logo) VALUES (?, ?, ?);");
			$stmt->bind_param("sss", $parceiro->getNome(), $parceiro->getLink(), $parceiro->getLogo());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM parceiro;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}
		public static function update($parceiro){
			$c = getConn();
			$stmt = $c->prepare("UPDATE parceiro SET nome = ?, link = ?, logo = ? WHERE id = ?;");
			$stmt->bind_param("sssi", $parceiro->getNome(), $parceiro->getLink(), $parceiro->getLogo(), $parceiro->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($parceiro){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM parceiro WHERE id = ?;");
			$stmt->bind_param("i", $parceiro->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>