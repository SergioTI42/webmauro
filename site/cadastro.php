<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CLintex</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cadastro.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agendados.php">agendados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Sair</a>
        </li>
</ul>
         
      
      
    </div>
  </div>
</nav>
<br>
<div class="container">
<div class="card-body" id="conteudo">

<?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Obtém os valores enviados pelo formulário
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $dataNascimento = isset($_POST["data_nascimento"]) ? $_POST["data_nascimento"] : "";
        $telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "";

        // Verifica se as chaves "horario" e "servico" existem no array $_POST
        if (isset($_POST["horario"]) && isset($_POST["servico"])) {
            $horario = $_POST["horario"];
            $servico = $_POST["servico"];

            // Prepara e executa a consulta SQL
            $sql = "INSERT INTO usuarios (nome, cpf, email, data_nascimento, telefone, horario, servico) VALUES ('$nome', '$cpf', '$email', '$dataNascimento', '$telefone', '$horario', '$servico')";
            if ($conn->query($sql) === TRUE) {
                echo "Usuário registrado com sucesso!";
            } else {
                echo "Erro ao registrar o usuário: " . $conn->error;
            }
        } else {
            echo "Erro ao registrar o usuário: Horário e/ou serviço não foram enviados.";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
    ?>
     
    
    <div class="container">
       
    <div id="tituloreg">


    <h2>Formulário de Registro de Consulta</h2>
</div>
<br>
<div class="container" id="cad">
    <br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" required><br><br>
        <label for="cpf">CPF:</label>
        <input class="form-control" type="text" name="cpf" required><br><br>
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" required><br><br>
        <label for="data_nascimento">Data de Nascimento:</label>
        <input class="form-control" type="date" name="data_nascimento" required><br><br>
        <label for="telefone">Telefone:</label>
        <input class="form-control" type="text" name="telefone" required><br><br>
        <label for="horario">Horário:</label>
        <input class="form-control" type="time" name="horario" required><br><br>
        <label for="servico">Serviço:</label>
        <select class="form-select" aria-label="Default select example" name="servico" required>
            <option value="Consulta">Consulta</option>
            <option value="Limpeza">Limpeza</option>
            <option value="Prótese">Prótese</option>
        </select><br><br>
        <input type="submit" value="Registrar">
    </form>
<br>
    </div>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>


</div>

</div>
<br>
    </body>
</html>
