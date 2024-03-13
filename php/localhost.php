<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' media='screen' href='styledb.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulario</title>
</head>
<body>

<?php
$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";

// Conexão com o banco de dados
$con = mysqli_connect($localhost, $user_name, $senha, $db);
if (mysqli_connect_errno()) {
    echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
} else {
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
        $idade = mysqli_real_escape_string($con, $_POST['idade']);

        $sql = "INSERT INTO pessoa(nome, sobrenome, idade) VALUES ('$nome', '$sobrenome', '$idade')";
        if(mysqli_query($con, $sql)) {
            echo "Pessoa inserida com sucesso!!!";
        } else {
            echo "Erro ao inserir: " . mysqli_error($con);
        }
    }

    // Exibir pessoas
    $mostrar = "SELECT nome, sobrenome, idade FROM pessoa";
    $resultado = mysqli_query($con, $mostrar);

    echo "<h2>Pessoas</h2>";
    echo "<div class='container'>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Sobrenome</th>";
    echo "<th>Idade</th>";
    echo "<th>Ação</th>";
    echo "</tr>";

    while ($pessoa = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $pessoa['nome'] . "</td>";
        echo "<td>" . $pessoa['sobrenome'] . "</td>";
        echo "<td>" . $pessoa['idade'] . "</td>";
        echo "<td> <button <i class='fa-regular fa-pen-to-square'> </i></button>  ";
        echo " <button <i class='fa-solid fa-trash'></i> </button> </td>";

        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
    mysqli_close($con);
}
?>

</body>
</html>

