<?php
/*Editan Eddy */
parse_str($_POST['dataku'], $hasil);
echo 'firstname  : ' . $hasil['firstname']. '<br/>';
echo 'lastname  : ' . $hasil['lastname'];
echo "<br />";
echo 'username  : ' . $hasil['username'];
echo "<br />";
echo 'email  : ' . $hasil['email'];
echo "<br />";
echo 'address  : ' . $hasil['address'];
echo "<br />";
echo 'address2  : ' . $hasil['address2'];
echo "<br />";
echo 'country  : ' . $hasil['country'];
echo "<br />";
echo 'state  : ' . $hasil['state'];
echo "<br />";
echo 'zip  : ' . $hasil['zip'];
echo "<br />";
echo "billing :".implode(',',$hasil['billing']);
echo "<br />";
//foreach($hasil['billing'] as $idx => $hasilnya){
	//echo "Billing$idx : $hasilnya <br/>";
//}
//echo 'billing : ' . $hasil['billing'][0],$hasil['billing'][1];
//echo "<br />";
echo 'paymentMethod  : ' . $hasil['paymentMethod'];
echo "<br />";
echo 'namecard  : ' . $hasil['namecard'];
echo "<br />";
echo 'creditnum  : ' . $hasil['creditnum'];
echo "<br />";
echo 'expiration  : ' . $hasil['expiration'];
echo "<br />";
echo 'cvv  : ' . $hasil['cvv'];
echo "<br />";
//echo '<pre>'; print_r($hasil);
/**/ 

/*SQL*/
$link = mysqli_connect("localhost","root","","formku");
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil','$hasil','$hasil','$hasil','$hasil')";
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]','$hasil[email]','$hasil[address]')";
$sql = "INSERT INTO `tbl_user`(`firstname`, `lastname`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`, `paymentMethod`, `namecard`, `creditnum`, `expiration`, `cvv`, `time_insert`) VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]','$hasil[email]','$hasil[address]', '$hasil[address2]', '$hasil[country]', '$hasil[state]', '$hasil[zip]', '$hasil[paymentMethod]', '$hasil[namecard]', '$hasil[creditnum]', '$hasil[expiration]', '$hasil[cvv]', now())";

if(mysqli_query($link,$sql))
{
  echo "Records Added Successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($link);
  }
mysqli_close($link);

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