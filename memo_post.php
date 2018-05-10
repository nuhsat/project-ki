<?php

require 'vendor/autoload.php';

use phpseclib\Crypt\AES;
use phpseclib\Crypt\Random;

include 'db.php';

session_start();

if( isset($_POST['judul']) ){
    $tit = $_POST['judul'];
    $mem = $_POST['isi_post'];
    $id= $_SESSION['id_user'];

    global $link;
    $mem = mysqli_real_escape_string($link, $mem);
    $tit = mysqli_real_escape_string($link, $tit);

    $cipher = new AES();
    //$cipher->setKeyLength(128);
    $cipher->setKey($_SESSION['pass']);
    // the IV defaults to all-NULLs if not explicitly defined
    $cipher->setIV('kE4m4N4n-1nF012m4s1');
    $ctit=$cipher->encrypt($tit);
    $cmem=$cipher->encrypt($mem);

    $query = "INSERT INTO post(id_user,judul, isi_post) VALUES ('$id','$ctit', '$cmem')";
    if( mysqli_query($link,$query) ){
      header('Location: index.php');
    }
    else{
      echo "kok salah";
    }
  }
?>
