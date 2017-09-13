<?php
	include_once('../Classes/Fixos_imagem_pagina.php');
	include_once('../DB/factory.php');
	class Fixos_imagem_paginaDAO{
		public static function create($fixos_imagem_pagina){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO fixos_imagem_pagina (pagina, nome_campo, src, legenda) VALUES (?, ?, ?, ?);");
			$stmt->bind_param("ssss", $fixos_imagem_pagina->getPagina(), $fixos_imagem_pagina->getNome_campo(), $fixos_imagem_pagina->getSrc(), $fixos_imagem_pagina->getLegenda());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM fixos_imagem_pagina;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			foreach($this->data as $d => $value)
			return $data;
		}

		public static function read($fields){
			$c = getConn();
			$sql = "SELECT * FROM fixos_imagem_pagina WHERE ";
			foreach ($fields as $key => $value){
				$sql .= $key . " = '" . $value . "' AND ";
			}
			$sql = chop($sql, " AND");
			$sql .= ";";
			$data = $c->query($sql);
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}

		public static function update($fixos_imagem_pagina){
			$c = getConn();
			$stmt = $c->prepare("UPDATE fixos_imagem_pagina SET pagina = ?, nome_campo = ?, src = ?, legenda = ? WHERE id = ?;");
			$stmt->bind_param("ssssi", $fixos_imagem_pagina->getPagina(), $fixos_imagem_pagina->getNome_campo(), $fixos_imagem_pagina->getSrc(), $fixos_imagem_pagina->getLegenda(), $fixos_imagem_pagina->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($fixos_imagem_pagina){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM fixos_imagem_pagina WHERE id = ?;");
			$stmt->bind_param("i", $fixos_imagem_pagina->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>