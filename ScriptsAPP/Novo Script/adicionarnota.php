<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	if (isset($_POST['tempo_espera']) and isset($_POST['atendente']) and isset($_POST['problema_resolvido'])) {

		require_once('conexaoDao.php');
		$conexaoDao = new ConexaoDao;
		$con = $conexaoDao->conexao();
		$tempo_espera = $_POST['tempo_espera'];
		$atendente = $_POST['atendente'];
		$problema_resolvido = $_POST['problema_resolvido'];

		try {
			$result = array(
				'error' => null,
				'id' => null
				);
			try {
				$stmt = $this->con->prepare("INSERT INTO notas (tempo_espera, atendente, problema_resolvido) VALUES (?,?,?)");
				$stmt->bindValue(1,$tempo_espera);
				$stmt->bindValue(2,$atendente);
				$stmt->bindValue(3,$problema_resolvido);
				$stmt->execute();
				$result['id'] = $this->con->lastInsertId();
			} catch (PDOException  $e) {
				$result['error']=$e->errorInfo[1];
			}	
			$result;
			echo json_encode($result);
		}
	}
}
?>