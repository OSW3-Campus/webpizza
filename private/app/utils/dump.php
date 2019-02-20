<?php
/**
 * Dump permet d'afficher une donnée entre les balises <pre>
 *
 * @param [mixed] $data 
 */
function dump( $data ) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}