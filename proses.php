<?php
if(isset($_GET['angka1']) && isset($_GET['angka2']) && isset($_GET['operator'])){
    $angka1 = $_GET['angka1'];
    $angka2 = $_GET['angka2'];
    $operator = $_GET['operator'];
    $hasil = "";

    switch($operator){
        case '+':
            $hasil = $angka1 + $angka2;
            break;
        case '-':
            $hasil = $angka1 - $angka2;
            break;
        case '*':
            $hasil = $angka1 * $angka2;
            break;
        case '/':
            $hasil = $angka1 / $angka2;
            break;
        default:
            $hasil = "Operator tidak dikenali";
            break;
    }

    echo "<script>document.getElementById('hasil').value = '$hasil';</script>";
}
?>
