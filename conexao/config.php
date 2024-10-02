<?php
   $dbHost = 'Localhost';
   $usuario = 'root';
   $password = '';
   $dtName = 'forumulariologin';

   $conexaoDb = new mysqli($dbHost, $usuario, $password, $dtName);
/*
   if($conexaoDb -> connect_errno){
    echo "Erro, não foi possivel concectar";
   }else{
    echo "Banco de dados conectado!";
   }
   */

   //echo "SELECT * from usuarios";
?>