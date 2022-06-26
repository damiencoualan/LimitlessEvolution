<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');

    }

    public function indexHomme(){
        $produits = $this->Produit->findHomme();
        $categories = $this->Category->all();
        $titre = 'Hommes';
        $bandeau = 'bandeauMan/stan.jpeg';
        App::getInstance()->title = 'Accueil Hommes';
        
        $this->render('produits.index', compact('produits', 'categories', 'titre', 'bandeau'));
    }

    public function indexFemme(){
        $produits = $this->Produit->findFemme();
        $categories = $this->Category->all();
        $titre = 'Femmes';  
        $bandeau = 'bandeauGeneral/bandeauF.webp';
        App::getInstance()->title = 'Accueil Femmes';
        
        $this->render('produits.index', compact('produits', 'categories', 'titre', 'bandeau'));
    }
    

    public function category(){
        $categorie = $this->Category->find($_GET['id']);
        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles', 'categories', 'categorie'));
    }

    public function show(){

        $produit = $this->Produit->findWithCategory($_GET['id']);
        App::getInstance()->title = $produit->titre;

        $this->render('produits.show', compact('produit'));
    }

}