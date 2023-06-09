<?php
namespace App\Table;

use Core\Table\Table;

class ProduitTable extends Table{

    protected $table = 'produits';

    /**
     * Récupère les derniers produits
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.img, produits.prix
            FROM produits
            ORDER BY produits.date DESC");
    }

    /**
     * Récupère les derniers produits de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.contenu, produits.date, produits.prix
            FROM produits
            ORDER BY produits.date DESC");
    }

    /**
     * Récupère un produit en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ProduitEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.img, produits.img2, produits.img3, produits.prix
            FROM produits
            WHERE produits.id = ?", [$id], true);
    }

    /**
     * Récupèreles produits Homme
     * @return \App\Entity\ProduitEntity
     */
    public function findHomme(){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.img, produits.prix
            FROM produits
            WHERE produits.type = ? 
            ORDER BY produits.date DESC", ['Homme']);
    }

    /**
     * Récupèreles produits Femme
     * @return \App\Entity\ProduitEntity
     */
    public function findFemme(){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.img, produits.prix
            FROM produits
            WHERE produits.type = ? 
            ORDER BY produits.date DESC", ['Femme']);
    }
}