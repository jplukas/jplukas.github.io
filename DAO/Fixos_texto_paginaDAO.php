<?php
	include_once('../Classes/Fixos_texto_pagina.php');
	include_once('../DB/factory.php');
	class Fixos_texto_paginaDAO{
		public static function create($fixos_texto_pagina){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO fixos_texto_pagina (pagina, nome_campo, valor) VALUES (?, ?, ?);");
			$stmt->bind_param("sss", $fixos_texto_pagina->getPagina(), $fixos_texto_pagina->getNome_campo(), $fixos_texto_pagina->getValor());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM fixos_texto_pagina;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			foreach($this->data as $d => $value)
			return $data;
		}

		public static function read($fields){
			$c = getConn();
			$sql = "SELECT * FROM fixos_texto_pagina WHERE ";
			foreach ($fields as $key => $value){
				$sql .= $key . " = '" . $value . "' AND ";
			}
			$sql = chop($sql, " AND");
			$sql .= ";";
			$data = $c->query($sql);
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}

		public static function update($fixos_texto_pagina){
			$c = getConn();
			$stmt = $c->prepare("UPDATE fixos_texto_pagina SET pagina = ?, nome_campo = ?, valor = ? WHERE id = ?;");
			$stmt->bind_param("sssi", $fixos_texto_pagina->getPagina(), $fixos_texto_pagina->getNome_campo(), $fixos_texto_pagina->getValor(), $fixos_texto_pagina->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($fixos_texto_pagina){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM fixos_texto_pagina WHERE id = ?;");
			$stmt->bind_param("i", $fixos_texto_pagina->getId());
			$res = $stmt->execute();
			return $res;
		}

	}	
?>