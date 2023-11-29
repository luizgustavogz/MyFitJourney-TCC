<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>MyFitJourney | Login</title>
        
        <link rel="stylesheet" href="../assets/css/login.css">
        <link rel="stylesheet" href="../assets/css/toast.css">        
    </head>
    
    <body>
        <div class="container-login">
            <div class="img-box">
                <img id="inverter" src="../assets/img/login.svg">
            </div>
            <div class="content-box">
                <div class="form-box">                
                    <h2>Login</h2>
                    <form method="POST">
                        <div class="input-box">
                            <span>E-mail</span>
                            <input type="email" name="email" placeholder="@gmail.com" required />
                        </div>
                        
                        <div class="input-box">
                            <span>Senha</span>
                            <input type="password" name="password" placeholder="****" required />
                        </div>                    
                        
                        <div class="input-box">
                            <input type="submit" name="login" value="Entrar">
                        </div>
                        
                        <div class="input-box">
                            <p>Não tem uma conta? <a href="register.php">Cadastre-se</a></p>
                        </div>
                    </form>
                    <div id="toast"></div>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="../assets/js/toast.js"></script>
<script src="../assets/js/acessibility.js"></script>

<?php
session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $_SESSION["email"] = $email;

    // Conexão com o banco
    $conn = mysqli_connect("localhost", "root", "", "myfitjourney");

    // Validação dos dados e e-mail verificado
    $sql = "SELECT * FROM tblusuario WHERE vchEmail = '" . $email . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        $tipoMensagem = "Error";
        echo '<script>
            showToast("Erro: E-mail não registrado ou incorreto");
            document.getElementById("toast").classList.add("' . strtolower($tipoMensagem) . '");
            </script>';
    } else {
        $user = mysqli_fetch_object($result);

        if (!password_verify($password, $user->vchSenha)) {
            $tipoMensagem = "Error";
            echo '<script>
                showToast("Erro: Senha incorreta");
                document.getElementById("toast").classList.add("' . strtolower($tipoMensagem) . '");
                </script>';
        } elseif ($user->dtmVerificadoEm == null) {
            $tipoMensagem = "Warning";
            echo '<script>
                showToast("Aviso: Validação de e-mail pendente. Clique aqui para validar");                
                document.getElementById("toast").classList.add("' . strtolower($tipoMensagem) . '");
                document.getElementById("toast").addEventListener("click", function() {
                redirectVerificationEmail("' . $email . '");
                });
            </script>';
        } else {
            $tipoMensagem = "Success";
            echo '<script>
                    showToast("Login efetuado com sucesso! Redirecionando...");
                    document.getElementById("toast").classList.add("' . strtolower($tipoMensagem) . '");
                    // Aguarda 1,75 segundos (1750 milissegundos) antes de redirecionar
                    setTimeout(function() {
                        window.location.href = "./home.php";
                    }, 1750);
                </script>';
            // header("Location: ./home.php");
            exit();
        }
    }
}
?>
