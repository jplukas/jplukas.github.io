<?php
	include_once('../Classes/Slide_home.php');
	include_once('../DB/factory.php');
	class Slide_homeDAO{
		public static function create($slide_home){
			$c = getConn();
			$stmt = $c->prepare("INSERT INTO slide_home (imagem_grande, imagem_pequena, texto_grande, texto_pequeno, link) VALUES (?, ?, ?, ?, ?);");
			$stmt->bind_param("sssss", $slide_home->getImagem_grande(), $slide_home->getImagem_pequena(), $slide_home->getTexto_grande(), $slide_home->getTexto_pequeno(), $slide_home->getLink());
			$res = $stmt->execute();
			return $res;
		}
		public static function readAll(){
			$c = getConn();
			$data = $c->query("SELECT * FROM slide_home;");
			$data = mysqli_fetch_all($data, MYSQLI_ASSOC);
			return $data;
		}
			
		public static function update($slide_home){
			$c = getConn();
			$sql = "UPDATE slide_home SET imagem_grande = ?, imagem_pequena = ?, texto_grande = ?, texto_pequeno = ?, link = ? WHERE id = ?;";
			$stmt = $c->prepare("UPDATE slide_home SET imagem_grande = ?, imagem_pequena = ?, texto_grande = ?, texto_pequeno = ?, link = ? WHERE id = ?;");
			$stmt->bind_param("sssssi", $slide_home->getImagem_grande(), $slide_home->getImagem_pequena(), $slide_home->getTexto_grande(), $slide_home->getTexto_pequeno(), $slide_home->getLink(), $slide_home->getId());
			$res = $stmt->execute();
			return $res;
		}
		public static function delete($slide_home){
			$c = getConn();
			$stmt = $c->prepare("DELETE FROM slide_home WHERE id = ?;");
			$stmt->bind_param("i", $slide_home->getId());
			echo $slide_home->getId();
			$stmt->execute();
		}

	}	
?>