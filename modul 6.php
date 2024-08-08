<?php error_reporting (0);

	if(isset($_POST['konversi'])){
		$celsius = $_POST['suhu'] . " °Celsius";
		$fahrenheit = (($celsius*9)/5+32) . " °Fahrenheit";
		$reamur = (($celsius*4)/5) . " °Reamur";
		$kelvin = ($celsius+273.15) . " °Kelvin";
	}
	
	if(isset($_POST['hitung'])){
		$a = 1;
		$faktorial = $a;
		$angka = $_POST['faktorialial']; 
		while($a <= $angka){
			$faktorial = $faktorial * $a;
			$a++;
		}
	}
	
	if(isset($_POST['hasill'])){
		$bilangan = $_POST['fibonacci'];
		function fibonacci($bilangan){
			$angka1 = 0;
			$angka2 = 1;
			$bilangan = intval($bilangan);
			$angka4 = "$angka1 $angka2";
			for($i = 0; $i < $bilangan-2; $i++){
				$angka3 = $angka1 + $angka2;
				$angka4 = $angka4 . " $angka3";
				$angka1 = $angka2;
				$angka2 = $angka3;
			}
			return $angka4;
		}
		$hasil=fibonacci($bilangan);
	}        
?>

<html>
<head>
	<title> Program PHP </title>
	<style type="text/css">
			body{
				background-image: url("g.webp");
				width:1000px;
				margin:auto;
				text-align: center;
			}
			
			h1, h2{padding-left:10px;}
			
			#menu-kiri, #menu-tengah, #menu-kanan{
				min-height:500px;
				float:left;
				width:323px;
				margin:5px;
				border-radius:2%;
			}
			
			#menu-kiri{background-color: #F0F8FF;}
			#menu-tengah{background-color:#F8F8FF;}
			#menu-kanan{background-color:#E0FFFF;}
	</style>
</head>
<body>
	<h1>Program Perhitungan Fungsi</h1>
	
	<div id="menu-kiri">

		<h2> Fungsi Konversi Suhu </h2>

		<table cellpadding="3" border="2px" align="center">

		    <tr> Masukkan Nilai Suhu (Celcius) </tr>
		    <form action="" method="post">
			<input type="number" name="suhu" required>
			<button type="submit" name="konversi">Konversi</button>
		    </form>
		    <br><br>

		    <tr>
                <td> Celcius </td>
                <td> : <input type="text" name="celsius" value="<?= $celsius; ?>"></td>
            </tr>

		    <tr>
                <td> Fahrenheit </td>
                <td>: <input type="text" name="fahrenheit" value="<?= $fahrenheit; ?>"></td>
            </tr>

            <tr>
                <td> Reamur </td>
                <td>: <input type="text" name="reamur" value="<?= $reamur; ?>"></td>
            </tr>

            <tr>
                <td> Kelvin </td>
                <td>: <input type="text" name="kelvin" value="<?= $kelvin; ?>"></td>
            </tr>

		</table>
	</div>
	
	<div id="menu-tengah">
		<h2> Fungsi Faktorial</h2>
		<table cellpadding="3" border="2px" align="center">
            <tr>Masukkan Angka Faktorial </tr>
            <form action="" method="post">
                <input type="number" name="faktorialial" required>
                <button type="submit" name="hitung">Hitung Angka</button>
            </form>
            <br><br>

            <tr>
                <td>Angka Faktorial</td>
                <td>: <input type="text" name="angka" value="<?= $angka; ?>"></td>
            </tr>

            <tr>
                <td>Hasil Faktorial</td>
                <td>: <input type="text" name="faktorial" value="<?= $faktorial; ?>"></td>
            </tr>

		</table>
	</div>
	
	<div id="menu-kanan">
		<h2> Fungsi Fibonacci </h2>
		<table cellpadding="3" border="2px" align="center">
            <tr>Masukkan jumlah bilangan</tr>
            <form action="" method="post">
                <input type="number" name="fibonacci" required>
                <button type="submit" name="hasill">Hasil</button>
            </form>
            <br><br>

            <tr>
                <td>Angka Fibonacci</td>
                <td>: <input type="text" name="bilangan" value="<?= $bilangan; ?>"></td>
            </tr>

            <tr>
                <td>Hasil</td>
                <td>: <input type="text" name="hasil" value="<?= $hasil; ?>"></td>
            </tr>

		</table>
	</div>
</body>
</html>