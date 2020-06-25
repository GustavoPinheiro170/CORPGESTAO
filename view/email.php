<<!DOCTYPE html>

    <html class="no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <link rel="stylesheet" href="">
    </head>

    <body>
        <?php
        require_once('../src/PHPMailer.php');
        require_once('../src/SMTP.php');
        require_once('../src/Exception.php');

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        $mail = new PHPMailer(true);
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];

        try{
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'braganathan38@gmail.com';
            $mail->Password = '@270100@';
            $mail->Port = 587;

            $mail->setFrom('braganathan38@gmail.com');
            $mail->addAddress('braganathan38@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = '*** NOVO CADASTRO DE LEAD ***';
            $mail->Body = "Novo cliente cadastrado via formulário: <br><br> Nome: <strong>". $nome . "<br>Email: " . $email . "<br><br><br> *** FINAL DE AVISO ***";



        function alerta($type, $title, $msg)
        {
            echo "<script type='text/javascript'>
                    Swal.fire({
                    type: '$type',
                    title: '$title',
                    text: '$msg',
                    showConfirmButton: false,
                    timer: 1500
                    });
                </script>";
        }

        if($mail->send()){
            echo 'jQuery(document).ready(function() {
                swal("ops...","prefksdvm","");
            });';
            alerta("success", "E-mail Enviado", "Entraremos em contato em breve!");
            // header("Location: index.php");
            
        }else{
            alerta("error", "Oi", "Houve um erro");
            echo "Email nao enviado";
            // header("Location: index.php");
        }

        }catch(Exception $e){
            echo "Erro ao encaminhar email: {$mail->ErrorInfo}";
           // header("Location: index.php");
            alerta("error", "Oi", "Houve um erro");
        }
     
        ?>
        <script src="" async defer></script>
    </body>

    </html>