<html>
<head>
<?php 
include('conexao.php');

$sql = "insert into cidades (nome , uf) values ('Brumado' , 'Bahia')";

$rs = $con->Execute($sql);

if (!$rs) {
  echo $con->ErrorMsg();
}  else  {
  echo "Dados incluidos!";
}
?>
  
</head>
  <body>
    <p>Conteúdo Aqui.</p>
  </body>
  
</html>
