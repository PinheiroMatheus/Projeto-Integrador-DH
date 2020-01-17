
    <?php
    session_start();
    include('conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST['Nome']);
    $sobrenome = mysqli_real_escape_string($conexao, $_POST['Sobrenome']);
    $email = mysqli_real_escape_string($conexao, $_POST['Email']);
    $cpf_cnpj = mysqli_real_escape_string($conexao, $_POST['CPF_CNPJ']);
    $senha = mysqli_real_escape_string($conexao, $_POST['Senha']);

    $sql = "INSERT INTO usuarios(nome, sobrenome, email, cpf_cnpj, senha) VALUES ('$nome', '$sobrenome', '$email', '$cpf_cnpj', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    }

    $conexao->close();

    header('Location: cadastro.php');
    exit;

    ?>
