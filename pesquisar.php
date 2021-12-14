
    <?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "carrosbd";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

      
    $pesquisar = $_POST['pesquisar'];
    $categoria = $_POST['concessionaria'];
    
    if (strlen($categoria)>0 ) {
        $resultado_sql= "SELECT * FROM carrotb WHERE concessionaria LIKE '%$categoria%'  ";
    }else {
        $resultado_sql= "SELECT * FROM carrotb WHERE modelo LIKE '%$pesquisar%'  ";
    }

    $result_sql = mysqli_query($conn, $resultado_sql);
 
   
    
 // empty isset
   
   
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>

        <?php
while($rows_sql = mysqli_fetch_array($result_sql)){
  
    echo'<div id="dois">';
    echo'<div class="alinhamento">';
    echo '<strong>Modelo:</strong> <p class="cola">'.$rows_sql['modelo'].'</p><br>';
    echo'</div> ';
    echo'<div class="alinhamento">';
    echo '<strong id="strong-foto">Foto:</strong> <img class="img" src="./img/'.$rows_sql['foto'].'"/>';
    echo'</div> ';
    echo'<div class="alinhamento">';
    echo ' <strong>Preço:</strong> <p class="cola">R$'.$rows_sql['preço'].'<br>';
    echo'</div> ';
    echo'<div class="alinhamento">';
    echo'<a id="botao" href="form.php">sair</a><br /><br />';
    echo'</div> ';

    echo'</div> ';
}

        ?>
      <p></p>
    </body>
    </html>