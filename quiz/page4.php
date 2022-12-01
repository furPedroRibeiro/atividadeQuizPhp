<?php
  include('connect.php');
  if(isset($_POST['resp4'])){
    if($_POST['resp4'] == $_SESSION['quest4']){
      $_SESSION['acertos']++;
    }
    header('location: page5.php');
  } 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <title>Quiz php</title>
    <style>
      :root {
        --main: rgb(204, 31, 65);
        --yellow: rgb(255, 210, 97);
      }
      .header {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 12vh;
        border-bottom: 1px solid var(--main);
      }
      p {
        font-size: 40px;
        font-weight: 600;
        font-family: 'Rubik', sans-serif;
        color: var(--main);
      }
      #red {
        font-size: 30px;
        font-weight: 600;
        font-family: 'Rubik', sans-serif;
        color: var(--main);
      }
      #yellow {
        font-size: 25px;
        font-weight: 600;
        font-family: 'Rubik', sans-serif;
        color: var(--yellow);

        padding: 0.3rem;

        background-color: var(--main);
      }
      .content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        gap: 0rem;

        height: 88vh;
      }
      .text {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        width: 17rem;
      }
      .form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 1.5rem;
      }
      select {
        width: 17rem;
        height: 2.5rem;

        background-color: var(--yellow);
        border: 1px solid var(--main);
        color: var(--main);

        padding-inline: 0.7rem;

        outline: none;

        transition: 0.9s width;
      }
      select::placeholder {
        color: var(--main);
      }
      select:focus {
        width: 18rem;
        background-color: var(--main);
        color: var(--yellow);
        border: 1px solid var(--yellow);
      }
      select:hover::placeholder {
        color: var(--yellow);
      }
      select:hover {
        background-color: var(--main);
        color: var(--yellow);
        border: 1px solid var(--yellow);
      }
      button {
        background-color: var(--yellow);
        border: 1px solid var(--main);
        color: var(--main);
        padding: 1rem;

        width: 17rem;

        transition: 0.9s width;
      }
      button:hover {
        background-color: var(--main);
        color: var(--yellow);
        border: 1px solid var(--yellow);

        width: 18rem;
      }
    </style>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="header"><p>Quiz php</p></div>
    </header>
    <div class="content">
      <img
        src="img/favicon.png"
        alt=""
        width="150px"
        style="margin-bottom: 2rem"
      />
      <div class="text">
        <p id="red">Primeira pergunta:</p>
        <p id="yellow">Php é uma linguagem de programação?</p>
      </div>
      <form action="" method="post" class="form">
        <p></p>
        <select name="resp4" id="resp4">
          <option value="falso">Falso</option>
          <option value="verdadeiro">Verdadeiro</option>
        </select>
        <button type="submit">Próxima</button>
      </form>
    </div>
  </body>
</html>