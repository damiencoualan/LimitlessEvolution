<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class MentionController extends AppController{

   public function index(){
   
        $this->render('mention-legal.conditions');
    }

   public function politique(){
   
        $this->render('mention-legal.politique');
    }

   public function contact(){
   
        $this->render('mention-legal.contact');
    }
   public function page404(){
   
        $this->render('mention-legal.page404');
    }

} 