<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

class Email
{

    public $mail;

    public function __construct($config)
    {
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->Host = $config['host'];
        $this->mail->Username = $config['user'];
        $this->mail->Password = $config['password'];
        $this->mail->Port = $config['port'];
    }

    public function sendEmail($options)
    {
        try {
            $this->mail->setFrom('utrancerailway@gmail.com', 'Admin');
            $this->mail->addAddress($options['email']);
            $this->mail->Subject = $options['subject'];
            $this->mail->Body = $options['message'];

            $this->mail->send();
            echo 'message has been sent!';
        } catch (Execption $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

}
