 <?php

 require '../../vendor/autoload.php';

 use phpseclib\Crypt\AES;
 use phpseclib\Crypt\Random;

 //AES



//untuk login
function cek_data($unama, $pass){

  $pass = hash('sha256', $pass);
  $cipher = new AES();
  //$cipher->setKeyLength(128);
  $cipher->setKey($pass);
  // the IV defaults to all-NULLs if not explicitly defined
  $cipher->setIV('kE4m4N4n-1nF012m4s1');

 session_start();
 $_SESSION['unama'] = $unama;
 $_SESSION['pass']= $pass;
 $_SESSION['mode'] = 'dekripsi';

  $cunama = $cipher->encrypt($unama);

  global $link;
  //mencegah sql injection
  $cunama = mysqli_real_escape_string($link, $cunama);
  $pass = mysqli_real_escape_string($link, $pass);

  $query = "SELECT id_user,nama,password FROM user WHERE username ='$cunama'";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);
  $hash = $row['password'];
  $e_pass = $cipher->decrypt($hash);
  
  $id_user = $row['id_user'];
  $nama = $row['nama'];
  $nama = $cipher->decrypt($nama);
  $_SESSION['id_user']=$id_user;
  $_SESSION['nama'] = $nama;


  if( $pass == $e_pass) {
    // session_start();

    return true;
  }
  else{
    return false;
  }
}
?>
