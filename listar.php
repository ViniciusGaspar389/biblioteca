<?php

require "config.php";

$stmt = $con->query("SELECT * FROM livros");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Livros</title>

    <style>
    table {
        border-collapse: collapse;
        width: 80%;
    }

    th, td {
        border: 1px solid black;
        padding: 10px;
    }

    th {
        background-color: #ddd;
    }
</style>
</head>

<body>

    <h1>Livros da Biblioteca</h1>
    <table border="1">

    <tr>
        <th>Autor</th>
        <th>Descrição</th>
        <th>Ano de Publicação</th>
    </tr>
    <?php while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

    <tr>
        <td><?php echo $livro["autorLivro"]; ?></td>
        <td><?php echo $livro["descricaoLivro"]; ?></td>
        <td><?php echo $livro["anoPublicacao"]; ?></td>
        <td><?php echo $livro["anoPublicacao"] ?? "Não informado"; ?></td>
    </tr>

<?php } ?>

</table>

</body>

</html>