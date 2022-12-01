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
  $_SESSION['quest2'] = "verdadeiro";
  $_SESSION['quest3'] = "verdadeiro";
  $_SESSION['quest4'] = "verdadeiro";
  $_SESSION['quest5'] = "verdadeiro";
  $_SESSION['quest6'] = "verdadeiro";
  $_SESSION['quest7'] = "verdadeiro";
  $_SESSION['quest8'] = "verdadeiro";
  $_SESSION['quest9'] = "verdadeiro";
  $_SESSION['quest10'] = "verdadeiro";
  $_SESSION['quest11'] = "verdadeiro";
  $_SESSION['quest12'] = "verdadeiro";
  $_SESSION['quest13'] = "verdadeiro";
  $_SESSION['quest14'] = "verdadeiro";
  $_SESSION['quest15'] = "verdadeiro";
  $_SESSION['quest16'] = "verdadeiro";
  $_SESSION['quest17'] = "verdadeiro";
  $_SESSION['quest18'] = "verdadeiro";
  $_SESSION['quest19'] = "verdadeiro";
  $_SESSION['quest20'] = "verdadeiro";
?>