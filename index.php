<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    $sql = "INSERT INTO usuarios (name, email, telephone) VALUES ('$name', '$email', '$telephone')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . $conn->error . "</p>";
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
    $result = $conn->query("SELECT * FROM usuarios");

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['name']} - {$row['email']} - {$row['telephone']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum usuário cadastrado.</p>";
    }

    $conn->close();
    ?>
</body>
</html>
