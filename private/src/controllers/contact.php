<?php
/**
 * Fichier qui gère la page de contact
 */

/**
 * index
 */
function contact_index() 
{
    global $re;

    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $send = true;

        // Récupération des données
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;
    
        // -- Contrôle des champs

        // Contrôle du champ Prénom
        if (!preg_match($re['firstname'], $firstname)) {
            $send = false;
            echo "Erreur du champ Firstname";
        }
        
        // Contrôle du champ nom
        if (!preg_match($re['lastname'], $lastname)) {
            $send = false;
            echo "Erreur du champ Lastname";
        }
        
        // Contrôle du champ email
        if (!preg_match($re['email'], $email)) {
            $send = false;
            echo "Erreur du champ Email";
        }

        // Contrôle du champ message
        if (strlen($message) < 10) {
            $send = false;
            echo "Erreur du champ message";
        }

        if ($send) {
            // TODO: Création de la table "message" (id, firstname, lastname, message, date_time)
            // TODO: Ajout du fichier SQL contenant la structure de la table "message", au répertoire /private/sql/
            // TODO: Enregistrement du messgae dans la BDD avec PDO
            // TODO: Définition d'un message de "callback / flashbag" (success ou error)
            // TODO: Redirection de l'utilisateur vers la page précedente 

            // echo "On enregistre le message dans la BDD";
        
        }
        // else {
            // TODO: Définition d'un message de "callback" (error)
            // TODO: Redirection de l'utilisateur vers la page précedente 
        //     echo "Erreur sur le form";
        // }

    }

    else {
        // TODO: Suppression du else + redirection de l'utilisateur
        // TODO: Définition d'un message de "callback" (error)
        // TODO: Redirection de l'utilisateur vers la page précedente 
        echo "Le formulaire ne peut être traité qu'avec la méthode POST";
    }

}