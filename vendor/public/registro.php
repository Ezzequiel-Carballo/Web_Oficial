<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
use PHPMailer\PHPMailer\SMTP;

require_once '../../vendor/autoload.php';
require_once '../../config/db.php';

// Conexion base de datos
$db = conectarDB();

// Cargar variables de entorno
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

/*
// Verificar que las variables de entorno se han cargado
echo 'Variables de entorno cargadas:';
var_dump($_ENV['SMTP_HOST'], $_ENV['SMTP_USER'], $_ENV['SMTP_PASS']);
var_dump(getenv('SMTP_HOST'), getenv('SMTP_USER'), getenv('SMTP_PASS'));

echo 'Verificando variables de entorno en $_SERVER:';
var_dump($_SERVER['SMTP_HOST'], $_SERVER['SMTP_USER'], $_SERVER['SMTP_PASS']);
*/
/*
class Mailer {
    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->setup();
    }

    private function setup() {
        $this->mail->isSMTP();
        $this->mail->Host =  $_ENV['SMTP_HOST'];
        $this->mail->SMTPAuth = true;
        $this->mail->Username = $_ENV['SMTP_USER'];
        $this->mail->Password = $_ENV['SMTP_PASS'];
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = 587;
        $this->mail->setFrom($_ENV['SMTP_USER'], 'Contacto Personal');
        $this->mail->SMTPDebug = 2; // Para habilitar la depuración de SMTP

          // Habilitar depuración
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER; // DEBUG_SERVER o DEBUG_CLIEN
    }

    public function send($to, $subject, $body) {
        try {
            $this->mail->addAddress($to);
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$this->mail->ErrorInfo}";
            return false;
        }
    }
}
*/

// Recoger los valores del formulario
if(isset($_POST)) {
    ob_start();
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $username = isset($_POST['username']) ? $_POST['username'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $message = isset($_POST['message']) ? $_POST['message'] : false;

    // Array de errores
    $errores = array();

    // Validacion de variables
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $name_valido = true;
    } else {
        $name_valido = false;
        $errores['name'] = "El nombre no es valido";
    }

    if (!empty($username) && !is_numeric($username) && !preg_match("/[0-9]/", $username)){
        $username_valido = true;
    } else {
        $username_valido = false;
        $errores['surname'] = "El apellido no es valido";
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_valido = true;
    } else {
        $email_valido = false;
        $errores['email'] = "El email es invalido";
    }

    if (!empty($message)){
        $message_valido = true;
    } else {
        $message_valido = false;
        $errores['message'] = "No hiciste ningun comentario";
    }
    
    var_dump($errores);

    $guardar_usuario = false;

    if(count($errores) == 0){
        $guardar_usuario = true;

        // INSERTAR USUARIO EN LA TABLA USERS DE LA BBDD
        $sql = "INSERT INTO users VALUES(null, '$name','$username','$email', '$message', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['register'] = "complete";

            // Enviar el correo
            $mailer = new Mailer();
            $subject = 'Nuevo mensaje de ' . $name;
            $body = "<p><strong>Nombre:</strong> $name</p>
                    <p><strong>Apellido:</strong> $username</p>
                    <p><strong>Correo Electrónico:</strong> $email</p>
                    <p><strong>Mensaje:</strong> $message</p>";
        

            if ($mailer->send('ezequielcarballo018@gmail.com', $subject, $body)) {
                echo 'El mensaje se ha enviado correctamente.';
            } else {
                echo 'Error al enviar el mensaje.';
            }
            
        } else {
            $_SESSION['errores'] = "failed";
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
    ob_end_clean();
    header('Location: index.php#Contact');
    exit();
}
