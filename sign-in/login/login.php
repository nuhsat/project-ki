<?php

require_once ('core/init.php');

if( isset($_POST['submit']) ){
    $unama = $_POST['username'];
    $pass = $_POST['password'];

    if(!empty(trim($unama)) && !empty(trim($pass)))
    {
          if(cek_data($unama, $pass)){
            header('Location: ../../index.php');
          }
          else{
            echo 'Data ada yang salah';
          }

      }
      else{
            echo 'Tidak Boleh Kosong';
        }
  }
?>
