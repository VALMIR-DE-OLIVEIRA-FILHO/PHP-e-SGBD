<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de busca com php e banco de dados</title>

</head>
<body>
<h1>Pesquisar carros:</h1>
<form  method="POST" action="pesquisar.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="Modelo...">
    <select name="concessionaria">
    <option value="" selected="selected">todas concessionárias </option>  
  <option value="bmw">bmw</option>
  <option value="porsche">porsche</option>
  
</select>
    <input type="submit" value="ENVIAR">
</form>
</body>
</html>