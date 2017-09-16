<?php
	include_once('../Classes/Servico.php');
	include_once('../DB/factory.php');
	class ServicoDAO{
		public static function create($servico){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO servico (nome, texto_principal, imagem_principal, texto_portfolio, imagem_portfolio) VALUES (?, ?, ?, ?, ?);");
			$stmt->bind_param("sssss", $servico->getNome(), $servico->getTexto_principal(), $servico->getImagem_principal(), $servico->getTexto_portfolio(), $servico->getImagem_portfolio());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM servico;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}
		public static function update($servico){
			$c = getConn();
			$stmt = $c->prepare("UPDATE servico SET nome = ?, texto_principal = ?, imagem_principal = ?, texto_portfolio = ?, imagem_portfolio = ? WHERE id = ?;");
			$stmt->bind_param("sssssi", $servico->getNome(), $servico->getTexto_principal(), $servico->getImagem_principal(), $servico->getTexto_portfolio(), $servico->getImagem_portfolio(), $servico->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($servico){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM servico WHERE id = ?;");
			$stmt->bind_param("i", $servico->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>