<?php

require_once 'AppController.php';

class DefaultController extends AppController {
    
    public function login() {
        // todo
        $this->render('login');
    }

    public function projects() {
        // todo
        $this->render('projects');
    }

    public function homepage() {
        // todo
        $this->render('homepage');
    }
}