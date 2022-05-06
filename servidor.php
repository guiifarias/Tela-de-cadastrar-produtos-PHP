<?php
$ip ="127.0.0.1";
$login="root";
$senha="";
$banco="teste";
$conn= mysqli_connect($ip, $login, $senha, $banco);
if ($conn) {
} else{
   echo "Erro de conexão"; 
}

?>