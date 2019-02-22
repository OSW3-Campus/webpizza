<?php
/**
 * Fichier qui gère la page de contact
 */

/**
 * index
 */
function contact_index() 
{
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        // Récupération des données
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;
    
        // -- Contrôle des champs

        // Contrôle du champ Prénom
        
        // Contrôle du champ nom
        
        // Contrôle du champ email

        // Contrôle du champ message



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