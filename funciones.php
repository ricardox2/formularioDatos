<?php 
	function nombreCompleto($nom, $pat, $mat){
		return trim($nom)." ".trim($pat)." ".trim($mat);
	}

	function generaCodigo($nom, $pat, $mat){
		$codigo="";
		$codigo=substr(trim($nom),0,1).substr($pat, 0,1).substr($mat, 0,1)."-001";
		return $codigo;
	}

	function generaCorreo($nom, $pat){
		$email="";
		$email=substr($nom, 0,1).substr($pat, 0)."@iegb.edu.pe";
		return $email;
	}

 ?>