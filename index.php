<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    $sql = "INSERT INTO usuarios (name, email, telephone) VALUES ('$name', '$email', '$telephone')";
    if (mysql_query($sql)) {
        echo "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . mysql_error() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>Cadastrar Usuário</h2>
    <form method="post">
        Nome: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Telefone: <input type="text" name="telephone" required><br>
        <button type="submit">Cadastrar</button>
    </form>

    <h2>Lista de Usuários</h2>
    <?php
    $result = mysql_query("SELECT * FROM usuarios");

    if (mysql_num_rows($result) > 0) {
        echo "<ul>";
        while ($row = mysql_fetch_assoc($result)) {
            echo "<li>{$row['name']} - {$row['email']} - {$row['telephone']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum usuário cadastrado.</p>";
    }

    mysql_close();
    ?>
</body>
</html>
