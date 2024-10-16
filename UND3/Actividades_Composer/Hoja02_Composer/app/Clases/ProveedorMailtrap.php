<?php

namespace App\Clases;

use app\Interfaces\InterfazProveedorCorreo;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ProveedorMailtrap implements InterfazProveedorCorreo
{

    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        // Configuración de Mailtrap
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.mailtrap.io'; // Host de Mailtrap
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'tu_usuario_mailtrap'; // Cambia esto
        $this->mail->Password = 'tu_contraseña_mailtrap'; // Cambia esto
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port = 587;
    }

    public function enviarCorreo(string $paraQuien, string $asunto, string $cuerpoMensaje): bool {
        try {
            $this->mail->setFrom('tu_correo@ejemplo.com', 'Nombre');
            $this->mail->addAddress($paraQuien);
            $this->mail->Subject = $asunto;
            $this->mail->Body    = $cuerpoMensaje;

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

?>