<?php
$servername = "127.0.0.1"; // ou o endereço do seu servidor MySQL
$username = "root"; // substitua pelo seu nome de usuário do MySQL
$password = ""; // substitua pela sua senha do MySQL
$dbname = "hopeassistance"; // substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Processamento do formulário de doação
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $tipo_medicamento = $_POST['tipo_medicamento'];
    $medicamento = $_POST['medicamento'];
    $concentracao = $_POST['concentracao'];
    $quantidade = $_POST['quantidade'];
    $mensagem = $_POST['mensagem'];

    // Prepara a consulta SQL para inserção de dados
    $sql = "INSERT INTO dados_doacao (nome, email, telefone, endereco, tipo_medicamento, medicamento, concentracao, quantidade, mensagem) 
            VALUES ('$nome', '$email', '$telefone', '$endereco', '$tipo_medicamento', '$medicamento', '$concentracao', '$quantidade', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Obrigado pela sua doação, aguarde nosso contato!";
    } else {
        echo "Erro ao registrar a doação: " . $conn->error;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
