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

    if (empty($name) || empty($email) ||  empty($senha)) {
        die("Por favor, preencha todos os campos.");
    }

    // Verificar se o usuário já existe
    $check_user_query = "SELECT * FROM cadGG WHERE email = :email";
    $stmt = $pdo->prepare($check_user_query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        die("Email já cadastrado");
    }

    // Hash da senha
    $hashed_password = password_hash($senha, PASSWORD_BCRYPT);

    // Inserir usuário no banco de dados usando uma consulta preparada
    $insert_query = "INSERT INTO cadGG (name, email, senhaHash) VALUES (:name, :email, :password_hash)";
    $stmt = $pdo->prepare($insert_query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password_hash", $hashed_password);

    if ($stmt->execute()) {
        echo '<script>Swal.fire("Sucesso", "Cadastro realizado com sucesso!", "success");</script>';
    } else {
        echo '<script>Swal.fire("Erro", "Ocorreu um erro ao cadastrar. Tente novamente.", "error");</script>';
    }
}
function loginGG()
{
    session_start();
    try {
        $pdo = conexaoBd();

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $senha_inserida = $_POST['senha'];

            // Consulta para obter o hash da senha e o username armazenados no banco de dados
            $stmt = $pdo->prepare("SELECT name, senhaHash FROM cadGG WHERE email = :email");
            $stmt->bindParam(':email', $name, PDO::PARAM_STR);
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
                    echo "<span style='color: white;'>Senha incorreta!</span></div>";
                }
            } else {
                echo ' <div class="error-message">';
                echo "<span style='color: white;'>Usuário não encontrado!</span></div>";
            }
        }
    } catch (PDOException $e) {
        // Tratar qualquer erro de conexão com o banco de dados
        echo "Erro de banco de dados: " . $e->getMessage();
    }

    $pdo = null;
}
?>
