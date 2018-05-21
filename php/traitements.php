<?php 

$error = "";

if(isset($_POST['submit_form']) && ($_SERVER["REQUEST_METHOD"] == "POST"))
{
    if(empty($_POST['last_name']) && empty($_POST['first_name']) && empty($_POST['email']) && empty($_POST['message']))
    {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(empty($last_name))
        {
            $error .= "Nom/";       
        }
        if(empty($first_name))
        {
            $error .= "Prénom/";     
        }
        if(empty($email))
        {
            $error .= "Email/"; 
        }
        if(empty($message))
        {
            $error .= "Message/";
        }
        
        $error = 'Envoi échoué, un ou plusieurs champs sont erroné : ' . $error . ' Merci de bien vouloir remplir les champs mentionné(s).';
        return false;
    }
    else
    {
        $error = "<p>Votre demande a été pris en compte, merci.</p>";
    }

}
   
