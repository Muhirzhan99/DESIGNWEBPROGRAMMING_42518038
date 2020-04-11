<?php
/*Editan Eddy */

$action = $_POST["action"];
//$hasil = $_REQUEST;
parse_str($_POST['dataku'], $hasil); 

//parse_str($_REQUEST['dataku'], $hasil);
//echo 'firstname  : ' . $hasil['firstname']. '<br/>';
//echo 'lastname  : ' . $hasil['lastname'];
//echo "<br />";
//echo 'username  : ' . $hasil['username'];
//echo "<br />";
//echo 'email  : ' . $hasil['email'];
//echo "<br />";
//echo 'address  : ' . $hasil['address'];
//echo "<br />";
//echo 'address2  : ' . $hasil['address2'];
//echo "<br />";
//echo 'country  : ' . $hasil['country'];
//echo "<br />";
//echo 'state  : ' . $hasil['state'];
//echo "<br />";
//echo 'zip  : ' . $hasil['zip'];
//echo "<br />";
//echo "billing :".implode(',',$hasil['billing']);
//echo "<br />";
//foreach($hasil['billing'] as $idx => $hasilnya){
	//echo "Billing$idx : $hasilnya <br/>";
//}
//echo 'billing : ' . $hasil['billing'][0],$hasil['billing'][1];
//echo "<br />";
//echo 'paymentMethod  : ' . $hasil['paymentMethod'];
//echo "<br />";
//echo 'namecard  : ' . $hasil['namecard'];
//echo "<br />";
//echo 'creditnum  : ' . $hasil['creditnum'];
//echo "<br />";
//echo 'expiration  : ' . $hasil['expiration'];
//echo "<br />";
//echo 'cvv  : ' . $hasil['cvv'];
//echo "<br />";
//echo '<pre>'; print_r($hasil);
/**/ 

/*SQL*/
//$link = mysqli_connect("localhost","root","","formku");
if ($action == 'create')
$sql = "INSERT INTO `biodata`(`namadepan`, `namabelakang`, `namapanggilan`, `email`, `alamat`, `asalnegara`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `hobi`, `nomortelpon`, `datamasuk`) values ('$hasil[namadepan]','$hasil[namabelakang]','$hasil[namapanggilan]','$hasil[email]','$hasil[alamat]','$hasil[asalnegara]','$hasil[tempatlahir]', '$hasil[tanggallahir]', '$hasil[jeniskelamin]', '$hasil[hobi]', '$hasil[telpon]', now())";
elseif($action == 'read')
$sql = "SELECT namadepan, namabelakang, namapanggilan, email, alamat, asalnegara, tempatlahir, tanggallahir, jeniskelamin, hobi, nomortelpon from biodata";
elseif($action == 'update')
$sql = "UPDATE biodata set namadepan = '$hasil[namadepan]', namabelakang = '$hasil[namabelakang]', namapanggilan = '$hasil[namapanggilan]', email = '$hasil[email]', alamat = '$hasil[alamat]', asalnegara = '$hasil[asalnegara]', tempatlahir = '$hasil[tempatlahir]', tanggallahir = '$hasil[tanggallahir]', jeniskelamin = '$hasil[jeniskelamin]', hobi = '$hasil[hobi]', nomortelpon = '$hasil[telpon]' where namadepan = '$hasil[namadepan]'"; 
elseif($action == 'delete')
$sql = "DELETE from biodata where namadepan = '$hasil[namadepan]'";
//if(mysqli_query($link,$sql))
//{
 // echo "Berhasil merekam data.";}
  //else
  //{
    //echo "ERROR: Tidak dapat mengeksekusi $sql.".
    //mysqli_error($link);
  //}
//mysqli_close($link);

//eksekusi syntaxsql 
$conn = new mysqli("localhost","root","","form"); //dbhost, dbuser, dbpass, dbname
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else{
  echo "Database connected. ";
}
//create, update, delete query($syntaxsql) -> true false
if ($conn->query($sql) === TRUE) {
	echo "Query $action with syntax $sql suceeded !";
}
elseif ($conn->query($sql) === FALSE){
	echo "Error: $sql" .$conn->error;
}
//khusus read query($syntaxsql) -> semua associated array
else{
	$result = $conn->query($sql); //bukan true false tapi data array asossiasi
	if($result->num_rows > 0){
		echo "<table id='tresult' class='table table-striped table-bordered'>";
		echo "<thead><th>NamaDepan</th><th>NamaBelakang</th><th>NamaPanggilan</th><th>Email</th><th>Alamat</th><th>Asalnegara</th><th>TempatLahir</th><th>TanggalLahir</th><th>JenisKelamin</th><th>Hobi</th><th>NomorTelpon</th>
			</thead>";
		echo "<tbody>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row['namadepan']."</td><td>". $row['namabelakang']."</td></tr>".$row['namapanggilan']."</td><td>".$row['email']."</td><td>".$row['alamat']."</td><td>".$row['asalnegara']."</td><td>".$row['tempatlahir']."</td><td>".$row['tanggallahir']."</td><td>".$row['jeniskelamin']."</td><td>".$row['hobi']."</td><td>".$row['nomortelpon']."</td>
				</tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}
}
$conn->close();


//echo "Billing :".implode(',',$hasil['billing']);
/* File aslinya *
echo 'firstname  : ' . $_POST['firstname'] . '<br/>';
echo 'lastname : ' . $_POST['lastname'];
echo "<br />";
echo 'username : ' . $_POST['username'];
echo "<br />";
echo 'email : ' . $_POST['email'];
echo "<br />";
echo 'address : ' . $_POST['address'];
echo "<br />";
echo 'address2 : ' . $_POST['address2'];
echo "<br />";
echo 'namecard : ' . $_POST['namecard'];
echo "<br />";
echo 'creditnum : ' . $_POST['creditnum'];
echo "<br />";
echo 'expiration : ' . $_POST['expiration'];
echo "<br />";
echo 'cvv: ' . $_POST['cvv'];
echo '<pre>'; print_r($_POST);
/**/
?>