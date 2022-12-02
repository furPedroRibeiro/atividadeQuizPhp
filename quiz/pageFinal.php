<?php 
    include('connect.php');


    function redirect($text){
        header('refresh: 0.1, url = pageFinal.php');
        echo '
            <script>
                alert("'.$text.'");
            </script>
        ';
    }
    if($_SESSION['acabou']=="0"){
        $sql = 'INSERT INTO usuario VALUES(NULL, "'.$_SESSION['nomeUser'].'", '.$_SESSION['acertos'].')';
        $res = $GLOBALS['conn']->query($sql);
        if($res){
            $text = "Resultado cadastrado com sucesso!!!";
            redirect($text);
        } else{
            echo($sql);
        }
        $_SESSION['acabou'] = "1";
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
      #yellowBack{
        font-size: 25px;
        font-weight: 600;
        font-family: 'Rubik', sans-serif;
        color: var(--main);

        padding: 0.3rem;

        background-color: var(--yellow);
      }
      .content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        margin-top: 1rem;

        gap: 0.5rem;

      }
      .text {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        width: 17rem;
      }
      table th, td{
        width: 8.5rem;
        height: 2.5rem;
        padding: 0.7rem;
      }
      table th{
        background-color: var(--yellow);
        color: var(--main);
        border: 1px solid var(--main);
      }
      table td{
        color: var(--main);
        border: 1px solid var(--main);
      }
      #a{
        color: var(--main);
      }
      button {
        background-color: var(--yellow);
        border: 1px solid var(--main);
        color: var(--main);
        height: 3.5rem;

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
      <div class="pessoal">
        <p id="yellowBack"><?php echo $_SESSION['nomeUser'];?>, você teve: <?php echo $_SESSION['acertos'];?> acertos.</p>
      </div>
      <p id="yellow">Nossos 7 melhores jogadores:</p>
      <table>
        <tr>
            <th>Nome</th>
            <th>Acertos</th>
        </tr>
            <?php
                $sql = 'SELECT * FROM usuario ORDER BY acertos DESC LIMIT 7';
                $res = $GLOBALS['conn']->query($sql);

                if($res -> num_rows > 0){
                    while($row = $res->fetch_assoc()){
                        echo '
                            <tr>
                                <td>'.$row['nome'].'</td>
                                <td>'.$row['acertos'].'</td>
                            </tr>
                        ';
                    }
                }
            ?>
      </table>
      <a href="exit.php" rel="noopener noreferrer"><button type="submit">Sair</button></a>
      <p style="margin-top: 2rem;" id="yellowBack"><a href="http://github.com/furPedroRibeiro" target="_blank" rel="noopener noreferrer" id="a">Github </a> - <a href="http://instagram.com/__pedro.dr" target="_blank" rel="noopener noreferrer" id="a">Instagram</a></p>
    </div>
  </body>
</html>