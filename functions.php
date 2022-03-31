<?php


/* Fonction d'appel du statut des stocks pour chaque article */

function get_statut_by_id($id) {

    require __DIR__. '/data/statut_article.php';
    foreach($statut as $value){
        if($value['id'] == $id) {
            return $value;
        }
    }
    return false;

}


?>