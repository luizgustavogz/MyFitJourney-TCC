<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>MyFitJourney | Login</title>
        
        <link rel="stylesheet" href="../assets/css/login.css">
        <link rel="stylesheet" href="../assets/css/toast.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> -->
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
        echo '<script>
            showToast("E-mail não registrado ou incorreto. Tente novamente.");
            </script>';
    } else {
        $user = mysqli_fetch_object($result);

        if (!password_verify($password, $user->vchSenha)) {
            echo '<script>                    
                    showToast("Senha incorreta. Tente novamente.");
                </script>';
        } elseif ($user->dtmVerificadoEm == null) {
            echo '<script>
                    showToast("Validação de e-mail pendente. Clique para continuar.");                
                    document.getElementById("toast").addEventListener("click", function() {
                    redirectVerificationEmail("' . $email . '");
                });
            </script>';
        } else {
            header("Location: ./home.php");
            exit();
        }
    }
}
?>
