<?php
// Verifica se o ID do usuário foi enviado
if (isset($_GET['id'])) {
    // Configurações do banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "seu_banco_de_dados";

    // Cria a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $id = $_GET['id'];

    // Prepara e executa a consulta SQL para apagar o registro do usuário
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro apagado com sucesso.";
    } else {
        echo "Erro ao apagar o registro: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    header("Location: agendados.php");
}
?>