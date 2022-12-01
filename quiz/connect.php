<?php
  session_start();
  $user = 'root';
  $pass = '';
  $banco = 'quiz';
  $server = 'localhost';
  $conn = new mysqli($server, $user, $pass, $banco);
  if(!$conn){
    echo "Erro de conexão ".$conn->error;
  }

  /* RESPOSTAS DAS PERGUNTAS */
  $_SESSION['acertos'] = 0;
  $_SESSION['quest1'] = "verdadeiro";
  $_SESSION['quest2'] = "echo";
  $_SESSION['quest3'] = "$";
  $_SESSION['quest4'] = "strlen";
  $_SESSION['quest5'] = "falso";
  $_SESSION['quest6'] = "verdadeiro";
  $_SESSION['quest7'] = "verdadeiro";
  $_SESSION['quest8'] = "/*";
  $_SESSION['quest9'] = "verdadeiro";
  $_SESSION['quest10'] = "falso";
  $_SESSION['quest11'] = "echo";
  $_SESSION['quest12'] = "falso";
  $_SESSION['quest13'] = "verdadeiro";
  $_SESSION['quest14'] = "verdadeiro";
  $_SESSION['quest15'] = "falso";
  $_SESSION['quest16'] = "verdadeiro";
  $_SESSION['quest17'] = "falso";
  $_SESSION['quest18'] = "sim";
  $_SESSION['quest19'] = "Falso";
  $_SESSION['quest20'] = "sim";
?>