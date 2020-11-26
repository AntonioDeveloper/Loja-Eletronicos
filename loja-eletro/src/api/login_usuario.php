<?php

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if(strlen($email) > 3 && strlen($senha) > 3){
  $conn = mysqli_connect("localhost", "root", "", "fstackeletro");

  $consulta_entrada = $conn->query("SELECT * from clientes where email ='$email' AND senha ='$senha'");

  $clientes = mysqli_fetch_all($consulta_entrada);

  $_SESSION['nome'] = $clientes[0][1];
  $_SESSION['foto'] = $clientes[0][2];
  $_SESSION['email'] = $clientes[0][3];
  $_SESSION['email'] = $clientes[0][4];

  header('Location: index.php');
}
  else {
    echo "
      <script>
        alert('E-mail ou senha inválidos!')
        location.href = 'index.php'
      </script>";
  }