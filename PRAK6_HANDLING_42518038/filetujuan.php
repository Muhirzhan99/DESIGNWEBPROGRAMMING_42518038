<?php

echo $action = $_POST['action'];

parse_str($_POST['dataform'], $hasil);

$gambarku = $_FILES["fotoku"];

$ccnumber = trim($hasil['ccnumber']);

if (!empty($gambarku["name"]) and !empty($ccnumber)){
	$namafile = $gambarku["name"];		//nama filenya
	preg_match("/([^\.]+$)/", $namafile, $ext);		//Regex: mencari string sesudah titik terakhir, saved in array ext
	$file_ext = strtolower($ext[1]);
	$namafilebaru = $hasil['ccnumber'].".".$ext[1];	//nama file barunya [ccnumber].png
    $file = $gambarku["tmp_name"];						//source filenya
    //perform the upload operation
	$extensions= array("jpeg","jpg","png");				//extensi file yang diijinkan
	//Kirim pesan error jika extensi file yang diunggah tidak termasuk dalam extensions
	$errors = array();
	if(in_array($file_ext,$extensions) === false)
	 $errors[] = "Extensi yang diperbolehkan jpeg atau png.";

	//Kirim pesan error jika ukuran file > 500kB
	$file_size = $gambarku['size'];
	if($file_size > 2097152)
	 $errors[] = "Ukuran file harus lebih kecil dari 2MB.";

	//Upload file
	if(empty($errors)){
		if(move_uploaded_file($file, "uploads/" . $namafilebaru))
			echo "Uploaded dengan nama $namafilebaru";
	}
}else echo $errors[] = "Lengkapi NIM dan gambarnya. ";
echo "<br/>";

if(!empty($errors)){
	echo "Error : ";
	foreach ($errors as $val)
		echo $val;
}

if ($action == 'create')
{
$sql = "INSERT INTO `biodata`(`namadepan`, `namabelakang`, `namapanggilan`, `email`, `alamat`, `asalnegara`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `hobi`, `nomortelpon`, `foto`, `datamasuk`) values ('$hasil[namadepan]','$hasil[namabelakang]','$hasil[namapanggilan]','$hasil[email]','$hasil[alamat]','$hasil[asalnegara]','$hasil[tempatlahir]', '$hasil[tanggallahir]', '$hasil[jeniskelamin]', '$hasil[hobi]', '$hasil[telpon]', '{$namafilebaru}',now())";
}
elseif($action == 'read')
{
$sql = "SELECT * from `biodata`";
}
elseif($action == 'update')
{
$sql = "UPDATE biodata set namadepan = '$hasil[namadepan]', namabelakang = '$hasil[namabelakang]', namapanggilan = '$hasil[namapanggilan]', email = '$hasil[email]', alamat = '$hasil[alamat]', asalnegara = '$hasil[asalnegara]', tempatlahir = '$hasil[tempatlahir]', tanggallahir = '$hasil[tanggallahir]', jeniskelamin = '$hasil[jeniskelamin]', hobi = '$hasil[hobi]', nomortelpon = '$hasil[telpon]', foto = '$namafilebaru' where namadepan = '$hasil[namadepan]'"; 
}
elseif($action == 'delete')
{
$sql = "DELETE from biodata where namadepan = '$hasil[namadepan]'";
}

else {
	echo "ERROR ACTION";
	exit();
}
$conn = new mysqli("localhost","root","","form");
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else{
  echo "Database connected. ";
}

if ($conn->query($sql) === TRUE) {
	echo "Query $action with syntax $sql suceeded !";

}
elseif ($conn->query($sql) === FALSE){
	echo "Error: $sql" .$conn -> error;
}
else
{
	$result = $conn->query($sql);
	if($result->num_rows > 0)

	{
		echo "<table id='tresult' class='table table-striped table-bordered'>";
		echo "<thead><th>NamaDepan</th><th>NamaBelakang</th><th>NamaPanggilan</th><th>Email</th><th>Alamat</th><th>Asalnegara</th><th>TempatLahir</th><th>TanggalLahir</th><th>JenisKelamin</th><th>Hobi</th><th>NomorTelpon</th><th>Foto</th>
			</thead>";
		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row['namadepan']."</td><td>". $row['namabelakang']."</td></tr>".$row['namapanggilan']."</td><td>".$row['email']."</td><td>".$row['alamat']."</td><td>".$row['asalnegara']."</td><td>".$row['tempatlahir']."</td><td>".$row['tanggallahir']."</td><td>".$row['jeniskelamin']."</td><td>".$row['hobi']."</td><td>".$row['nomortelpon']."</td><td>".$row['foto']."</td>
				</tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}
}
$conn->close();
?>