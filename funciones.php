<?php 
	function nombreCompleto($nom, $pat, $mat){
		$apenom = trim($nom)." ".trim($pat)." ".trim($mat);
		return strtoupper($apenom);
	}



	function generaCorreo($nom, $pat){
		$email="";
		$email=substr(trim($nom), 0,1).substr(eliminaEspacios($pat), 0)."@iegb.edu.pe";
		return strtolower($email);
	}

	function generaCodigo($nom, $pat, $mat){
		$codigo="";
		$codigo=substr(trim($nom),0,1).substr(trim($pat), 0,1).substr(trim($mat),0,1)."-001";
		return $codigo;
	}
	function eliminaEspacios($str){
		$str=trim($str); 
		$cad="";
		for ($i=1; $i < strlen($str) ; $i++) { 
			$cad=substr($i,$i+1);

			if($cad==' '){
				$str=substr($str,0,$i).substr($str, $i+2, strlen($str));
			}
		}
		return $str;
	}




 ?>