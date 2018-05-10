<?php

require '../../vendor/autoload.php';

use phpseclib\Crypt\AES;
use phpseclib\Crypt\Random;


function register_user($unama, $pass){
 global $link;

 $email = $_POST['email'];
 $nama = $_POST['nama'];
 //mencegah sql injection
 $unama = mysqli_real_escape_string($link, $unama);
 $pass = mysqli_real_escape_string($link, $pass);


//AES

$cipher = new AES(); // could use AES::MODE_CBC
// keys are null-padded to the closest valid size
// longer than the longest key and it's truncated
//$cipher->setKeyLength(128);
$cipher->setKey($pass);
// the IV defaults to all-NULLs if not explicitly defined
$cipher->setIV('kE4m4N4n-1nF012m4s1');

$unama = $cipher->encrypt($unama);
$email = $cipher->encrypt($email);
$nama = $cipher->encrypt($nama);
$pass = $cipher->encrypt($pass);

// $plaintext =
// echo $cipher->encrypt($plaintext)
//echo $cipher->decrypt($cipher->encrypt($plaintext));

//hash
// $pass = password_hash($pass, PASSWORD_DEFAULT);

 $query = "INSERT INTO user(username, password, email, nama) VALUES ('$unama', '$pass', '$email', '$nama')";

 if( mysqli_query($link,$query) ){
   return true;
 }else{
   return false;
 }
}

//menguji nama kembar
function register_cek_nama($unama){
 global $link;
 $unama = mysqli_real_escape_string($link, $unama);
 $query = "SELECT * FROM user WHERE username='$unama'";
 if($result = mysqli_query($link, $query)){
   if(mysqli_num_rows($result) == 0) return true;
   else return false;
 }
}

//menguji nama di database
function login_cek_nama($unama){
 global $link;
 $unama = mysqli_real_escape_string($link, $unama);
 $query = "SELECT * FROM user WHERE username='$unama'";
 if($result = mysqli_query($link, $query)){
   if(mysqli_num_rows($result) != 0) return true;
   else return false;
 }
}


//untuk login
function cek_data($unama, $pass){
 global $link;
 //mencegah sql injection
 $unama = mysqli_real_escape_string($link, $unama);
 $pass = mysqli_real_escape_string($link, $pass);

 $query = "SELECT password FROM user WHERE username ='$unama'";
 $result = mysqli_query($link, $query);
 $hash = mysqli_fetch_assoc($result);

 if( password_verify($pass, $hash['password']) ){
   return false;
 }
 else{
   return true;
 }
}
?>
