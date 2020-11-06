<?php

class Manager
{
	// on enregistre le message dans la bdd
	public function newMessage($author, $email, $message)
	{
		$sql = "INSERT INTO
						messages (author, email, message, created_date)
						VALUES
						(:author, :email, :message, NOW())";

		// on appelle la class DbConnection pour aller chercher la bdd
		$pdo = DbConnection::getPdo();

		$stmt = $pdo->prepare($sql);
		$stmt->execute([
			":author" => $author,
			":email" => $email,
			":message" => $message,
		]);
	}
}
