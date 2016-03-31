<?php
/* Set e-mail recipient */
$to  = "contact@virtuhall-game.com";
 $subject = "Formulaire de contact: ".check_input($_POST['subject'], "Votre sujet");


/* Check all form inputs using check_input function */
$name = check_input($_POST['pseudo'], "Entrez votre nom");
$email    = check_input($_POST['mail'], "Entrez votre mail");
$comment = check_input($_POST['message'], "Votre commentaire");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("Adresse email non valide!");
}


/* Let's prepare the message for the e-mail */
$content = "Formulaire de contact Virtuhall !\r\n

Un utilisateur a écrit:\r\n
Nom: $name\r\n

E-mail: $email \r\n


Commentaire:\r\n
$comment \r\n

Fin du message\r\n
";

/* Send the message using mail() function */
 mail($to, $subject, $content);

/* Redirect visitor to the thank you page */
header('Location: help.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
?>