<?php

class Controller
{
	public function home()
	{
		include("templates/home.php");
	}
	public function infos()
	{
		include("templates/infos.php");
	}
	public function projects()
	{
		include("templates/projects.php");
	}
	public function contact()
	{
		if (!empty($_POST)) {
			// On vérifie si le formulaire est valide
			$formIsValid = true;

			$author = strip_tags($_POST['author']);
			$email = strip_tags($_POST['email']);
			$message = strip_tags($_POST['message']);
			// la variable errors permet d'afficher les différentes erreurs lors de la validation du formulaire
			$errors = [];

			if (empty($author)) {
				$formIsValid = false;
				$errors[] = "Veuillez renseigner votre nom.";
			} elseif (mb_strlen($author) <= 1) {
				$formIsValid = false;
				$errors[] = "Votre nom est trop court. Merci d'en choisir un plus long.";
			} elseif (mb_strlen($author) > 60) {
				$formIsValid = false;
				$errors[] = "Votre nom est trop long. Merci d'en choisir un plus court.";
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$formIsValid = false;
				$errors[] = "Votre email n'est pas valide.";
			}
			if (empty($message)) {
				$formIsValid = false;
				$errors[] = "Veuillez saisir votre message.";
			}

			if (empty($errors)) {
				$manager = new Manager();
				$newPostId = $manager->newMessage($author, $email, $message);
			}
		}
		include("templates/contact.php");
	}
	public function fourofour()
	{
		include("templates/404.php");
	}
}
