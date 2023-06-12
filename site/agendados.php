<!DOCTYPE html>
<html>
<head>

    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
</head>
<body id="cadbk">
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
         
      <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="d-flex">
        <input class="form-control me-2" type="text" name="search" placeholder="Digite um nome, CPF ou email">
        <input class="btn btn-outline-success" type="submit" value="Pesquisar">
    </form>
      
    </div>
  </div>
</nav>

<div class="container">
<div class="card-body" id="conteudo">
    
<?php
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

    // Verifica se foi enviada uma pesquisa
    if (isset($_GET['search'])) {
        $search = $_GET['search'];

        // Prepara e executa a consulta SQL com base na pesquisa
        $sql = "SELECT * FROM usuarios WHERE nome LIKE '%$search%' OR cpf LIKE '%$search%' OR email LIKE '%$search%'";
        $result = $conn->query($sql);
    } else {
        // Prepara e executa a consulta SQL para obter todos os usuários cadastrados
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
    }

    if ($result->num_rows > 0) {
        echo "<h2>Lista de Usuários</h2>";
        echo "<table>";
        echo "<tr><th>ID-    </th><th>------Nome-----     </th><th>------CPF---------    </th><th>------Email-------- </th><th>------Nascimento------          </th><th>-----Telefone-----------------                  </th><th>-------Horário-------------       </th><th>------Serviço------              </th><th>Ação    </th></tr>";

        while ($row = $result->fetch_assoc()) {
          
            
            
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["cpf"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["data_nascimento"] . "</td>";
            echo "<td>" . $row["telefone"] . "</td>";
            echo "<td>" . $row["horario"] . "</td>";
            echo "<td>" . $row["servico"] . "</td>";
            echo "<td><a href=\"apagar.php?id=" . $row["id"] . "\">Apagar</a></td>";
            echo "</tr>";
            
                    }

        echo "</table>";
    } else {
        echo "Nenhum usuário cadastrado.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

   
</body>
</html>
