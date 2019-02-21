<?php
/**
 * Fichier de définition des routes de l'applications
 * 
 * - Chaque ligne du tableau $routes défini une route
 * - Chaque route est défini par
 *      - Le nom de la route
 *      - Le "path"
 *      - Le "controller", la focntion déclenché par la route
 *      - La|Les méthode(s)
 */

$routes = [

    // Route Index (page d'accueil du site)
    ["homepage", "/", "homepage:index", ["HEAD","GET"]],

    // Liste des produits
    ["pizzas", "/pizzas", "pizzas:index", ["HEAD","GET"]],
    ["salads", "/salades", "salads:index", ["HEAD","GET"]],
    ["desserts", "/desserts", "desserts:index", ["HEAD","GET"]],
    ["drinks", "/boissons", "drinks:index", ["HEAD","GET"]],
    ["menus", "/menus", "menus:index", ["HEAD","GET"]],

    // Page de contact
    ["contact", "/contact", "contact:index", ["HEAD","GET","POST"]],

    // Pages de sécurité
    ["login", "/login", "security:login", ["HEAD","GET","POST"]],
    ["register", "/register", "security:register", ["HEAD","GET","POST"]],
    ["forgotten_password", "/forgotten-password", "security:forgotten_password", ["HEAD","GET","POST"]],

    // Page de commande
    ["order", "/order", "order:index", ["HEAD","GET"]],

    // Profil utilisateur
    ["account", "/mon-compte", "account", ["HEAD","GET"]],

    // ---

    // Erreur 404 
    // /!\ TOUJOURS EN DERNIER DU TABLEAU ROUTE
    ["error-404", "/404", "errors:404", ["HEAD","GET"]]

];