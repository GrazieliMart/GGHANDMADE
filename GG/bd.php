<?php
function conexaoBd()
{
    try {
        $db = 'mysql:host=143.106.241.3;dbname=cl201287;charset=utf8';
        $user = 'cl201287';
        $passwd = 'cl*17082005';
        $pdo = new PDO($db, $user, $passwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $output = 'Impossível conectar BD : ' . $e->getMessage() . '<br>';
        echo $output;
    }
    return $pdo;
}

function cadUsuario($name, $email, $senha)
{
    $pdo = conexaoBd();

    if (empty($name) || empty($email) || empty($senha)) {
        $_SESSION['error_message'] = '<i class="bi bi-exclamation-triangle"></i><span class="title-error">Preencha todos os campos.</span>';
    } else {
        // Verificar se o usuário já existe
        $check_user_query = "SELECT * FROM cadGG WHERE email = :email";
        $stmt = $pdo->prepare($check_user_query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['error_message'] = '<i class="bi bi-exclamation-triangle"></i><span class="title-error">E-mail já cadastrado.<br></span><span style="color: #3f3c3a79;" class="subtitle-error">Caso não lembre sua senha acesse: <a href="EsqueciSenha.php">Esqueci minha Senha</a></span>';
        } else {
            // Hash da senha
            $hashed_password = password_hash($senha, PASSWORD_BCRYPT);

            // Inserir usuário no banco de dados usando uma consulta preparada
            $insert_query = "INSERT INTO cadGG (name, email, senhaHash) VALUES (:name, :email, :password_hash)";
            $stmt = $pdo->prepare($insert_query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password_hash", $hashed_password);

            if ($stmt->execute()) {
                $_SESSION['success_message'] = '<i class="bi bi-check-lg"></i><span class="title-sucess">Cadastro realizado com sucesso!<br></span><span class="subtitle-sucess">Retorne à página de login e acesse sua conta.</span>';
            } else {
                $_SESSION['error_message'] = '<i class="bi bi-exclamation-triangle"></i><span class="title-error">Tente Novamente.</span>';
            }
        }
    }
}
function loginGG()
{
    session_start();
    try {
        $pdo = conexaoBd();

        if (isset($_POST['submit'])) {
            $email = trim($_POST['email']); // Remover espaços em branco
            $senha_inserida = $_POST['senha'];

            // Consulta para obter o hash da senha e o email armazenados no banco de dados
            $stmt = $pdo->prepare("SELECT email, senhaHash FROM cadGG WHERE email = :email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
             
               

                // Verificar se a senha inserida corresponde ao hash armazenado
                if (password_verify($senha_inserida, $result['senhaHash'])) {
                    // Credenciais válidas
             
                    $_SESSION['email'] = $result["email"];

                    header("Location: index.php");
                    exit();
                } else {
                    // Credenciais inválidas (senha incorreta)
                    echo ' <div class="error-message">';
                    echo "
                    <i class='bi bi-exclamation-triangle'></i>
                    <span class='title-error'>Tente Novamente</span><br>
                    <span style='color: #3f3c3a79;'  class='subtitle-error'>E-mail ou senha incorreta</span></div>";
                }
            } else {
                echo ' <div class="error-message">';
                echo "
                <i class='bi bi-exclamation-triangle'></i>
                <span class='title-error'>Houve um problema</span><br>
                <span style='color: #3f3c3a79;'  class='subtitle-error'>Não encontramos uma conta associada a este endereço de e-mail!</span></div>";
            }
        }
    } catch (PDOException $e) {
        // Tratar qualquer erro de conexão com o banco de dados
        echo "Erro de banco de dados: " . $e->getMessage();
    }

    $pdo = null;
}
?>
