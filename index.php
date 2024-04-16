<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Função formulário</title>
</head>
<body>

<?php

function criaFormulario($metodo, ...$campos){
  echo "<form action='' method='$metodo'>";
  foreach($campos as $campo){
    $campo = strtolower($campo);
   echo "<label>$campo</label> <input type='text' name='$campo'><br>";
  }
  echo "<input type='submit' value='Enviar'>";
  echo "</form>";
}

criaFormulario("GET", "Oi", "tudo", "bem", "professor?");


?>
  
</body>
</html>