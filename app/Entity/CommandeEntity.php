<?php
namespace App\Entity;

use Core\Entity\Entity;

class CommandeEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=commandes.index';
    }

    // public function getExtrait(){
    //     $html = '<p>' . substr($this->description, 0, 100) . '...</p>';
    //     $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
    //     return $html;
    // }

}