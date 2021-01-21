<?php
	class Validate {
		function valid_cpf(string $cpf){
			$a = intval($cpf[0]);
			$b = intval($cpf[1]);
			$c = intval($cpf[2]);
			$d = intval($cpf[4]);
			$e = intval($cpf[5]);
			$f = intval($cpf[6]);
			$g = intval($cpf[8]);
			$h = intval($cpf[9]);
			$i = intval($cpf[10]);
			$j = intval($cpf[12]);
			$k = intval($cpf[13]);

			$soma1 = ($a * 10) + ($b * 9) + ($c * 8) + ($d * 7) + ($e * 6) + ($f * 5) + ($g * 4) + ($h * 3) + ($i * 2);
			$res1 = $soma1 % 11;
			if($res1 < 2){
				$dj = 0;
			}else {
				$dj = 11 - $res1;
			}
			$soma2 = ($a * 11) + ($b * 10) + ($c * 9) + ($d * 8) + ($e * 7) + ($f * 6) + ($g * 5) + ($h * 4) + ($i * 3) + ($j * 2);
			$res2 = $soma2 % 11;
			if($res2 < 2){
				$dk = 0;
			}else {
				$dk = 11 - $res2;
			}

			if($dj == $j && $dk == $k){
				return true;
			}else {
				return false;
			}
		}
		function valid_cnpj($cnpj){
			// AB.CDE.FGH/IJKL-MN
			$a = intval($cnpj[0]);
			$b = intval($cnpj[1]);
			$c = intval($cnpj[3]);
			$d = intval($cnpj[4]);
			$e = intval($cnpj[5]);
			$f = intval($cnpj[7]);
			$g = intval($cnpj[8]);
			$h = intval($cnpj[9]);
			$i = intval($cnpj[11]);
			$j = intval($cnpj[12]);
			$k = intval($cnpj[13]);
			$l = intval($cnpj[14]);
			$m = intval($cnpj[16]);
			$n = intval($cnpj[17]);
			$soma1 = ($a * 5) + ($b * 4) + ($c * 3) + ($d * 2) + ($e * 9) + ($f * 8) + ($g * 7) + ($h * 6) + ($i * 5) + ($j * 4) + ($k * 3) + ($l * 2);
			$res1 = $soma1 % 11;
			if($res1 < 2){
				$dm = 0;
			}else {
				$dm = 11 - $res1;
			}
			$soma2 = ($a * 6) + ($b * 5) + ($c * 4) + ($d * 3) + ($e * 2) + ($f * 9) + ($g * 8) + ($h * 7) + ($i * 6) + ($j * 5) + ($k * 4) + ($l * 3) + ($m * 2);
			$res2 = $soma2 % 11;
			if($res2 < 2){
				$dn = 0;
			}else {
				$dn = 11 - $res2;
			}
			if($dm == $m && $dn == $n){
				return true;
			}else {
				return false;
			}
		}
		function valid_rg($rg){
			// AB.CDE.FGH-I
			$a = intval($rg[0]);
			$b = intval($rg[1]);
			$c = intval($rg[3]);
			$d = intval($rg[4]);
			$e = intval($rg[5]);
			$f = intval($rg[7]);
			$g = intval($rg[8]);
			$h = intval($rg[9]);
			$i = intval($rg[11]);

			$soma = ($a * 2) + ($b * 3) + ($c * 4) + ($d * 5) + ($e * 6) + ($f * 7) + ($g * 8) + ($h * 9);
			$res = $soma % 11;
			$di = 11 - $res;
			if($di == $i){
				return true;
			}else {
				return false;
			}
		}
	}
	class Tools {
		public static function alert($alert){
			?>
			<script type="text/javascript">
				alert("<?php echo $alert; ?>")
			</script>
			<?php
		}
		public static function redirect($path){
			?>
			<script type="text/javascript">
				window.location.href='<?php echo $path; ?>'
			</script>
			<?php
		}
		public static function open($path){
			?>
			<script type="text/javascript">
				window.open('<?php echo $path; ?>')
			</script>
			<?php
		}
	}
	class Data {
		function __construct(string $timezone = 'America/Sao_Paulo'){
			date_default_timezone_set($timezone);
		}
		public static function show($format){
			return date($format);
		}
	}
	class Connect {
		public $pdo;
		function __construct($host, $db, $user, $pass){
			try {
				$this->pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
			}catch(Exception $e){
				echo "Connect error";
				die();
			}
		}
	}
	
