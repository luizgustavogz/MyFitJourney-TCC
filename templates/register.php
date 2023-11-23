<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyFitJourney | Cadastro</title>

        <link rel="stylesheet" href="../assets/css/register.css">
        <link rel="stylesheet" href="../assets/css/toast.css">
    </head>

    <body>
        <div class="container-cadastro">    
            <div class="img-box">            
                <img id="inverter" src="../assets/img/cadastro.svg">
            </div>
            <div class="content-box">
                <div class="form-box">
                    <h2>Criar uma conta</h2>
                    <form method="POST">
                        <div class="input-box">
                            <span>Nome</span>
                            <input type="text" name="name" placeholder="" required />
                        </div>
                        <div class="input-box">
                            <span>Sobrenome</span>
                            <input type="text" name="sobrenome" placeholder="" required />
                        </div>
                        <div class="input-box">
                            <span>E-mail</span>
                            <input type="email" name="email" placeholder="@gmail.com" required />
                        </div>
                        <div class="input-box">
                            <span>Senha</span>
                            <input type="password" name="password" placeholder="****" required />
                        </div>
                        <div class="input-box">
                            <span>Confirmar senha</span>
                            <input type="password" name="repassword" placeholder="****" required />
                        </div>
                        <div class="input-box">
                            <input type="submit" name="register" value="Cadastrar">
                        </div>
                        <div class="input-box">
                            <p>Já possui uma conta? <a href="login.php">Entrar</a></p>
                        </div>
                    </form>
                    <div id="toast"></div>
                </div>
            </div>
    </body>
</html>
<script src="../assets/js/toast.js"></script>

<?php
session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require '../vendor/autoload.php';    

    if (isset($_POST["register"])) {
        $name = $_POST["name"];
        $sobrenome = $_POST["sobrenome"];
        $nome_completo = $name . " " . $sobrenome;
        $email = $_SESSION["email"] = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            $mail->CharSet = 'UTF-8';

            //Enable verbose debug output
            $mail->SMTPDebug = 0;

            //Send using SMTP
            $mail->isSMTP();

            //Set the SMTP server to send through
            $mail->Host = 'smtp.gmail.com';

            //Enable SMTP authentication
            $mail->SMTPAuth = true;

            //SMTP username
            $mail->Username = 'myfitjourneyldh@gmail.com';
            // $mail->Username = 'your_email@gmail.com';

            //SMTP password'
            $mail->Password = 'ktlrrxqjemqsfasl';
            // $mail->Password = 'your_password';

            //Enable TLS encryption;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('myfitjourneyldh@gmail.com', 'MyFitJourney.com');

            //Add a recipient
            $mail->addAddress($email, $name);

            //Set email format to HTML
            $mail->isHTML(true);

            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

            $mail->Subject = 'Código de verificação de e-mail';
            $mail->Body    = 'Olá ' . $name . ',<br><br>Seu código de verificação é: ' . $verification_code . '<br><br>Atenciosamente,<br>MyFitJourney';

            $mail->send();
            //echo 'E-mail enviado com sucesso!';

            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);


            // VALIDAÇÕES //
            
            // Validar nome
            $minNameLength = 2; // Defina o número mínimo de caracteres para o nome
            if (strlen($name) < $minNameLength) {                
                echo '<script>
                    showToast("Erro: O nome deve ter pelo menos ' . $minNameLength . ' caracteres.");
                    document.getElementById("toast").classList.add("error");
                </script>';
                exit();
            }

            // Validar nome para não conter números
            if (!preg_match("/^[A-Za-z ]+$/", $name)) {                
                echo '<script>
                        showToast("Erro: O nome não pode conter números.");
                        document.getElementById("toast").classList.add("error");
                </script>';
                exit();
            }

            // Validar sobrenome
            $minSobrenomeLength = 2; // Defina o número mínimo de caracteres para o sobrenome
            if (strlen($sobrenome) < $minSobrenomeLength) {                
                echo '<script>
                    showToast("Erro: O sobrenome deve ter pelo menos ' . $minSobrenomeLength . ' caracteres.");
                    document.getElementById("toast").classList.add("error");
                </script>';
                exit();
            }

            // Validar sobrenome para não conter números
            if (!preg_match("/^[A-Za-z ]+$/", $sobrenome)) {                
                echo '<script>
                        showToast("Erro: O sobrenome não pode conter números.");
                        document.getElementById("toast").classList.add("error");
                </script>';
                exit();
            }

            // Validar e-mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {                
                echo '<script>
                    showToast("Erro: E-mail inválido.");
                    document.getElementById("toast").classList.add("error");
                </script>';
                exit();
            }
            
            // Validar senha
            $minPasswordLength = 4; // Defina o número mínimo de caracteres para a senha
            if (strlen($password) < $minPasswordLength) {                
                echo '<script>
                    showToast("Erro: A senha deve ter pelo menos ' . $minPasswordLength . ' caracteres.");
                    document.getElementById("toast").classList.add("error");
                </script>';
                exit();
            }
            
            // Verificar se as senhas coincidem
            if ($password != $repassword) {                
                echo '<script>
                    showToast("Erro: As senhas não coincidem.");
                    document.getElementById("toast").classList.add("error");
                </script>';
                exit();
            }
            
            // conexão com o banco
            $conn = mysqli_connect("localhost", "root", "", "myfitjourney");

            // Verifica se o e-mail já está cadastrado
            $checkEmailQuery = "SELECT * FROM tblusuario WHERE vchEmail = '$email'";
            $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

            if (mysqli_num_rows($checkEmailResult) > 0) {                
                echo '<script>
                    showToast("Aviso: E-mail já cadastrado. Faça login ou utilize outro e-mail.");
                    document.getElementById("toast").classList.add("warning");
                </script>';
                exit();
            } else {
                // insert na tabela de usuários
                $sql = "INSERT INTO tblusuario(vchNome, vchEmail, vchSenha, vchCodigo, dtmVerificadoEm) 
                VALUES ('" . $nome_completo . "', '" . $email . "', '" . $encrypted_password . "', '" . $verification_code . "', NULL)";
                mysqli_query($conn, $sql);

                // header("Location: emailVerificationService.php?email=" . $email);           
                echo '<script>                
                    showToast("Cadastro realizado! Redirecionando...");
                    document.getElementById("toast").classList.add("success");
                    // Aguarda 1,75 segundos (1750 milissegundos) antes de redirecionar
                    setTimeout(function() {
                        window.location.href = "./login.php";
                    }, 1750);                
                </script>';
                exit();
            }
        } catch (Exception $e) {            
            echo '<script>                
                    showToast("Erro ao enviar email. Mailer Error: ' . $e->getMessage() . '");
                    document.getElementById("toast").classList.add("error");
                </script>';
        }
    }
?>
