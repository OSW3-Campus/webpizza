<?php
/**
 * Fichier qui gère la page d'accueil
 */

/**
 * Pizzas
 */
function products_pizzas() 
{
    global $db;
    
    // Récupération de la liste des produits de type "Pizza"
    $query = $db['main']->query( "SELECT t1.id, t1.name, t1.price, t3.name FROM products AS t1 INNER JOIN product_ingredients AS t2 ON t2.id_product = t1.id INNER JOIN ingredients AS t3 ON t3.id = t2.id_ingredient WHERE t1.type='pizza' ORDER BY t1.name ASC, t3.name ASC" );
    $results = $query->fetchAll();

    $pizzas = $results;

    // Intégration de la vue
    include_once "../private/src/views/products/pizzas.php";
}

/**
 * Salads
 */
function products_salads() 
{
    // Code 
    // ...
    
    // Intégration de la vue
    include_once "../private/src/views/products/salads.php";
}

/**
 * Desserts
 */
function products_desserts() 
{
    // Code 
    // ...
    
    // Intégration de la vue
    include_once "../private/src/views/products/desserts.php";
}

/**
 * Drinks
 */
function products_drinks() 
{
    // Code 
    // ...
    
    // Intégration de la vue
    include_once "../private/src/views/products/drinks.php";
}

/**
 * Menus
 */
function products_menus() 
{
    // Code 
    // ...
    
    // Intégration de la vue
    include_once "../private/src/views/products/menus.php";
}