<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class CommandesController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Commande');
    }

    public function index(){
        $commandes = $this->Commande->lastByCategory($_SESSION['auth']);
        App::getInstance()->title = 'Liste des commandes';

        $this->render('commande.index', compact('commandes'));
    }

    

}