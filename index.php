<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Jajar Genjang</title>
</head>
<body>
	<h1>Kalkulator Jajar Genjang</h1>
    <form method="post" action="">
        <div>
            <label for="alas">Masukkan Alas:</label>
            <input type="number" id="alas" name="alas" required />
        </div>    
        <div>    
            <label for="tinggi">Masukkan Tinggi:</label>
            <input type="number" id="tinggi" name="tinggi" required />
        </div>    
        <div>
            <label for="sisi">Masukkan Sisi Miring:</label>
            <input type="number" id="sisi" name="sisi" required />
        </div>
        <div>
        <input type="submit" name="submit" value="Hitung" />
        </div>
        
</form>

	<?php
		if(isset($_POST['submit'])){
			$alas = $_POST['alas'];
			$tinggi = $_POST['tinggi'];
			$sisi = $_POST['sisi'];

			$luas = $alas * $tinggi;
			$keliling = 2 * ($alas + $sisi);

            echo '<br> Luas Bangun Datar Adalah' . $luas;
            echo '<br> Keliling Bangun Datar Adalah ' . $keliling;
		}
	?>
</body>
</html>
