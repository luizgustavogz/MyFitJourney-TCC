<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    if (isset($_POST["register"]))
    {
        if ($_POST["password"] != $_POST["repassword"])
        {
            die("Senhas não conferem.");
        }

        $name = $_POST["name"];
        $sobrenome = $_POST["sobrenome"];
        $nome_completo = $name . " " . $sobrenome;
        $email = $_POST["email"];
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

            // header("Location: emailVerification.php?email=" . $email);
            header("Location: login.php");
            exit();
        } catch (Exception $e) {
            echo "Erro ao enviar email. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>

<form method="POST">
    <input type="text" name="name" placeholder="Nome" required />
    <input type="text" name="sobrenome" placeholder="Sobrenome" required />
    <input type="email" name="email" placeholder="E-mail" required />
    <input type="password" name="password" placeholder="Senha" required />
    <input type="password" name="repassword" placeholder="Confirme sua senha" required />
 
    <input type="submit" name="register" value="Register">
</form>
