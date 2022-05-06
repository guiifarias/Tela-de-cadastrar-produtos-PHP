<?php
session_start();

    require_once ("servidor.php");
    if (isset($_GET['enviar'])){
        if (!empty($_GET['codigo'])){
            $codigo=$_GET['codigo'];
            $descricao=$_GET['descricao'];
            
            $comando="INSERT INTO produtos (codigo, descricao) VALUES ('$codigo','$descricao ')";
            $enviar=mysqli_query($conn, $comando);

         if ($enviar){
                $_SESSION['mensagem']="Produto cadastrado";
                header("location:index.php");
             
            } else{
                $_SESSION['mensagem']="Erro ao cadastrar produto";
                header("location:index.php");
                exit;
            }
        }
    }   
?>

<!-- || !empty($_GET['descriçao']) -->
