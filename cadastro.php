<?php  
$nome = $_POST['nome'];
$email = $_POST['email']);
$endereço= $_POST['endereço'];
$CNPJ = $_POST['cnpj'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$CEP = $_POST ['cep'];
$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
$sql = "SELECT usuario, senha FROM usuarios WHERE usuario = '$usuario' && senha = '$senha'";
$query = mysqli_query($conecta, $sql);
$qtde = mysqli_num_rows($query);
$dadosLogin = mysqli_fetch_array($query);
    if($dadosLogin == NULL)
    echo 'Usuario não existente';
    else
    echo 'Bem vindo ao melhor site do MUNDO!';
      $result_usuario = "SELECT usuario, senha FROM usuarios WHERE usuario = '$usuario' && senha = '$senha'";
      $resultado_usuario = mysqli_query($conecta, $result_usuario);
      $resultado = mysqli_fetch_assoc($resultado_usuario);
mysqli_close($conecta);
?>