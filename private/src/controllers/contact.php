<?php
/**
 * Fichier qui gère la page de contact
 */

/**
 * index
 */
function contact_index() 
{
    // Expressions régulières
    $re = [
        "firstname" => '/^[a-z-]+$/i',
        "lastname" => '/^[a-z-]+$/i',
        "email" => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/'
    ];

    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        // Récupération des données
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;
    
        // -- Contrôle des champs

        // Contrôle du champ Prénom
        if (!preg_match($re['firstname'], $firstname)) {
            echo "Erreur du champ Firstname";
        }
        
        // Contrôle du champ nom
        
        // Contrôle du champ email

        // Contrôle du champ message


        if (!$send) {
            echo "On enregistre le message dans la BDD";
        }

        dump( $_POST );
        dump( $firstname );
        dump( $lastname );
        dump( $email );
        dump( $message );

    }

    else {
        // TODO: Suppression du else + redirection de l'utilisateur
        echo "Le formulaire ne peut être traité qu'avec la méthode POST";
    }

}