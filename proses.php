<?php
if(isset($_GET['angka1']) && isset($_GET['angka2']) && isset($_GET['operator'])){
	$angka1 = $_GET['angka1'];
	$angka2 = $_GET['angka2'];
	$operator = $_GET['operator'];
    $hasil = "";
    

	if($operator == '+'){
		$hasil = $angka1 + $angka2;
	}
	elseif($operator == '-'){
		$hasil = $angka1 - $angka2;
	}
	elseif($operator == '*'){
		$hasil = $angka1 * $angka2;
	}
	elseif($operator == '/'){
		$hasil = $angka1 / $angka2;
	}

	echo "<script>document.getElementById('hasil').value = '$hasil';</script>";
    
}
?>
