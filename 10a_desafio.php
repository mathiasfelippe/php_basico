<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos com Validação</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome do produto:</label>
        <input type="text" name="nome" required> <br>

        <label for="preco">Preço:</label>
        <input type="number" min="0.01" step="0.01" name="preco" required> <br>

        <button type="submit">Adicionar</button>
    </form>

    <?php
        //Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores enviados pelo formulário 
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            // Conexão com o banco de dados
            $servername = "127.0.0.1";
            $username = "root";
            $password = "Senai@118";
            $dbname = "exercício";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica a conexão
            if($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            //Insere o registro no banco de dados
            $sql = "INSERT INTO  produtos  (nome, preco) VALUES ('$nome','$preco')";

            if ($conn->query($sql) === TRUE){
                echo "<p style= 'color:Darkgreen;'> Produto adicionado com sucesso</p>";
            } else {
                echo "<p style= 'color:Red;'> Erro ao cadastrar.</p>";
            }

            //Fechar a conexão
            $conn->close();
        }
        
    ?>
</body>
</html>
