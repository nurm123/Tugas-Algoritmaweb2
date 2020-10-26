<?php 

// memanggil POST

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$nilai_absen = $_POST['nilai_absen'];
$nilai_etika = $_POST['nilai_etika'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

// menghitung nilai yang diinput
$nilai_Absen = $nilai_absen * 0.15;
$nilai_Etika = $nilai_etika * 0.1;
$nilai_Tugas = $nilai_tugas * 0.2;
$nilai_UTS = $nilai_uts * 0.25;
$nilai_UAS = $nilai_uas * 0.3;

// penjumlahan dari nilai-nilai
$nilai_akhir = $nilai_Absen + $nilai_Etika + $nilai_Tugas + $nilai_UTS + $nilai_UAS;

// menampilkan grade
if ($nilai_akhir >= 80) {
	$grade ="A";
} else if ($nilai_akhir >= 70) {
	$grade ="B";
} else if ($nilai_akhir >= 50) {
	$grade ="C";
} else if ($nilai_akhir >= 40) {
	$grade ="D";
} else {
	$grade ="E";
}


echo "
	<h1> Hasil Perhitungan Nilai Akhir </h1> <br>
	Nama Mahasiswa : $nama <br>
	Nim Mahasiswa : $nim <br>
	Mata Kuliah : $matkul <br>
	Nilai Absen : <b>$nilai_absen</b> <br>
	Nilai Etika : <b>$nilai_etika</b> <br>
	Nilai Tugas : <b>$nilai_tugas</b> <br>
	Nilai UTS : <b>$nilai_uts</b> <br>
	Nilai UAS : <b>$nilai_uas</b>

	<h4> Nilai Akhir : $nilai_akhir <h4>
	<h4> Grade : $grade <h4>
";

?>