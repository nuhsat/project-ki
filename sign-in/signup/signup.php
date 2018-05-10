<?php
require_once "core/init.php";
require '../../vendor/autoload.php';

use phpseclib\Crypt\AES;
use phpseclib\Crypt\Random;


if( isset($_POST['submit']) ){
  $unama = $_POST['username'];
  $pass = $_POST['password'];
  $email = $_POST['email'];
  $nama = $_POST['nama'];

  if (!empty(trim($unama)) && !empty(trim($pass)) ){

  $cipher = new AES();
  $cipher->setKey($pass);
  $cipher->setIV('kE4m4N4n-1nF012m4s1');
  $cunama=$cipher->encrypt($unama);

  if(register_cek_nama($cunama)){
    //memasukan ke database
        if(register_user($unama, $pass)){
          header('Location: ../../index.php');
        }else{
          echo 'gagal daftar';
        }
      }else{
        echo 'nama sudah ada, tidak bisa daftar';
      }
  }else{
    echo 'tidak boleh kosong';
  }
}
