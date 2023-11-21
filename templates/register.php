<?php
session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require '../vendor/autoload.php';    

    if (isset($_POST["register"]))
    {
        if ($_POST["password"] != $_POST["repassword"])
        {
            die("Senhas não conferem.");
        }

        $name = $_POST["name"];
        $sobrenome = $_POST["sobrenome"];
        $nome_completo = $name . " " . $sobrenome;
        $email = $_SESSION["email"] = $_POST["email"];
        $password = $_POST["password"];

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

            // conexão com o banco
            $conn = mysqli_connect("localhost", "root", "", "myfitjourney");

            // insert na tabela de usuários
            $sql = "INSERT INTO tblusuario(vchNome, vchEmail, vchSenha, vchCodigo, dtmVerificadoEm) 
                VALUES ('" . $nome_completo . "', '" . $email . "', '" . $encrypted_password . "', '" . $verification_code . "', NULL)";
            mysqli_query($conn, $sql);

            // header("Location: emailVerificationService.php?email=" . $email);
            header("Location: login.php");
            exit();
        } catch (Exception $e) {
            echo "Erro ao enviar email. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Cadastro</title>

    <link rel="stylesheet" href="../assets/css/register.css">
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
        </form>
    </div>
</body>
