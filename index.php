<head>
<style>
fieldset {
	background: white;
	border: 2px solid #DDDDDD;
	display: inline-block;
	font-size: 14px;
	padding: 2em 3em;	
}

legend {
	background: #BFD48C;
	color: #FFFFFF;
	margin-bottom: 10px;
	padding: 0.5em 1em;
}
body {
    background-image: url("my_desktop_is_simple.jpg");
    margin-right: 200px;

}
p {
    border-left: 6px solid red;
    background-color: lightgrey;
}
</style>
</head>
<body>
<center style="padding-left: 20% ; padding-top: 15%" >
<fieldset>
<legend>Permuatasi & Kombinasi</legend>
	<tr>
		<td>Syarat : r harus lebih kecil daripada n</td>
	</tr>
<form action="index.php" method="GET" >
	<tr>
	<td><br><input type="number" name="n" placeholder="masukan n"><br>
	<input type="number" name="r" placeholder="masukan r"><br>
	<br><label>Pilih Metode :</label>
			<br><span><input type="radio" name="var" value="PER" checked> PERMUTASI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<br><input type="radio" name="var" value="KOM" > KOMBINASI </span><br>
	<br><center><button name="hitung">hitung</button></center></td><br>
	</tr>
</form>
<div style="border:1.5px solid red; padding: 5px; border-radius: 20% 20%; width: 50%; background: #F0F8FF;">
	<?php
if (isset($_GET['hitung'])) {

	function faktorial($n){

    $res=$n;

    for($i=$n-1;$i>0;$i--){
        $res=$res*$i; 
    }
    return $res;

}
//misal
$a=$_GET['n']; // nilai $n dapat ditentukan sesuai dengan keinginan

$b=$_GET['r']; // nilai $r dapat ditentukan sesuai dengan keinginan

//permutasi

$permutasi = faktorial($a) / faktorial($a - $b);

//kombinasi

$kombinasi = faktorial($a) / ( faktorial($b) * faktorial($a - $b) );

if($_GET['var']=="PER") echo "<center>Permuatsinya adalah : ".$permutasi;
else echo "<center>Kombinasinya adalah : ".$kombinasi;
}
?>
</fieldset>
</div>
</center>