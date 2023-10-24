<?php

include_once("conn.php");


$method = $_SERVER["REQUEST_METHOD"];

// Resgate dos dados, montagem do pedido
if($method === "GET") {

  $bordasQuery = $conn->query("SELECT * FROM borda;");
  $bordas = $bordasQuery->fetchAll();
  
  $massasQuery = $conn->query("SELECT * FROM massa;");
  $massas = $massasQuery->fetchAll();

  $saboresQuery = $conn->query("SELECT * FROM sabor;");
  $sabores = $saboresQuery->fetchAll();
  
  //print_r($sabores); exit;

  // Criação do pedido

} else if($method === "POST") {

    $data = $_POST;
    
    $borda = $data["borda"];
    $massa = $data["massa"];
    $sabores = $data["sabores"];

    // validação de sabores máximos 
    if(count($sabores) > 3) {

      /*Irá inserir uma msg na sessão e retornará um aviso Warning e retorna à página inicial */

      $_SESSION["msg"] = "Selecione no máximo 3 sabores! ";
      $_SESSION["status"] = "warning";

    } else {
      echo "Passou da validação";
      exit;
   } 
  
   // Retorna para página inicial
   header("Location: ..");
 
}

?>