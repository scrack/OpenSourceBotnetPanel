<?php
App::uses('AppController', 'Controller');
/**
 * Api Controller
 */
class ApiController extends AppController {

    public $components = array('Security');

    public function beforeFilter() {

        $this->Security->csrfCheck = false;
        $this->view = 'home';
        $this->layout =  'blank';
    }

    public function installed() {

    }

    public function checkin() {

    }

    public function update() {

    }

    public function loot() {

    }

    public function work() {

    }
}