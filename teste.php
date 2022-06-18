<?php
include("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Conexão</title>
</head>
<body>
    <h1>Dilema das Cidades</h1>

    <form action="">

<input name="busca" type="text" placeholder="Digite um CEP" >
<button type="submit">Pesquisar</button>





<br>

<table border="2"><br>
<tr>
<td width="200px">Cidade</td>

<td width="200px">Bairro</td>
<td width="200px">Logradouro</td>
<td width="200px">Complemento</td>

<?php
if(!isset($_GET['busca'])){

?>
<tr>
    <td colspan="4">Digite um CEP válido</td>
</tr>

<?php
} else{

    $pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT cidade, bairro, logradouro, complemento FROM brasil_end WHERE brasil_end.cep LIKE '$pesquisa'";

$sql_query = $mysqli->query($sql_code) or die("Erro!".$mysqli->error);
}

if($sql_query->num_rows == 0){

    echo "Nenhum Resultado";
} else {
    while($dados = $sql_query->fetch_assoc()){
        ?>
</tr>

<tr><td><?php echo $dados['cidade'];?></td>
<td><?php echo $dados['bairro'];?></td>
<td><?php echo $dados['logradouro'];?></td>
<td><?php echo $dados['complemento'];?></td>
</tr>
   <?php } ?>
   <?php } ?>






</table>

    </form>
</body>
</html>