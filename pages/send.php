<?php
		$failed = false;

		if(isset($_POST['name']) && ! empty($_POST['name']))
		{
			$name = htmlspecialchars($_POST['name']);
		}
		else
		{
			$failed = true;
		}
		
		if(isset($_POST['email']) && ! empty($_POST['email']))
		{
			$email = htmlspecialchars($_POST['email']);
		}
		else
		{
			$failed = true;
		}
		
		if(isset($_POST['content']) && ! empty($_POST['content']))
		{
			$content = htmlspecialchars($_POST['content']);
		}
		else
		{
			$failed = true;
		}
		
		if(isset($_POST['subject']) && ! empty($_POST['subject']))
		{
			$subject = htmlspecialchars($_POST['subject']);
		}
		else
		{
			$subject = '';
		}

		if(! $failed)
		{
			require_once('./lib/recaptchalib.php');
			$privatekey = "6Lflcc8SAAAAAK05fPmwkJ4e-m-TxqvVpaODdKeg";
			$resp = recaptcha_check_answer ($privatekey,
			                            $_SERVER["REMOTE_ADDR"],
			                            $_POST["recaptcha_challenge_field"],
			                            $_POST["recaptcha_response_field"]);
			
			if (!$resp->is_valid) {
				$error = $resp->error;
				$failed = true;
				
				include_once('./pages/contact.php');
				
			} else {  
				$to      = 'prdevint@polytech.unice.fr';
				$subject = '[Formulaire de Contact] De: ' . $name . ' - Sujet: ' . $subject;
					
				$message = "Nom du contact: " . $name . "\r\n";
				$message .= "\r\n";
				$message .= "Email du contact: " . $email . "\r\n";
				$message .= "\r\n";
				$message .= "Sujet: " . $subject . "\r\n";
				$message .= "\r\n";
				$message .= "Message: " . $content . "\r\n";
				$message .= "\r\n";
					
				$headers = 'From: "Les Projets DeViNT"'."\n";
				$headers .='Reply-To: prdevint@polytech.unice.fr'."\n";  
				$headers .= 'Content-Type: text/plain; charset="utf-8"'."\n";
				
				if( ! mail($to, $subject, $message, $headers))
				{
					$failed = true;
				}
			}
		}
?>

<?php
	if($failed)
	{
?>
<div class="alert alert-error">
	Une erreur est survenue lors de l'envoi de votre message. Essayez une nouvelle fois ou contactez un administrateur.
</div>
<?php
	}
	else
	{
?>
<div class="alert alert-success">
	Votre message a bien été envoyé!
</div>
<?php
	}
?>