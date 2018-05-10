 <?php

 require '../../vendor/autoload.php';

 use phpseclib\Crypt\AES;
 use phpseclib\Crypt\Random;

 //AES



//untuk login
function cek_data($unama, $pass){

  $cipher = new AES(); // could use AES::MODE_CBC
  // keys are null-padded to the closest valid size
  // longer than the longest key and it's truncated
  //$cipher->setKeyLength(128);
  $cipher->setKey($pass);
  // the IV defaults to all-NULLs if not explicitly defined
  $cipher->setIV('kE4m4N4n-1nF012m4s1');

 session_start();
 $_SESSION['unama'] = $unama;
 $_SESSION['pass']= $pass;

  $unama = $cipher->encrypt($unama);
  $pass = $cipher->encrypt($pass);



  global $link;
  //mencegah sql injection
  $unama = mysqli_real_escape_string($link, $unama);
  $pass = mysqli_real_escape_string($link, $pass);

  $query = "SELECT id_user,password FROM user WHERE username ='$unama'";
  $result = mysqli_query($link, $query);
  $hash = mysqli_fetch_assoc($result)['password'];

  if( password_verify($pass, $hash) ){
    return false;
  }
  else{
    $id_user = mysqli_fetch_assoc($result)['id_user'];

    $_SESSION['id_user']=$id_user;
    return true;
  }
}
?>
