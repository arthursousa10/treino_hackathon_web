<?php
// Conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "hopeassistance";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Prepara os dados para inserção
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$tipo_medicamento = $_POST['tipo_medicamento'];
$medicamento = $_POST['medicamento'];
$concentracao = $_POST['concentracao'];
$quantidade = $_POST['quantidade'];
$mensagem = $_POST['mensagem'];

// Query SQL para inserção dos dados
$sql = "INSERT INTO dados_doacao (nome, email, telefone, endereco, tipo_medicamento, medicamento, concentracao, quantidade, mensagem)
        VALUES ('$nome', '$email', '$telefone', '$endereco', '$tipo_medicamento', '$medicamento', '$concentracao', '$quantidade', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

$conn->close();
?>
