<?php

//on va chercher nos classes
spl_autoload_register();

//paramètres de connexion en constantes
//soit localhost, soit l'IP du serveur
define("DBHOST", "localhost");
//utilisateur de la base (différent de PHPmyAdmin)
define("DBUSER", "root");
//mot de passe
define("DBPASS", "");
//nom de la base de données
define("DBNAME", "portfolio");

//on lance l'utilisation des sessions
session_start();

//on inclue la définition de la classe
$controller = new Controller();

//si on n'a pas de paramètre dans l'URL on redirige vers l'accueil
if (empty($_GET['page'])) {
  $controller->home();
} elseif ($_GET['page'] == 'infos') {
  $controller->infos();
} elseif ($_GET['page'] == 'accueil') {
  $controller->home();
} elseif ($_GET['page'] == 'projets') {
  $controller->projects();
} elseif ($_GET['page'] == 'contact') {
  $controller->contact();
} else { //si la page n'existe pas
  $controller->fourofour();
}
