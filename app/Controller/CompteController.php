<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class CompteController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');
        $this->loadModel('Category');

    }

    public function index(){
        $produits = $this->Produit->last();
        $categories = $this->Category->all();
        
        $this->render('compte.index', compact('produits', 'categories'));
    }
    

}