<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'exécution
 * 3.
 */

/**
 * 1. Définition des constantes
 */

// Definir le chemin du répertoire "utils"
define('UTILS_PATH', "../private/app/utils/");

// WEBSITE_TITLE : Definition du titre du site
define('WEBSITE_TITLE', "WebPizza !");


/**
 * 2. Définition des variables d'environnement d'exécution
 */

// Environnement de développement ou production ?
// les valeur peuvent être : "prod" ou "dev"
// Par défaut, on considère que l'application s'exécute en environnement de PROD
$env = "prod";

// Liste des domaines que l'on considères comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1",
    "localhost",
    // "webpizza.local"
];